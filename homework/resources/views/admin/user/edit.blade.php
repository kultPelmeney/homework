@extends('admin.layout.master')

@section('title', 'User')

@section('body')
    <main id="main" class="main">

        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>User</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./admin/home">Home</a></li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="post" action="/admin/user/{{ $user->id }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @include('admin.components.notification')


                                        <div class="row mb-3">
                                            <label for="image" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
{{--                                                <img src="./admin/assets/img/avatar/{{ $user->avatar }}" alt="Profile">--}}
                                                <img style="width: 100%; cursor: pointer;"
                                                     class="thumbnail rounded-circle" data-toggle="tooltip"
                                                     title="Click to change the image" data-placement="bottom"
                                                     src="./front/img/user/{{ $user->avatar ?? 'default-avatar.jpg'}}" alt="Avatar">
                                                <input name="image" type="file" onchange="changeImg(this)"
                                                       class="image form-control-file" style="display: none;" value="">
                                                <input type="hidden" name="image_old" value="{{ $user->avatar }}">
                                                <small class="form-text text-muted">
                                                    Click on the image to change (required)
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                       value="{{ $user->name }}">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email"
                                                       value="{{ $user->email }}">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control" id="password"
                                                       value="">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                                                       value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="description" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="description" class="form-control" id="description"
                                                          style="height: 100px">{{ $user->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company_name"
                                                   class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company_name" type="text" class="form-control" id="company_name"
                                                       value="{{ $user->company_name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                            <div class="col-md-8 col-lg-9">

                                                <select required name="level" id="level" class="form-control">
                                                    <option value="">-- Level --</option>

                                                    @foreach(\App\Utilities\Constant::$user_level as $key => $value)
                                                        <option value= {{ $key }} {{ $user->level == $key ? 'selected' : '' }}>
                                                            {{ $value }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="country"
                                                   class="col-md-4 col-lg-3 col-form-label">Country</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="country"
                                                       value="{{ $user->country }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="street_address"
                                                   class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="street_address" type="text" class="form-control" id="street_address"
                                                       value="{{ $user->street_address }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="postcode_zip"
                                                   class="col-md-4 col-lg-3 col-form-label">Postcode Zip</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="postcode_zip" type="text" class="form-control" id="postcode_zip"
                                                       value="{{ $user->postcode_zip }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="town_city"
                                                   class="col-md-4 col-lg-3 col-form-label">Town City</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="town_city" type="text" class="form-control" id="town_city"
                                                       value="{{ $user->town_city }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="phone"
                                                       value="{{ $user->phone }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4 col-lg-3 text-center">

                                            </div>

                                            <div class="col-md-8 col-lg-9 text-center">
                                                <button type="submit" class="btn btn-red btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-blue btn-primary">Save Changes</button>
                                            </div>
                                        </div>


                                    </form><!-- End Profile Edit Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
