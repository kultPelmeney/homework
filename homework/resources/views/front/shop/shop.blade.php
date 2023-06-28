@extends('front.layout.master')

@section('title','Shop')
@section('body')

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Hero section-->
    <section class="sub-hero bg-center bg-cover d-flex align-items-center" style="background: url(./front/img/bg-banner.f561f8e8.jpg)">
        <div class="container">
            <h1 class="mb-1 hero-heading">Shop</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-0">
                    <li class="breadcrumb-item"><a class="reset-anchor" href="">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Shop sidebar-->
                <div class="col-xl-2 col-lg-3 order-2 order-lg-1">
                    <h5 class="mb-4">Shop by Category</h5>
                    <ul class="list-unstyled text-muted mb-5">
                        <form action="">
                            @foreach($categories as $category)
                                <li class="mb-2 d-flex align-items-center justify-content-between">
                                    <label for="cate-{{$category->id}}" class="reset-anchor cate-shop">{{$category->name}}</label>
                                    <span class="badge bg-light text-dark">{{count($category->products)}}</span>
                                    <input type="checkbox" name="cate[{{$category->id}}]" id="cate-{{$category->id}}" style="display: none" onchange="this.form.submit();">
                                </li>
                            @endforeach
                        </form>
                    </ul>
                    <h5 class="mb-4">Price range</h5>
                    <div class="price-range mb-3">
                        <div class="row pt-2">
                            <form action="" class="row">
                                <div class="col-6">
                                    <strong class="small font-weight-bold">From</strong>
                                    <input class="form-control" type="text" placeholder="$0.00" name="minPrice" value="{{request('minPrice') ?? ''}}">
                                </div>
                                <div class="col-6 text-end">
                                    <strong class="small font-weight-bold">To</strong>
                                    <input class="form-control" type="text" placeholder="$0.00" name="maxPrice"  value="{{request('maxPrice') ?? ''}}">
                                </div>
                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn-search btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h5 class="mb-3">Show by brand</h5>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="All" type="checkbox" checked>
                        <label class="form-check-label" for="All">All</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck1" type="checkbox">
                        <label class="form-check-label" for="exampleCheck1">Zara</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck2" type="checkbox">
                        <label class="form-check-label" for="exampleCheck2">Cucci</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck3" type="checkbox">
                        <label class="form-check-label" for="exampleCheck3">Rayban</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck4" type="checkbox">
                        <label class="form-check-label" for="exampleCheck4">Defactu</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck5" type="checkbox">
                        <label class="form-check-label" for="exampleCheck5">River Nine</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck6" type="checkbox">
                        <label class="form-check-label" for="exampleCheck6">Puma</label>
                    </div>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" id="exampleCheck7" type="checkbox">
                        <label class="form-check-label" for="exampleCheck7">Nike</label>
                    </div>
                    <div class="mb-5 form-check">
                        <input class="form-check-input" id="exampleCheck8" type="checkbox">
                        <label class="form-check-label" for="exampleCheck8">Ravin</label>
                    </div>
                    <h5 class="mb-3">Shop by color</h5>
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" id="seaColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="seaColor"><i class="fas fa-circle text-primary me-2 text-xs"></i><span>Sea</span></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="yellowColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="yellowColor"><i class="fas fa-circle text-warning me-2 text-xs"></i><span>Yellow</span></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="greenColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="greenColor"><i class="fas fa-circle text-success me-2 text-xs"></i><span>Green</span></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="cyanColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="cyanColor"><i class="fas fa-circle text-info me-2 text-xs"></i><span>Cyan</span></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="redColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="redColor"><i class="fas fa-circle text-danger me-2 text-xs"></i><span>Red</span></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="blackColor" type="checkbox">
                            <label class="form-check-label d-flex align-items-center" for="blackColor"><i class="fas fa-circle text-dark me-2 text-xs"></i><span>Black</span></label>
                        </div>
                    </form>
                </div>
                <!-- Shop listing-->
                <div class="col-xl-10 col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                    <!-- Listing filter-->
                    <div class="row mb-4 pb-3 align-items-center">
                        <div class="col-md-6 text-center text-md-start"></div>
                        <div class="col-md-6 text-lg-end">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="https://demo.bootstrapious.com/shopio/shop.html#"><i class="fas fa-th-list"></i></a></li>
                                    <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="https://demo.bootstrapious.com/shopio/shop.html#"><i class="fas fa-th"></i></a></li>
                                    <li class="list-inline-item"><a class="btn btn-outline-dark px-2 btn-sm border-light" href="https://demo.bootstrapious.com/shopio/shop.html#"><i class="fas fa-th-large"></i></a></li>
                                </ul>
                                <ul class="list-inline mb-0 ms-2">
                                    <li class="list-inline-item text-start">
                                        <div class="choices" >
                                            <form action="">
                                                <select class="form-select" name="sort_by" id="" onchange="this.form.submit();">
                                                    <option {{request('sort_by')=='all' ? 'selected' : ''}} value="all">All</option>
                                                    <option {{request('sort_by')=='high_to_low' ? 'selected' : ''}} value="high_to_low">Price: high to low</option>
                                                    <option {{request('sort_by')=='low_to_high' ? 'selected' : ''}} value="low_to_high">Price: low to high </option>
                                                </select>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        @foreach($products as $product)
                            @if(getdate(strtotime($product->end_time))[0] > time())
                                <div class="col-xl-3 col-lg-4 col-6">
                                    <div class="product mb-4"><a href="./shop/product/{{$product->id}}"><img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product"></a>
                                        <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a></div>
                                    </div>
                                    <div class="pro-text">
                                        <h6 class="pro-title"><a class="reset-anchor" href="./shop/product/{{$product->id}}">{{$product->name}}</a></h6>
                                        <p class="pro-price">Current price <span>${{number_format($product->historyAuctions[count($product->historyAuctions) - 1]->price ?? $product->price,2)}}</span></p>
                                        <div>
                                            <div class="CountDown-box">
                                                <input class="timeData" type="hidden" value="{{$product->end_time}}">
                                                <div class="CountDown"></div>
                                                <span class="pro-user">{{count($product->historyAuctions)}} <span><i class="fa-solid fa-user"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- Pagination-->
                        <div class="pt-5">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
