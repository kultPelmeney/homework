<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Utilities\Common;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($product_id)
    {
        $product = Product::find($product_id);
        $productImages = $product->productImages;

        return view('admin.product.image.index', compact('product', 'productImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $product_id)
    {
        $data = $request->all();

        // xử lý file
        if ($request->hasFile('image')) {
            $data['path'] = Common::uploadFile($request->file('image'), 'front/img/products');
            unset($data['image']);

            ProductImage::create($data);
        }

        return redirect('admin/product/' . $product_id . '/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($product_id , $product_image_id)
    {
        // xóa file:
        $file_name = ProductImage::find($product_image_id)->path;
        if($file_name != '') {
            unlink('front/img/products/' . $file_name);
        }

        // xóa bản ghi trong DataBase:
        ProductImage::find($product_image_id)->delete();

        return redirect('admin/product/' . $product_id . '/image');
    }
}
