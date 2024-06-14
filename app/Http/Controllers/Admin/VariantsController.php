<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariants;
use Illuminate\Http\Request;

class VariantsController extends Controller
{
    public function index(Product $product)
    {
        $pro = Product::orderBy('id', 'desc')->get(); //orderBy('id','desc') de moi len dau
        return view('admin.variants.index', compact('pro'));
    }
    public function show($id)
    {
        $variants = ProductVariants::where('ProductID',$id)->get();
        // dd($variants);
        return view('Admin.Variants.show', compact('variants'));
    }
    public function edit($id){
        $editvariant = ProductVariants::find($id);
        dd($editvariant);
    }
}
