<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    
    public function loginadmin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $req)
    {
        $validate = $req->validate([
            'login'    => 'required|string',
            'password' => 'required'
        ]);
        $login = $req->input('login');

        $fillerLogin = filter_var($login , FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data = [
            $fillerLogin => $login,
            'password' => $req->password
        ];
        if (auth('users')->attempt($data,true )) {
            return redirect()->route('admin');
        } else {
            return redirect()->back();
        }
    }

    public function logoutadmin()
    {
        try {
            auth('users')->logout();
        return redirect()->route('loginadmin');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
