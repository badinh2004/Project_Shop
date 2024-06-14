<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductVariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $pro = Product::orderBy('id', 'desc')->get(); //orderBy('id','desc') de moi len dau
        return view('admin.variants.index', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.Variants.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $variants = ProductVariants::where('ProductID', $id)->get();
        // dd($variants->first()->ProductID);
        return view('Admin.Variants.show', compact('variants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editvariant = ProductVariants::find($id);
        return view('Admin.Variants.edit', compact('editvariant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $variant = ProductVariants::findOrFail($id);
            $variants = [
                'size' => $request->size,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'quatity' => $request->quatity
            ];
            $variant->update($variants);
            return redirect()->route('variant.show',$variant->ProductID)->with('success','Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Failed');
            
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $delcate = ProductVariants::find($id)->delete();
            return Redirect::route('variant.show',$delcate->ProductID)->with('success','Delete successfully');
        } catch (\Throwable $th) {
            return Redirect::back()->with('success','Delete successfully');
        }
    }
}
