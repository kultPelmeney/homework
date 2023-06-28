@extends('front.layout.master')
@section('title','Profile')

@section('body')

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right pt-5" style="border-right: 1px solid #bebebe">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                        <div class="change-img-box">
                            <img style="width: 150px; height: 150px;object-fit: cover"
                                 class="thumbnail rounded-circle" data-toggle="tooltip"
                                 title="Click to change the image" data-placement="bottom"
                                 src="./front/img/user/{{ $user->avatar ?? 'default-avatar.jpg'}}" alt="Avatar">
                            <div class="form-text" id="icon-edit-img" style="cursor: pointer">
                                <i class="fa-solid fa-pencil"></i>
                            </div>
                        </div>
                        <div class="d-flex flex-column pt-4">
                            <span class="font-weight-bold">{{$user->name}}</span>
                            <span class="text-black-50">{{$user->email}}</span>
                        </div>
                        <input id="image" name="image" type="file" onchange="changeImg(this)"
                               class="image form-control-file" style="display: none;" value="">
                        <input type="hidden" name="image_old" value="{{ $user->avatar }}">

                    </div>
                </div>
                <div class="col-md-5 border-right" style="border-right: 1px solid #bebebe">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="Enter full name" value="{{$user->name ?? ''}}" name="name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 py-2"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="Enter phone number" value="{{$user->phone ?? ''}}" name="phone"></div>
                                <div class="col-md-12 py-2"><label class="labels">Address</label><input type="text" class="form-control" placeholder="Enter address" value="{{$user->street_address ?? ''}}" name="street_address"></div>
                                <div class="col-md-12 py-2"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Enter postcode" value="{{$user->postcode_zip ?? ''}}" name="postcode_zip"></div>
                                <div class="col-md-12 py-2"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Enter email" value="{{$user->email ?? ''}}" name="email"></div>
                                <div class="col-md-12 py-2"><label class="labels">Company</label><input type="text" class="form-control" placeholder="Enter company name" value="{{$user->company_name ?? ''}}" name="company_name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="Enter country" value="{{$user->country ?? ''}}" name="country"></div>
                                <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" value="{{$user->town_city ?? ''}}" placeholder="Enter city" name="town_city"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
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
    </form>

@endsection
