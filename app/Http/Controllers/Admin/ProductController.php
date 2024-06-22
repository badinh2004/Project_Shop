<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Dd;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sử dụng Eager Loading để lấy dữ liệu sản phẩm cùng với danh mục và biến thể
        $pro = Product::with(['categorys', 'variants'])->get();
        return view('admin.product.tableProduct', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = category::all();
        return view('admin.product.addProduct', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images ', $fileName);
        $request->merge(['image' => $fileName]);
        try {
            $products = Product::create($request->all());
            if ($products && $request->hasFile("photos")) {
                foreach ($request->photos as $key => $value) {
                    $fileNames = $value->getClientOriginalName();
                    $value->storeAs("public/images", $fileNames);
                    ProductImages::create([
                        "ProductID" => $products->ProductID,
                        "image" => $fileNames
                    ]);
                }
            }
            foreach ($request->variants as $variantData) {
                $variants = [
                    "size" => $variantData['size'],
                    "price" => $variantData['price'],
                    "sale_price" => $variantData['sale_price'],
                    "quatity" => $variantData['quatity']
                ];
                $products->variants()->create($variants);
            }
            return Redirect::route('product.index')->with('success', 'successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return Redirect::back()->with('error', 'Failed');
        }
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
        $cate = category::all();
        $product = Product::find($id);
        return view('admin.product.editProduct', compact('cate', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        // dd($request->all());
        if ($request->hasFile('photo')) {
            if ($product->image) {
                # code...
                Storage::delete('public/images/' . $product->image);
            }
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images', $fileName);
            $product->image = $fileName;
            $product->save();
        }
        return Redirect::route('product.index')->with('success', 'successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);

            // Xóa các biến thể liên quan
            foreach ($product->variants as $variant) {
                $variant->delete();
            }
            // xóa ảnh trong thư mục
            if ($product->image) {
                Storage::delete('public/images/' . $product->image);
            }
            // Xóa sản phẩm
            $product->delete();

            return Redirect::route('product.index')->with('success', 'Delete successfully');
        } catch (\Throwable $th) {
            return Redirect::back()->with('error', 'Delete failed');
        }
    }
    public function createVariant($ProductID)
    {
        $product = Product::findOrFail($ProductID);
        // dd($product);
        return view('admin.variants.add', compact('product'));
    }
    public function storeVariant(Request $request, $ProductID)
    {
        try {
            $product = Product::find($ProductID);
            foreach ($request->variants as $variantData) {
                $variants = [
                    "size" => $variantData['size'],
                    "price" => $variantData['price'],
                    "sale_price" => $variantData['sale_price'],
                    "quatity" => $variantData['quatity']
                ];
                $product->variants()->create($variants);
            }
            // dd($request->all());
            return redirect()->route('variant.show', $ProductID)->with('success', 'Variant added successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back();
        }
        
    }
}
