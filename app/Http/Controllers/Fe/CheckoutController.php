<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(){
        if (auth('customers')->check()) {
            $carts = Cart::where('customer_id',auth('customers')->id())->get();
            if($carts->count() == 0){
                return back()->with('err','There are no products in the cart');
            };
            return view('fe.checkout.checkOut',compact('carts'));
        }else{
            return redirect()->route('login');
        }
    }
    public function addOder(Request $request){
        $code = Str::random(10);
        $customers =  auth('customers')->user();
        $data  = $request->only(
            'name',
            'email',
            'phone',
            'address',
            'customer_id',
            'note',
            'status_id'
        );
        $data['customer_id'] = $customers->id;
        $data['code'] = $code;
        $data['status_id'] = '1';
        if ($order = Orders::create($data)) {
            $total = 0;
            foreach ($customers->carts as $cart) {
                $data1 = [
                    'order_id' => $order->id,
                    'product_id' => $cart->ProductID,
                    'price' => $cart->variants->sale_price,
                    'quantity' => $cart->quantity
                ];
                $total += $cart->variants->sale_price* $cart->quantity;
                // dd($data1);
                OrderDetail::create($data1);
            }
            // dd($total);
            foreach ($customers->carts as $cart) {
                $cart->delete();
            }
            $order->total = $total;
            $order->save();
            return redirect()->route('index')->with('success', 'Order COD success');
        }else {
            return redirect()->route('index')->with('err', 'Order failed');
        }

    }
}
