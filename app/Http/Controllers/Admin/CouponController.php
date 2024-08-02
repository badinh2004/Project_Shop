<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\CouponOrder;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon = Coupon::query()->get();
        return view('admin.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Coupon::create($request->all());
        return redirect()->route('coupons.index')->with('success','Successflly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon = Coupon::where('id',$id)->first();
        return view('admin.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Coupon $coupon)
    {
        $coupon->update($request->all());
        return redirect()->route('coupons.index')->with('success','successflly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CouponOrder::query()->where('coupon_id',$id)->delete();
        Coupon::find($id)->delete();
        return back()->with('success','DELETE Successfully!!');
    }
}
