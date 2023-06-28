<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categories = ProductCategory::all();
        $featuredProduct = Product::where('featured',true)->inRandomOrder()->limit(12)->get();
        $products  = Product::where('featured',true)->inRandomOrder()->limit(20)->get();
        $blogs = Blog::limit(3)->get();
        return view('front.index',compact('categories','featuredProduct','products','blogs'));
    }

    public function about_us() {
        $blogs = Blog::paginate(3);
        return view('front.about-us', compact( 'blogs'));
    }

    public function help_center() {
        return view('front.help_center');
    }
}
