<?php

namespace App\Http\Controllers;

use App\Models\HistoryAuction;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    function index(Request $request) {
        $productAll = Product::all();
        $sortBy = $request->sort_by ?? 'all';
        $search = $request->search ?? '';
        $categories = ProductCategory::all();



        $products = Product::where('name','like','%' . $search . '%')->inRandomOrder();

        switch($sortBy) {
            case 'high_to_low' :
                $products = $products->orderByDesc('price');
                break;
            case 'low_to_high' :
                $products = $products->orderBy('price');
                break;
        }

        // Category
        $category = $request->cate ?? [];
        $category_ids = array_keys($category);
        $products = $category_ids != null ? $products->whereIn('product_category_id',$category_ids) : $products;

        // Price
        $priceMin = $request->minPrice;
        $priceMax = $request->maxPrice;
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;

        $products = $products->paginate(12);

        $products->appends(['sort_by' => $sortBy, 'minPrice' => $priceMin,'priceMax'=> $priceMax]);

        return view('front.shop.shop',compact('products','productAll','categories'));
    }


    function show($id) {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('product_category_id',$product->product_category_id)->limit(5)->get();


        return view('front.shop.show',compact('product','relatedProducts'));
    }

    function addAuction(Request $request,$id) {
        $price = $request->priceBid;

        if (Auth::check()) {
            $data = [
                'product_id'=> $id,
                'user_id' => Auth::user()->id,
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'price' => $price,
            ];

            HistoryAuction::create($data);
            return redirect('shop/product/'.$id)->with('Notify','You have bid on this product !');
        }else {
            return redirect('shop/product/'.$id)->with('Notify2','Please login to bid!');
        }
    }
}
