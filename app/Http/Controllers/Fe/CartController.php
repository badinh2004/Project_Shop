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
        $customer_id = auth('customers')->id();
        $data = [
            'customer_id' => $customer_id,
            'ProductID' => $product->id,
            'variant_id' => $req->input('variant_id'),
            'quantity' => $req->quantity
        ];
        Cart::create($data);
        return redirect()->back();
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
        $cart = Cart::all();
        return view('fe.shop.cart',compact('cart'));
    }
}
