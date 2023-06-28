
@extends('front.layout.master')
@section('title','Profile')

@section('body')

    <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-3 border-right" style="border-right: 1px solid #bebebe">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="./front/img/user/{{$user->avatar ?? 'default-avatar.jpg'}}"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right" style="border-right: 1px solid #bebebe">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="text-right">Profile detail</h3>
              <a href="./profile/edit" class="btn btn-primary profile-button" type="button"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Full Name</div>
              <div class="col-lg-8 col-md-8">{{$user->name}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Phone Number</div>
              <div class="col-lg-8 col-md-8">{{$user->phone}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Address</div>
              <div class="col-lg-8 col-md-8">{{$user->street_address}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Email</div>
              <div class="col-lg-8 col-md-8">{{$user->email}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Company</div>
              <div class="col-lg-8 col-md-8">{{$user->company_name}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Postcode</div>
              <div class="col-lg-8 col-md-8">{{$user->postcode_zip}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">Country</div>
              <div class="col-lg-8 col-md-8">{{$user->country}}</div>
            </div>
            <div class="row d-flex align-items-lg-center py-3">
              <div class="col-lg-4 col-md-4 label font-weight-bold">City</div>
              <div class="col-lg-8 col-md-8">{{$user->town_city}}</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center experience"><span></span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Connect</span></div><br>
            <div class="col-md-12">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between"><span><i class="fa-brands fa-facebook me-2"></i>Facebook</span><span class="text-muted small">@userman12</span></li>
                <li class="list-group-item d-flex justify-content-between"><span><i class="fa-brands fa-instagram me-2"></i>Instagram</span> <span class="text-muted small">@userman12</span></li>
                <li class="list-group-item d-flex justify-content-between"><span><i class="fa-brands fa-twitter me-2"></i>Twitter</span> <span class="text-muted small">@userman12</span></li>
                <li class="list-group-item d-flex justify-content-between"><span><i class="fa-brands fa-pinterest me-2"></i>Pinterest</span> <span class="text-muted small">@userman12</span></li>
              </ul>
            </div>
            <div class="col-md-12"></div>
          </div>
        </div>
      </div>
    </div>

@endsection

