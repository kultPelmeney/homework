@extends('front.layout.master')

@section('title','Cart')

@section('body')

  <!-- Breadcrumb-->
  <div class="bg-light py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 bg-light">
          <li class="breadcrumb-item"><a class="reset-anchor" href="./">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">

      @if(\Illuminate\Support\Facades\Auth::check())
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Navigation-->
                    <header class="text-center mb-5">
                        <h2>The product you are bidding on</h2>
                    </header>
                    <!-- Shopping cart-->
                    @if(count($productAuction))
                        <div class="table-responsive mb-4">
                            <table class="table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Product</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Your bid</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Current price</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">End Time</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Number of Auctions</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Status</strong></th>
                                </tr>
                                </thead>
                                <tbody>

                                @for($i = 0;$i<count($productAuction);$i++)
                                    @if(getdate(strtotime($productAuction[$i]->end_time))[0] > time())
                                        <tr>
                                            <th class="p-3 pl-0 border-0" scope="row">
                                                <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href="./shop/product/{{$productAuction[$i]->id}}"><img src="./front/img/products/{{$images[$i]}}" alt="..." width="70"></a>
                                                    <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="./shop/product/{{$productAuction[$i]->id}}">{{$productAuction[$i]->name}}</a></strong></div>
                                                </div>
                                            </th>
                                            <td class="p-3 align-middle border-0">
                                                <p class="mb-0 small">${{number_format($yourBids[$i],2)}}</p>
                                            </td>
                                            <td class="p-3 align-middle border-0">
                                                <p class="mb-0 small">${{number_format($prices[$i],2)}}</p>
                                            </td>
                                            <td class="p-3 align-middle border-0">
                                                <div class="CountDown-box">
                                                    <input class="timeData" type="hidden" value="{{$productAuction[$i]->end_time}}">
                                                    <div class="CountDown"></div>
                                                </div>
                                            </td>
                                            <td class="p-3 align-middle border-0">
                                                <span class="pro-user"><span><i class="fa-solid fa-user"></i></span> {{$auctionNumber[$i]}} </span>
                                            </td>
                                            <td class="p-3 align-middle border-0">
                                                @if($status[$i]->status == 2)
                                                    <span class="font-weight-bold pending t-green">Pending</span>
                                                @else
                                                    <span class="font-weight-bold pending t-black">Sold</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endfor

                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-10 mx-auto pb-5">
                                <h3 class="text-center text-muted">You have not bid on any products yet!</h3>
                                <div class="d-flex justify-content-center pt-4">
                                    <a class="btn btn-primary" href="./shop">
                                        <i class="fa-solid fa-gavel me-2"></i>
                                        Continue auction
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Navigation-->
                    <header class="text-center mb-5">
                        <h2>Successful auction products</h2>
                    </header>

                    <!-- Shopping cart-->
                    @if(count($carts) == 0)
                        <div>
                            <h3 class="text-center text-muted">You have not had any successful auction yet!</h3>
                            <div class="d-flex justify-content-center pt-4">
                                <a class="btn btn-primary" href="./shop">
                                    <i class="fas fa-shopping-bag me-2"></i>
                                    Continue auction
                                </a>
                            </div>
                        </div>
                    @else
                        <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">1. Cart</a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="">2. Billing Information</a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="">3. Completed</a></li>
                        </ul>
                        <div class="table-responsive mb-4">
                            <table class="table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Product</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Qty</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Price</strong></th>
                                    <th class="p-3 border-0" scope="col"><strong class="text-uppercase"></strong></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($carts as $cart)
                                    <tr>
                                        <th class="p-3 pl-0 border-0" scope="row">
                                            <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href=""><img src="./front/img/products/{{$cart->image}}" alt="..." width="70"></a>
                                                <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="shop/product/{{ $cart->product_id }}">{{$cart->name}}</a></strong></div>
                                            </div>
                                        </th>
{{--                                        <td class="p-3 align-middle border-0">--}}
{{--                                            <p class="mb-0 small">${{$cart->price}}</p>--}}
{{--                                        </td>--}}
                                        <td class="p-3 align-middle border-0 text-center">
                                            <p class="mb-0 small">{{$cart->qty}}</p>
                                        </td>
                                        <td class="p-3 align-middle border-0 text-center">
                                            <p class="mb-0 small cart-total">${{$cart->price}}</p>
                                        </td>
                                        <td class="p-3 align-middle border-0 text-center"><a class="reset-anchor" href="./cart/{{$cart->id}}"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <!-- Cart footer-->
                            <div class="bg-light p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item py-1"><a class="btn btn-outline-primary" href="./shop"> <i class="fas fa-shopping-bag me-2"></i>Continue auction</a></li>
                                            <li class="list-inline-item py-1"><a class="btn btn-primary" href="./checkout"> <i class="far fa-credit-card me-2"></i>Process checkout</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 text-start text-md-end">
                                        <p class="text-muted mb-1">Cart total</p>
                                       <h6 class="h4 mb-0" id="cartPrice">${{$total}}</h6> {{-- da format--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @else
          <div class="row">
              <div class="col-lg-10 mx-auto">
                  <h3 class="text-center text-muted">Please login to view your shopping cart!</h3>
                  <div class="d-flex justify-content-center pt-4">
                      <a class="btn btn-primary" href="./account/login">
                          <i class="fa-solid fa-user me-2"></i>
                          Login
                      </a>
                  </div>
              </div>
          </div>
        @endif

    </div>
  </section>

@endsection
