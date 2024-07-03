<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Comment;
use App\Models\Customers;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;

class ProductShopController extends Controller
{
    public function ViewShop()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $cates = category::orderBy('id', 'desc')->get();
        // dd($products);
        foreach ($products as $value) {
            // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
            if ($value->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
                $value->isNew = true;
            } else {
                $value->isNew = false;
            }
        }
        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('fe.shop.products', compact('products', 'productsort', 'cates'));
    }

    public function ViewProduct($products, $slug)
    {

        $cate = category::all();
        $products = Product::where('slug', $slug)->first();
        $product_id = $products->id;
        $comment = Comment::where('product_id',$product_id)->orderBy('id', 'desc')->get();
        $comments_count = Comment::where('product_id', $products->id)->count();
        $totalRating = $comment->sum('rating');
        $averageRating = $comments_count > 0 ? $totalRating / $comments_count : 0;
        // dd($comment->Customers->name);


        return view('fe.shop/product-detail', compact('products', 'cate','comment','comments_count','averageRating'));
    }

    public function handleSearchQuery(Request $req)
    {
        // Lấy từ khóa tìm kiếm từ request
        $search = $req->input('search');

        // Chuyển đổi các ký tự không hợp lệ thành dấu '-'
        $searchFriendly = str_replace(' ', '-', $search);
        $searchFriendly = urlencode($searchFriendly);

        // Chuyển hướng đến URL thân thiện
        return redirect()->route('search', ['search' => $searchFriendly]);
    }

    public function search($search)
    {
        // Giải mã URL thân thiện thành chuỗi tìm kiếm gốc
        $search = urldecode($search);
        $search = str_replace('-', ' ', $search);

        // Tìm kiếm sản phẩm theo từ khóa
        $products = Product::where('name', 'LIKE', "%{$search}%")
            ->orWhereHas('category', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            })
            ->get();

        $cates = category::orderBy('id', 'desc')->get();
        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();
        // Trả về view hiển thị kết quả tìm kiếm
        return view('fe.shop/products', ['search' => $search, 'products' => $products, 'productsort' => $productsort, 'cates' => $cates]);
    }

    public function addWishlist(Request $req, Product $product)
    {
        $customer_id = auth('customers')->id();
        $product_id = $product->id;
        
        if (Wishlist::where('customer_id', $customer_id)
                    ->where('product_id', $product_id)
                    ->exists()) {
            // Đã tồn tại trong danh sách yêu thích
            return redirect()->back()->with('error', 'Sản phẩm đã tồn tại trong danh sách yêu thích.');
        }
        
        // Nếu không tồn tại, thêm vào wishlist
        $wishlistItem = Wishlist::create([
            'customer_id' => $customer_id,
            'product_id' => $product_id,
            'variant_id' => $req->input('variant_id'), // Nếu có
        ]);
        
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào danh sách yêu thích.');
        
    }

    public function ViewWish()
    {
        $wish = Wishlist::all();
        $productsort = Product::orderBy('created_at', 'desc')->take(5)->get();
        // dd($wish->products);
        return view('fe.shop.wishlist', compact('wish', 'productsort'));
    }

    public function deleteWishList($id)
    {
        try {
            $delcate = Wishlist::find($id)->delete();
            return Redirect::route('fe.shop.wishlist')->with('success','Delete successfully');
        } catch (\Throwable $th) {
            return Redirect::back()->with('success','Delete successfully');
        }
    }

    public function sortProducts(Request $request,ProductVariants $variants){

        $sortBy = $request->input('sortBy');

        switch ($sortBy) {
            case '1':
                $products = Product::orderBy('created_at', 'desc')->get(); // Sắp xếp mới nhất
                break;
            case '2':
                $products = Product::orderBy('name', 'asc')->get(); // Sắp xếp theo A - Z
                break;
            case '3':
                $products = Product::orderBy('name', 'desc')->get(); // Sắp xếp theo Z - A
                break;
            case '4':
                $products = Product::leftJoin('productvarians', 'products.id', '=', 'productvarians.ProductID')
                    ->select('products.id', 'products.name', 'products.image', 'products.slug', 'products.created_at', 'products.updated_at', DB::raw('MIN(productvarians.price) as min_price'))
                    ->groupBy('products.id', 'products.name', 'products.created_at', 'products.updated_at')
                    ->orderBy('min_price', 'asc')->get();
                break;
            case '5':
                $products = Product::leftJoin('productvarians', 'products.id', '=', 'productvarians.ProductID')
                    ->select('products.id', 'products.name','products.image', 'products.slug', 'products.created_at', 'products.updated_at', DB::raw('MIN(productvarians.price) as min_price'))
                    ->groupBy('products.id', 'products.name', 'products.created_at', 'products.updated_at')
                    ->orderBy('min_price', 'desc')->get();
                break;
            default:
                $products = Product::orderBy('created_at', 'desc')->get(); // Mặc định sắp xếp mới nhất
                break;
        }
        $formattedProducts = $products->map(function ($product) {
            // Kiểm tra nếu variants không rỗng trước khi truy cập price
            $price = !empty($variants) ? $variants[0]['price'] : null;

            return [
                'category' => $product->category->name ?? '',
                'variants' =>  $product->variants->toArray(),
            ];
        });
        $cates = Category::orderBy('id', 'desc')->get();
        foreach ($products as $product) {
            // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
            if ($product->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
                $product->isNew = true;
            } else {
                $product->isNew = false;
            }
        }
        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();

        return response()->json(['products' => $products,'productsort'=>$productsort,'cates'=>$cates]);
        return view('fe.shop.products', compact('products', 'productsort', 'cates'));
    }
}
