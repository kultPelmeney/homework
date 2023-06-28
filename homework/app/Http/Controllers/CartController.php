<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\HistoryAuction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $total = 0;
        $carts = [];
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
        }

        if (Auth::check()) {

            foreach ($carts as $cart) {
                $total += $cart->price;
            }
            $productAuction = HistoryAuction::join('products', 'products.id', '=', 'history_auctions.product_id')
//                ->join('users','users.id','=','history_auctions.user_id')
                ->where('history_auctions.user_id', Auth::user()->id)
                ->select('products.*')
                ->distinct()->get();


            $prices = [];
            $images = [];
            $auctionNumber = [];
            $yourBids = [];
            $status = [];
            $carts = Cart::where('user_id', Auth::user()->id)->get();


            for ($i = 0; $i < count($productAuction); $i++) {

                $p = Product::find($productAuction[$i]->id);

//                $prices[] = $p->historyAuctions[count($p->historyAuctions) - 1]->price;
                $prices[] = $p->historyAuctions->max('price');
                $images[] = $p->productImages[0]->path;
                $auctionNumber[] = count($p->historyAuctions);
                $bid = HistoryAuction::where('product_id', $productAuction[$i]->id)->where('user_id', Auth::id())->max('price');
                $yourBids[] = $bid;
                $status[] = HistoryAuction::where('product_id', $productAuction[$i]->id)->where('price', $bid)->first();
            }


            return view('front.cart.cart', compact('carts', 'total', 'productAuction', 'prices', 'images', 'auctionNumber', 'yourBids', 'status'));
        }

        return view('front.cart.cart', compact('carts', 'total'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Cart::destroy($id);

        return back();
    }

}
