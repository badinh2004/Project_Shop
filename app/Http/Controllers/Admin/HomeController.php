<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class HomeController extends Controller
{
    public function index()
    {
        return view('fe.index');
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
        
        if (Auth::guard('customers')->attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('index')->with('success','Login successfully');
        }else{
            return redirect()->back()->with('error','failed');
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

    public function logout(){
        auth('customers')->logout();
        return redirect()->back()->with('sucess','logout successfully');
    }

}
