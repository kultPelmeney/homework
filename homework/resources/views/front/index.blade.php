@extends('front.layout.master')
@section('title','Home')

@section('body')

    <!-- Hero slider-->
    <section>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="hero-slider">
        <div class="swiper-wrapper" id="swiper-wrapper-6a5ead115d6151010b" aria-live="off" style="transition-duration: 0ms; ">
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-prev" style="background: url(front/img/index-slide-1.png);background-size: cover; width: 1476px;" role="group" aria-label="1 / 3">
            <div class="container">
              <div class="row text-lg-center">
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Welcome</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Welcome to Auction Online</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">Welcome to the world's leading technology auction floor.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="./shop" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-active" style="background: url(front/img/bg-art-slide-index.jpg);background-size: cover; width: 1476px;" role="group" aria-label="2 / 3">
            <div class="container">
              <div class="row text-lg-center" >
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Aesthetic art</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Art Property Auction</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">Being a pioneer in auctioning products of cultural and artistic value with clear transparency.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="./shop" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-next" style="background: url(front/img/index-slide-2.png);background-size: cover; width: 1476px;" role="group" aria-label="3 / 3">
            <div class="container">
              <div class="row text-lg-center">
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Liquidation</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Auction of liquidated property</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">With many years of experience in auctioning large and small-scale properties, prestige comes first.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="./shop" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination px-4 py-2 text-end h5 font-weight-light swiper-pagination-custom"> <span class="h2">02</span>  <span class="swiper-divider">/</span>  <span class="text-muted">03</span></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </section>
    <!--Category-->
    <section class="latest spad">
      <div class="container py-5 cateIndex">
        <header class="mb-3 text-center">
          <h2 class="mb-0">Category</h2>
          <p class="text-muted">Featured Category</p>
        </header>
        <div class="row">

          @foreach($categories as $category)
                <div class="col-lg-2 cateInde-item">
                    <a href="./shop?cate[{{$category->id}}]">
                        <img src="./front/img/products/{{$category->products[0]->productImages[0]->path}}" alt="cate" >
                        <span>{{$category->name}}</span>
                    </a>
                </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- Featured products-->
    <section class="py-5">
        <div class="container">
            <header class="mb-3 text-center">
                <h2 class="mb-0">Featured products</h2>
                <p class="text-muted">Browse the Newest Products</p>
            </header>
            <div class="swiper-container pt-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="featuredProducts">
                <div class="swiper-wrapper" id="swiper-wrapper-6ae7d2b19321ec75" aria-live="polite" style=" transition-duration: 0ms;">

{{--                    @foreach($products as $product)--}}

{{--                        <div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 237.6px; margin-right: 25px;" role="group" >--}}
{{--                            <div class="product mb-4">--}}
{{--                                <span class="badge rounded-0 bg-"></span>--}}
{{--                                <a href="">--}}
{{--                                    <img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product">--}}
{{--                                </a>--}}
{{--                                <div class="cta shadow d-inline-block">--}}
{{--                                    <a class="product-btn" href="">--}}
{{--                                        <i class="fas fa-heart"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="product-btn" href="">--}}
{{--                                        <i class="fas fa-dolly-flatbed"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text-center"><a class="reset-anchor" href="">{{$product->name}}</a></h6>--}}
{{--                            <p class="text-center text-muted font-weight-bold">${{number_format($product->price,2)}}</p>--}}
{{--                        </div>--}}

{{--                    @endforeach--}}

                    <!-- Product-->

                    @foreach($featuredProduct as $product)
                        @if(getdate(strtotime($product->end_time))[0] > time())
                            <div class="swiper-slide pb-5" data-swiper-slide-index="0" style="width: 237.6px; margin-right: 25px;" role="group">
                                <div class="product mb-4">
                                    <a href="./shop/product/{{$product->id}}">
                                        <img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product">
                                    </a>
                                    <div class="cta shadow d-inline-block"><a class="product-btn" href="./shop/product/{{$product->id}}"><i class="fas fa-heart"></i></a></div>
                                </div>
                                <div class="pro-text">
                                    <h6 class="pro-title"><a class="reset-anchor" href="">{{$product->name}}</a></h6>
                                    <p class="pro-price">Highest price <span>${{number_format($product->historyAuctions[count($product->historyAuctions) - 1]->price ?? $product->price,2)}}</span></p>
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

                </div>

                <div class="swiper-button-prev px-3 py-2" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6ae7d2b19321ec75">
                    <svg class="svg-icon svg-icon-md">
                        <use xlink:href="#arrow-left-1"> </use>
                    </svg>Prev
                </div>
                <div class="swiper-button-next px-3 py-2" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6ae7d2b19321ec75">
                    Next
                    <svg class="svg-icon svg-icon-md">
                        <use xlink:href="#arrow-right-1"> </use>
                    </svg>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>
    </section>
    <!-- Divider section-->
    <section class="py-5 bg-center bg-cover" style="background: url(front/img/bg-index-3.jpg)">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 ms-auto">
            <h2 class="hero-heading">Post your product for auction</h2>
            <p class="text-muted">Do you have real art products, rare collectibles or even old products for sale immediately.</p><a class="btn btn-primary" href="">Sell now</a>
          </div>
        </div>
      </div>
    </section>
    <!--Product featured-->
    <section class="py-5">
      <div class="container">
        <header class="mb-3 text-center">
          <h2 class="mb-0">Product</h2>
          <p class="text-muted">Recommended products for today</p>
        </header>
        <div class="row py-3">

            @foreach($products as $product)

                    @if(getdate(strtotime($product->end_time))[0] > time())
                        <div class="col-lg-2dot4">
                            <div class="product mb-4">
                                <a href="./shop/product/{{$product->id}}">
                                    <img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product">
                                </a>
                                <div class="cta shadow d-inline-block"><a class="product-btn" href="./shop/product/{{$product->id}}"><i class="fas fa-heart"></i></a></div>
                            </div>
                            <div class="pro-text">
                                <h6 class="pro-title"><a class="reset-anchor" href="">{{$product->name}}</a></h6>
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



        </div>
        <div class="btn-pr-index">
          <a href="./shop" class="btn btn-primary">View more</a>
        </div>
      </div>
    </section>
    <!-- Blog-->
    <section class="latest spad py-5">
      <div class="container">
        <header class="mb-3 text-center">
          <h2 class="mb-0">From The Blog</h2>
          <p class="text-muted">Browse the Newest Blogs</p>
        </header>
        <div class="row">

            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <img src="./front/img/blog/{{$blog->image}}" alt="blog">
                        <div class="blog__item__text">
                            <span><i class="fa-regular fa-calendar"></i> {{  date('M d, Y',strtotime($blog->created_at)) }}</span>
                            <h5>{{$blog->title}}</h5>
                            <a href=""><span></span>Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
      </div>
    </section>
    <!-- Newsletter section-->
    <section class="pb-5">
      <div class="container p-5 bg-light">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h3>Get the latest news</h3>
            <p class="text-small text-muted mb-0">Announcements about auction products or events</p>
          </div>
          <div class="col-lg-6">
            <form action="">
              <div class="input-group">
                <input class="form-control rounded-0" type="text" placeholder="Enter your email address" aria-label="Enter your email address" aria-describedby="button-addon2">
                <button class="btn btn-primary" id="button-addon2" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Features-->
    <section>
      <div class="container pb-5">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-light fa-truck-clock"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">Free shipping </h6>
                <p class="small text-muted mb-0">For the first 3 orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-shield-check"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">30 days return </h6>
                <p class="small text-muted mb-0">If goods have problems</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-credit-card"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">Secure payment </h6>
                <p class="small text-muted mb-0">100% secure payment</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-phone"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">24/7 support </h6>
                <p class="small text-muted mb-0">Dedicated support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
