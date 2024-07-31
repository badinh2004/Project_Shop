<?php

namespace App\Http\Controllers\Fe\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class VNPayController extends Controller
{
    public function return(Request $request)
    {
        $vnpayParams = $request->all();
        $vnpaySecureHash = $vnpayParams['vnp_SecureHash'] ?? '';
    
        unset($vnpayParams['vnp_SecureHash']);
        unset($vnpayParams['vnp_SecureHashType']);
    
        $secureHash = $this->generateSecureHash($vnpayParams);
    
        if ($vnpaySecureHash === $secureHash) {
            // Xử lý thanh toán thành công
            $orderId = $vnpayParams['vnp_TxnRef'];
            $order = Orders::find($orderId);
            if ($order) {
                $order->status_id = 2; // Hoặc trạng thái hoàn thành tùy vào hệ thống của bạn
                $order->save();
            }
            return redirect()->route('checkdetail',$order->id);;
        } else {
            // Xử lý thanh toán thất bại
            return redirect()->route('index')->with('err', 'Payment failed.');
        }
    }

}
