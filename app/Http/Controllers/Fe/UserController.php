<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\Orders;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ViewOrdersHistory()
    {
        if (auth('customers')->check()) {
            $orders = Orders::all()->where('customer_id',auth('customers')->id());
            // dd($orders);
            return view('fe.user.OrdersHistory',compact('orders'));
        }else{
            return redirect()->route('login');
        }
        
    }
    public function information()
    {
        if (auth('customers')->check()) {
            return view('fe.user.information');
        }else{
            return redirect()->route('login');
        }
    }
    public function EditInformation($id)
    {
        if (auth('customers')->check()) {
            return view('fe.user.EditInformation');
        }else{
            return redirect()->route('login');
        }
    }
    public function updateInformation(Request $request, Customers $user)
    {
        $user->update($request->all());
        if ($request->hasFile('photo')) {
            if ($user->image) {
                Storage::delete(['public/images', $user->image]);
            }
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images', $fileName);
            $user->image = $fileName;
            $user->save();
        }
        return Redirect::route('information')->with('success', 'Edit information successfully');
    }
    public function chattest(){
        $users = Customers::where("id","<>",auth('customers')->user()->id)->get();
        // dd($users);
        return view('fe.user.chatpublic',compact('users'));
    }
}
