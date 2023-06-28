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
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/user/{{ $user->id }}/edit" class="btn-yellow btn-shadow btn-hover-shine mr-3 btn btn-primary">
                      <span class=" btn-icon-wrapper pr-2 opacity-7">
                           <i class="bi bi-pencil-square"></i>
                      </span>
                    Edit
                </a>
                <form class="d-inline" action="./admin/user/{{ $user->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="btn-red btn-shadow btn-hover-shine mr-3 btn btn-primary"
                            type="submit" data-toggle="tooltip" title="Delete"
                            data-placement="bottom"
                            onclick="return confirm('Do you really want to delete this item?')">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="bi bi-trash3"></i>
                            </span>
                        Delete
                    </button>
                </form>
            </div>
        </div>

       <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="./front/img/user/{{ $user->avatar  ?? 'default-avatar.jpg'}}" alt="Profile" class="rounded-circle">
                            <h2>{{ $user->name }}</h2>
                            <h3>{{ \App\Utilities\Constant::$user_level[$user->level] }}</h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Description</h5>
                                    <p class="small fst-italic">{{ $user->description}}</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->company_name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Level</div>
                                        <div class="col-lg-9 col-md-8">{{ \App\Utilities\Constant::$user_level[$user->level] }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->country }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->street_address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Postcode Zip</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->postcode_zip }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Town City</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->town_city }}</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
