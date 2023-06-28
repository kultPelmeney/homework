@extends('front.layout.master')
@section('title','Complete')

@section('body')

    <!-- Breadcrumb-->
    <div class="bg-light py-2">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 bg-light">
            <li class="breadcrumb-item"><a class="reset-anchor" href="https://demo.bootstrapious.com/shopio/index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Completed</li>
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
              <h2>Completed</h2>
            </header>
            <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
              <li class="nav-item"><a class="nav-link disabled" href="https://demo.bootstrapious.com/shopio/completed.html#">1. Shopping cart</a></li>
              <li class="nav-item"><a class="nav-link disabled" href="https://demo.bootstrapious.com/shopio/completed.html#">2. Billing Information</a></li>
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://demo.bootstrapious.com/shopio/completed.html#">3. Completed</a></li>
            </ul>
            <div class="text-center">
              <svg class="svg-icon text-primary svg-icon-xl svg-icon-light mb-4">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <h1>Thank you</h1>
              <div class="row">
                <div class="col-lg-7 mx-auto">
                  <p class="text-muted mb-4">{{$noti}}</p>
                </div>
              </div><a class="btn btn-primary" href="./shop"> <i class="fas fa-shopping-bag me-2"></i>Continue shopping</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
