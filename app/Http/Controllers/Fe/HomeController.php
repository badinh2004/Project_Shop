<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Customers;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Wishlit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    // public function __construct(Product $product,category $category)
    // {
    //     $product = Product::orderBy('id','desc')->get();
    //     $cate = category::orderBy('id','desc')->get();
    // }
    public function index()
    {
        $product = Product::orderBy('id','desc')->get();
        $product = $product->take(8);
        foreach ($product as $value) {
            // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
            if ($value->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
                $value->isNew = true;
            } else {
                $value->isNew = false;
            }
        }
        $cate = category::orderBy('id','desc')->get();
        return view('fe.index',compact('product','cate'));
    }

    public function login()
    {
        return view('fe.login-register/login-register');
    }

    public function postLogin(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required|email|exists:customers', // exists ton tai hay khong trong user
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('customers')->attempt(['email' => $req->email, 'password' => $req->password], true)) {
            return redirect()->route('index')->with('success', 'Login successfully');
        } else {
            return redirect()->back()->with('error', 'failed');
        }
    }

    public function Register()
    {
        return view('fe.login-register/login-register');
    }

    public function postRegister(Request $req)
    {
        // dd($req->all());
        $validate = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password|min:8'
        ]);
        try {
            $data = [
                "name" => $req->name,
                "email" => $req->email,
                "password" => Hash::make($req->password)
            ];

            Customers::create($data);
            return redirect()->back()->with('success', 'Create an Account successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Failed, pls check');
        }
    }

    public function logout()
    {
        auth('customers')->logout();
        return redirect()->back()->with('sucess', 'logout successfully');
    }

    public function filterByCategory(Request $request, $id)
    {
        $selectedCategories = $request->input('categories', []);
        $products = collect();

        if (!empty($selectedCategories) && !in_array('all', $selectedCategories)) {
            // Lấy sản phẩm từ các danh mục đã chọn
            foreach ($selectedCategories as $categoryId) {
                $category = Category::findOrFail($categoryId);
                $products = $products->merge($category->products);
            }
        } else {
            // Lấy tất cả sản phẩm nếu không có danh mục được chọn
            $products = Product::orderBy('id', 'desc')->get();
        }

        $products = $products->take(8);
    
        // Chuẩn bị dữ liệu trả về cho frontend
        $formattedProducts = $products->map(function ($product) {
            // Kiểm tra nếu variants không rỗng trước khi truy cập price
            $price = !empty($variants) ? $variants[0]['price'] : null;

            return [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'slug' => $product->slug,
                'category' => $product->category->name ?? '',
                'variants' =>  $product->variants->toArray(),
                'price' => $price,
            ];
        });

        return response()->json(['products' => $products]);
    }
}
