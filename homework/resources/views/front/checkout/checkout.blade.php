@extends('front.layout.master')

@section('title','Checkout')

@section('body')

    <!-- Breadcrumb-->
    <div class="bg-light py-2">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 bg-light">
            <li class="breadcrumb-item"><a class="reset-anchor" href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Billing information</li>
          </ol>
        </nav>
      </div>
    </div>
    <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <!-- Navigation-->
            <header class="text-center mb-5">
              <h2>Billing information</h2>
            </header>
            <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
              <li class="nav-item"><a class="nav-link disabled" href="">1. Shopping cart</a></li>
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="">2. Billing Information</a></li>
              <li class="nav-item"><a class="nav-link disabled" href="">3. Completed</a></li>
            </ul>
              <form action="" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="bg-light d-flex align-items-center justify-content-center justify-content-md-between px-3 py-2 mb-3">
                              <h6 class="mb-0 py-1">Buyer info</h6>
                          </div>
                          <div class="row">
                              <div class="form-group col-lg-6 mb-3">
                                  <label class="form-label small text-uppercase">First name</label>
                                  <input class="form-control" type="text" name="first_name" placeholder="Enter your first name" value="{{\Illuminate\Support\Facades\Auth::user()->name ?? ''}}" >
                              </div>
                              <div class="form-group col-lg-6 mb-3">
                                  <label class="form-label small text-uppercase">Last name</label>
                                  <input class="form-control" type="text" name="last_name" placeholder="Enter your last name" >
                              </div>
                              <div class="form-group col-12 mb-3">
                                  <label class="form-label small text-uppercase">Email address</label>
                                  <input class="form-control" type="email" name="email" placeholder="Enter your email address" value="{{\Illuminate\Support\Facades\Auth::user()->email ?? ''}}">
                              </div>
                              <div class="form-group col-12 mb-3">
                                  <label class="form-label small text-uppercase">Phone</label>
                                  <input class="form-control" type="text" name="phone" placeholder="Enter your phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone ?? ''}}">
                              </div>
                              <div class="form-group col-12 mb-3">
                                  <label class="form-label small text-uppercase">Address</label>
                                  <input class="form-control" type="text" name="street_address" placeholder="Enter your main address" value="{{\Illuminate\Support\Facades\Auth::user()->street_address ?? ''}}">
                              </div>
                              <div class="form-group col-12 mb-3">
                                  <label class="form-label small text-uppercase">City</label>
                                  <input class="form-control" type="text" name="town_city" placeholder="Enter your city" value="{{\Illuminate\Support\Facades\Auth::user()->town_city ?? ''}}">
                              </div>
                              <div class="form-group col-lg-6 mb-3">
                                  <label class="form-label small text-uppercase">Country</label>
                                  <input type="text" class="form-control" name="country" placeholder="Enter country" value="{{\Illuminate\Support\Facades\Auth::user()->country ?? ''}}">
                              </div>
                              <div class="form-group col-lg-6 mb-3">
                                  <label class="form-label small text-uppercase">Zipcode</label>
                                  <input class="form-control" type="text" name="postcode_zip" placeholder="Enter city postal colde" value="{{\Illuminate\Support\Facades\Auth::user()->postcode_zip ?? ''}}">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="bg-light px-3 py-2 mb-3">
                              <h6 class="mb-0 py-1">Payment method</h6>
                          </div>
                          <ul class="nav nav-pills flex-column flex-sm-row mb-4 text-center bg-light" id="pills-tab" role="tablist">
                              <li class="nav-item flex-fill" role="presentation" id="labelVisa">
                                  <a class="nav-link p-2 rounded-0 active" id="pills-creditCard-tab" data-bs-toggle="pill" href="#pills-creditCard" role="tab" aria-controls="pills-creditCard" aria-selected="true">
                                      <i class="fab fa-cc-visa me-2"></i>
                                      <span class="small text-uppercase">Credit card</span>
                                  </a>
                              </li>
                              <li class="nav-item flex-fill" role="presentation" id="labelCod">
                                  <a  class="nav-link p-2 rounded-0" id="pills-bankTransfer-tab" data-bs-toggle="pill" href="#pills-bankTransfer" role="tab" aria-controls="pills-bankTransfer" aria-selected="false">
                                      <i class="fa-solid fa-money-check-dollar me-2"></i>
                                      <span class="small text-uppercase">COD</span>
                                  </a>
                              </li>
                              <input id="typeVisa" type="radio" name="payment_type" value="visa" checked style="display: none">
                              <input id="typeCod" type="radio" name="payment_type" value="cod" style="display: none">
                          </ul>
                          <div class="tab-content mb-5" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-creditCard" role="tabpanel" aria-labelledby="pills-creditCard-tab">
                                  <div class="row">
                                      <div class="form-group col-12 mb-3">
                                          <label class="form-label small text-uppercase">Name on card</label>
                                          <input class="form-control" type="text" placeholder="e.g. Jason Doe">
                                      </div>
                                      <div class="form-group col-lg-8 mb-3">
                                          <label class="form-label small text-uppercase">Card number</label>
                                          <input class="form-control" type="text" placeholder="0000-0000-0000-0000">
                                      </div>
                                      <div class="form-group col-lg-4 mb-3">
                                          <label class="form-label small text-uppercase">CVV</label>
                                          <input class="form-control" type="text" placeholder="000">
                                      </div>
                                      <div class="form-group col-lg-6 mb-3">
                                          <label class="form-label small text-uppercase">Month</label>
                                          <input type="text" class="form-control" placeholder="Enter moth">
                                      </div>
                                      <div class="form-group col-lg-6">
                                          <label class="form-label small text-uppercase">Year</label>
                                          <input type="text" class="form-control" placeholder="Enter year">
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="pills-bankTransfer" role="tabpanel" aria-labelledby="pills-bankTransfer-tab" >
                                  <p class="pt-5">Payment on receipt of goods (there may be a collection fee according to the terms of the shipping unit).</p>
                              </div>
                          </div>
                          <!-- Footer-->
                          <div class="bg-light p-4">
                              <div class="row align-items-center">
                                  <div class="col-md-9">
                                      <ul class="list-inline mb-0">
                                          <li class="list-inline-item py-1"><a class="btn btn-outline-primary" href="./cart"> <i class="fas fa-shopping-cart me-2"></i>Back to cart</a></li>
                                          <li class="list-inline-item py-1"><button class="btn btn-primary" type="submit"> <i class="far fa-credit-card me-2"></i>Place order</button></li>
                                      </ul>
                                  </div>
                                  <div class="col-md-3 text-start text-md-end">
                                      <p class="text-muted mb-1">Cart total</p>
                                      <h6 class="h4 mb-0">${{number_format($total,2)}}</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </section>

@endsection
