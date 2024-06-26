<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use App\Models\ProductVariants;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterProductsByCategory($category)
    {
        // Tìm danh mục dựa trên tên
        $category = category::where('name', $category)->first();

        if ($category) {
            $products = Product::where('category_id', $category->id)->get();
        } else {
            $products = Product::all();
        }

        $cates = Category::orderBy('id', 'desc')->get();

        foreach ($products as $product) {
            // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
            if ($product->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
                $product->isNew = true;
            } else {
                $product->isNew = false;
            }
        }

        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();

        return view('fe.shop.products', compact('products', 'productsort', 'cates'));
    }
    
    public function filterByCategory(Request $request, $id)
    {
        $selectedCategories = $request->input('categories', []);
        $products = collect();

        if (!empty($selectedCategories) && !in_array('all', $selectedCategories)) {
            foreach ($selectedCategories as $categoryId) {
                $category = Category::findOrFail($categoryId);
                $products = $products->merge($category->products);
            }
        } else {
            $products = Product::orderBy('id', 'desc')->get();
        }
        
        $formattedProducts = $products->map(function ($product) {
            $price = !empty($variants) ? $variants[0]['price'] : null;
            return [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'slug' => $product->slug,
                'category' => $product->category->name ?? '',
                'variants' =>  $product->variants->toArray(),
                'price' => $price,
            ];
        });

        return response()->json(['products' => $products]);
    }

    public function filterProductsByPrice(Request $request)
    {
        $filterPriceGTE = $request->input('filterPriceGTE');
        $filterPriceLTE = $request->input('filterPriceLTE');

        // Lọc sản phẩm theo khoảng giá
        $variants = ProductVariants::whereBetween('sale_price', [$filterPriceGTE, $filterPriceLTE])
            ->with('product') // Load sản phẩm tương ứng với biến thể
            ->get();

        $products = collect();
        foreach ($variants as $variant) {
            $product = $variant->product;

            // Chỉ hiển thị duy nhất một sản phẩm với product_id
            if (!$products->contains('id', $product->id)) {
                $products->push($product);
            }
        }

        // Kiểm tra nếu sản phẩm được tạo trong vòng 2 ngày gần đây
        if ($product->created_at->greaterThanOrEqualTo(Carbon::now()->subDays(2))) {
            $product->isNew = true;
        } else {
            $product->isNew = false;
        }
        $cates = category::orderBy('id', 'desc')->get();
        $productsort = Product::orderBy('created_at', 'desc')->take(3)->get();

        return view('fe.shop/products', compact('products', 'productsort', 'cates'));
    }

}
