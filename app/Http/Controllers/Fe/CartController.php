<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $req, Product $product)
    {
        if (auth('customers')->check()) {
            $customer_id = auth('customers')->id();
            $data = [
                'customer_id' => $customer_id,
                'ProductID' => $product->id,
                'variant_id' => $req->input('variant_id'),
                'quantity' => $req->quantity
            ];
            if ($data['variant_id'] == null) {
                return redirect()->back()->with('err','Please choose weight');
            }
            Cart::create($data);
            return redirect()->back();
        }else{
            return redirect()->route('login');
        }
    }

    public function updateCart(Request $request)
    {
        $cart = Cart::find($request->id);

        if (!$cart) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy giỏ hàng'], 404);
        }

        // Cập nhật số lượng trong giỏ hàng
        $cart->quantity = $request->quantity;
        $cart->save();

        // Trả về phản hồi JSON thành công
        return response()->json(['success' => true, 'message' => 'Cập nhật giỏ hàng thành công']);

    }

    public function index(){
        $product = Product::all();
        $cart = Cart::where('customer_id',auth('customers')->id())->get();
        return view('fe.shop.cart',compact('cart','product'));
    }

    public function deleteOne($id){
        Cart::where('id',$id)->delete();
        return back();
    }
    public function deleteAll(){
        Cart::where('customer_id',auth('customers')->id())->delete();
        return back();
    }
}
