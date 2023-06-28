
@extends('front.layout.master')

@section('title','Login')


@section('body')

    <div class="container">
    <div class="row py-5 mt-4 align-items-center d-flex justify-content-between">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="./front/img/login.png" alt="" class="img-fluid mb-3 d-none d-md-block">
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <h1 class="text-center py-3">Login</h1>

            @if(session('notification'))
                <div class="alert alert-warning" role="alert">
                    {{ session('notification') }}
                </div>
            @endif

            <form action="" method="post">
                @csrf
                <div class="row">
                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0 ">
                        <div class="row p-3">
                            <button type="submit" class="btn btn-primary btn-block py-2 buton-cus">
                                <span class="font-weight-bold">Login</span>
                            </button>
                        </div>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <div class="row p-3">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook buton-cus">
                                <i class="fa-brands fa-facebook-f"></i>
                                <span class="font-weight-bold">Continue with Facebook</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter buton-cus" style="margin-top: 20px">
                                <i class="fa-brands fa-twitter"></i>
                                <span class="font-weight-bold">Continue with Twitter</span>
                            </a>
                        </div>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Not Registered? <a href="./account/register" class="text-primary ml-2">Create account</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
