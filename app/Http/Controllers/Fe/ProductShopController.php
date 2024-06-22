<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Customers;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // dd($products->variants);

        return view('fe.shop/product-detail', compact('products', 'cate'));
    }


    public function filterProductsByCategory($category)
    {
        // Tìm danh mục dựa trên tên
        $category = Category::where('name', $category)->first();

        if ($category) {
            $products = Product::where('category_id', $category->id)->get();
        } else {
            $products = Product::all();
        }

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

        return view('fe.shop.products', compact('products', 'productsort', 'cates'));
    }

    public function filterProductsByPrice(Request $request)
    {
        $filterPriceGTE = $request->input('filterPriceGTE');
        $filterPriceLTE = $request->input('filterPriceLTE');

        // Lọc sản phẩm theo khoảng giá
        $variants = ProductVariants::whereBetween('sale_price', [$filterPriceGTE, $filterPriceLTE])
            ->with('product') // Load sản phẩm tương ứng với biến thể
            ->get();

        $products = collect();
        foreach ($variants as $variant) {
            $product = $variant->product;

            // Chỉ hiển thị duy nhất một sản phẩm với product_id
            if (!$products->contains('id', $product->id)) {
                $products->push($product);
            }
        }

        // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
        if ($product->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
            $product->isNew = true;
        } else {
            $product->isNew = false;
        }
        $cates = category::orderBy('id', 'desc')->get();
        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();

        return view('fe.shop/products', compact('products', 'productsort', 'cates'));
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
        $productsort = Product::orderBy('created_at', 'desc')->take(4)->get();
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
}
