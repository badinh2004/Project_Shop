<?php

namespace App\Http\Controllers\Fe;

use App\Events\ForGotPassWord as EventsForGotPassWord;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Customers;
use App\Models\Forgotpassword;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Wishlit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // public function __construct(Product $product,category $category)
    // {
    //     $product = Product::orderBy('id','desc')->get();
    //     $cate = category::orderBy('id','desc')->get();
    // }
    public function index()
    {
        $product = Product::orderBy('id', 'desc')->get();
        $product = $product->take(8);
        foreach ($product as $value) {
            // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
            if ($value->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
                $value->isNew = true;
            } else {
                $value->isNew = false;
            }
        }
        $cate = category::orderBy('id', 'desc')->get();
        return view('fe.index', compact('product', 'cate'));
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

    public function forgotpassword()
    {
        return view('fe.login-register/forgotpassword');
    }
    public function postForgotpassword(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required|email|exists:customers,email', // exists:customers,email kiểm tra email tồn tại
        ]);

        $customer = Customers::where('email', $req->email)->firstOrFail();
        // $newPassword = Str::random(8);
        // $customer->password = Hash::make($newPassword);
        // $customer->save();


        // event(new EventsForGotPassWord($customer, $newPassword));
        event(new EventsForGotPassWord($customer));

        return view('fe.checkmail');
    }

    public function ResetPass(Request $request)
    {
        $token = $request->query('token');

        try {
            $data = Crypt::decrypt($token) ;
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('error', 'Invalid or expired link.');
        }

        $timeup = Carbon::parse($data['timeup']);
        if (Carbon::now()->greaterThan($timeup)) {
            return redirect()->route('login')->with('error', 'This link has expired.');
        }

        $customer = Customers::find($data['customer_id']);
        if (!$customer) {
            return redirect()->route('login')->with('error', 'Customer not found.');
        }
        return view('fe.login-register.resetpass', ['customer' => $customer]);
    }

    public function postResetPass(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8'
        ]);

        $customer = Customers::find($request->customer_id);
        if (!$customer) {
            return redirect()->route('login')->with('error', 'Customer not found.');
        }

        $customer->password = Hash::make($request->password);
        $customer->save();

        return redirect()->route('login')->with('success', 'Password reset successfully.');
    }
}
