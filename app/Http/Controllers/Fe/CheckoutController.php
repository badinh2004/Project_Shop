<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\CouponOrder;
use App\Models\OrderDetail;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index()
    {
        if (auth('customers')->check()) {
            $carts = Cart::where('customer_id', auth('customers')->id())->get();
            if ($carts->count() == 0) {
                return back()->with('err', 'There are no products in the cart');
            };
            return view('fe.checkout.checkOut', compact('carts'));
        } else {
            return redirect()->route('login');
        }
    }
    public function addOder(Request $request)
    {
        $code = Str::random(10);
        $customers =  auth('customers')->user();
        $data  = $request->only(
            'name',
            'email',
            'phone',
            'address',
            'customer_id',
            'note',
            'status_id',
            'payment'
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
                    'size' => $cart->variants->size,
                    'quantity' => $cart->quantity
                ];
                $total += $cart->variants->sale_price * $cart->quantity;
                // dd($data1);
                OrderDetail::create($data1);
            }
            // dd($total);
            foreach ($customers->carts as $cart) {
                $cart->delete();
            }
            $order->total = $total;
            $order->save();
            // Mail::to($order->email)->queue(new OrderMail($order));
            // if ($request->payment === 'VNPay') {

            //     $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            //     $vnp_Returnurl = "http://127.0.0.1:8000/";
            //     $vnp_TmnCode = "ROGC3KGV";
            //     $vnp_HashSecret = "HFMZ2NHJU1BZMMA5UE5KOUTX1ZY5STQ8";

            //     $vnp_TxnRef = $order->code;
            //     $vnp_OrderInfo = 'thanh toan hoa don';
            //     $vnp_OrderType = 'Shopfood';
            //     $vnp_Amount = $order->total* 23000 * 100;
            //     $vnp_Locale = 'VN';
            //     $vnp_BankCode = 'NCB';
            //     $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

            //     $inputData = array(
            //         "vnp_Version" => "2.1.0",
            //         "vnp_TmnCode" => $vnp_TmnCode,
            //         "vnp_Amount" => $vnp_Amount,
            //         "vnp_Command" => "pay",
            //         "vnp_CreateDate" => date('YmdHis'),
            //         "vnp_CurrCode" => "VND",
            //         "vnp_IpAddr" => $vnp_IpAddr,
            //         "vnp_Locale" => $vnp_Locale,
            //         "vnp_OrderInfo" => $vnp_OrderInfo,
            //         "vnp_OrderType" => $vnp_OrderType,
            //         "vnp_ReturnUrl" => $vnp_Returnurl,
            //         "vnp_TxnRef" => $vnp_TxnRef
            //     );

            //     if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            //         $inputData['vnp_BankCode'] = $vnp_BankCode;
            //     }

            //     ksort($inputData);
            //     $hashdata = "";
            //     $query = "";
            //     $i = 0;
            //     foreach ($inputData as $key => $value) {
            //         if ($i == 1) {
            //             $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            //         } else {
            //             $hashdata .= urlencode($key) . "=" . urlencode($value);
            //             $i = 1;
            //         }
            //         $query .= urlencode($key) . "=" . urlencode($value) . '&';
            //     }

            //     $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            //     $vnp_Url .= "?" . $query . 'vnp_SecureHash=' . $vnpSecureHash;

            //     // dd($order);
            //     $returnData = array(
            //         'code' => '00',
            //         'message' => 'success',
            //         'data' => $vnp_Url
            //     );
            //     if (isset($_POST['redirect'])) {
            //         header('Location: ' . $vnp_Url);
            //         die();
            //     } else {
            //         echo json_encode($returnData);
            //     }
            // } else {
            //     return redirect()->route('checkdetail',$order->id);
            // }
            return redirect()->route('checkcoupon', $order->id);
        } else {
            return redirect()->route('index')->with('err', 'Order failed');
        }
    }

    // private function redirectToVNPay($order)
    // {
    //     $vnpayUrl = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"; // Đổi sang URL chính thức nếu không phải sandbox
    //     $vnpayParams = [
    //         'vnp_Version' => '2.1.0',
    //         'vnp_Command' => 'pay',
    //         'vnp_TmnCode' => env('VNPAY_TMN_CODE'),
    //         'vnp_Amount' => $order->total * 100,
    //         'vnp_CurrCode' => 'EN',
    //         'vnp_OrderInfo' => 'Order #' . $order->id,
    //         'vnp_OrderType' => 'billpayment',
    //         'vnp_ReturnUrl' => route('vnpay.return'),
    //         'vnp_TxnRef' => $order->id,
    //         'vnp_CreateDate' => now()->format('YmdHis'),
    //         'vnp_Locale' => 'vn',
    //         'vnp_TransactionType' => '1',
    //         'vnp_IpAddr' => request()->ip(),
    //         'vnp_BankCode' => 'VNBANK'
    //     ];

    //     $vnpayParams['vnp_SecureHash'] = $this->generateSecureHash($vnpayParams);

    //     $query = http_build_query($vnpayParams);
    //     $paymentUrl = $vnpayUrl . '?' . $query;

    //     return redirect($paymentUrl);
    // }

    // private function generateSecureHash($params)
    // {
    //     $secretKey = env('VNPAY_SECRET_KEY');
    //     ksort($params);
    //     $query = urldecode(http_build_query($params));
    //     return hash_hmac('sha512', $query, $secretKey);
    // }

    public function checkcoupon($id)
    {
        $order = Orders::query()->where('id', $id)->get()->first();
        $orderproduct = $order->orderdetails;
        return view('fe.checkout.checkcoupon', compact('order', 'orderproduct'));
    }

    public function coupon(Request $request)
    {
        $order = Orders::query()->where('id',$request->order)->first();
        $coupon = Coupon::query()->where('name', $request->gift)->first();
        // đã tồn tai coupon chưa + 
        if (!$coupon) {
            return redirect()->back()->with(['success' => 'Coupon not found.']);
        }
        if ($order->coupon_id) {
            return redirect()->back()->with(['success' => 'coupon already exists']);
        }
        if ($coupon->quantity <= 0) {
            return redirect()->back()->with(['success' => 'Coupon is out of stock.']);
        }
        if ($order->coupon_id == $coupon->id) {
            return redirect()->back()->with(['success' => 'coupon already exists']);
        }
        if ($order->coupon_id == null) {
            $couponCode = $coupon->name;
            $order->coupon_id = $coupon->id;
            if (strpos($couponCode, '$') !== false) {
                $subtotal = $coupon->code;
                $total = $order->total - $subtotal;
            }
            if (strpos($couponCode, '%') !== false) {
                $subtotal = $order->total / 100 * $coupon->code;
                $total = $order->total - $subtotal;
            }
            // dd(strpos($couponCode,"$"));
            $order->total = $total;
            $order->subtotal = $subtotal;
            $order->coupon_id = $coupon->id;
            $order->save();
        }
        
        $coupon->quantity -= 1;
        $coupon->save();

        // Điều hướng lại với thông báo thành công
        return redirect()->back()->with('success', 'Coupon applied successfully.');
    }

    public function checkcout(Request $request)
{
    $order = Orders::query()->where('id', $request->id)->first();

    // dd($order);
    // $order->payment = $request->payment;
    // $order->save();
    // if ($request->payment === 'VNPay') {
    if ($order->payment === 'VNPay') {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/";
        $vnp_TmnCode = "ROGC3KGV";
        $vnp_HashSecret = "HFMZ2NHJU1BZMMA5UE5KOUTX1ZY5STQ8";

        $vnp_TxnRef = $order->code;
        $vnp_OrderInfo = 'thanh toan hoa don';
        $vnp_OrderType = 'Shopfood';
        $vnp_Amount = $order->total * 23000 * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $request->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $hashdata = "";
        $query = "";
        $i = 0;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= "?" . $query . 'vnp_SecureHash=' . $vnpSecureHash;

        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );

        // if (isset($_POST['redirect'])) {
            return redirect()->to($vnp_Url);
        // } else {
        //     return response()->json($returnData);
        // }
    } else {
        return redirect()->route('checkdetail', $order->id);
    }
}


    public function checkdetail($id)
    {
        $order = Orders::query()->where('id', $id)->get()->first();
        // dd($order);
        $orderproduct = $order->orderdetails;
        return view('fe.checkout.checkdetail', compact('order', 'orderproduct'));
    }
}
