@extends('admin.layout.master')

@section('title', 'Product')

@section('body')
    <main id="main" class="main">

        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Product</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./admin/home">Home</a></li>
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/product/{{ $product->id }}/edit" class="btn-yellow btn-shadow btn-hover-shine mr-3 btn btn-primary">
                      <span class=" btn-icon-wrapper pr-2 opacity-7">
                           <i class="bi bi-pencil-square"></i>
                      </span>
                    Edit
                </a>
                <form class="d-inline" action="./admin/product/{{ $product->id }}/delete" method="post">
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

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Product Detail
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Images</div>
                                        <div class="col-lg-9 col-md-8">
                                            <ul class="text-nowrap overflow-auto" id="images" style="padding-left: 0;">

                                                @foreach($product->productImages as $productImage)
                                                    <li class="d-inline-block mr-1" style="position: relative;">
                                                        <img style="height: 150px;" src="./front/img/products/{{ $productImage->path }}"
                                                             alt="Image">
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Product Images</div>
                                        <div class="col-lg-9 col-md-8">
                                            <div class="col-md-9 col-xl-8">
                                                <p><a class="btn-blue btn-shadow btn-hover-shine mr-3 btn btn-primary"
                                                      href="./admin/product/{{ $product->id }}/image">Manage images</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Product Details</div>
                                        <div class="col-lg-9 col-md-8">
                                            <p><a class="btn-blue btn-shadow btn-hover-shine mr-3 btn btn-primary"
                                                  href="./admin/product/{{ $product->id }}/detail">Manage details</a></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Category</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->productCategory->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->name }}</div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">End Time</div>
                                        <div class="col-lg-9 col-md-8">{{ date('H:i:s d/m/Y', strtotime($product->end_time)) }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Price</div>
                                        <div class="col-lg-9 col-md-8">${{ $product->price }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Qty</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->qty }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Weight</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->weight }}kg</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Sku</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->sku }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Description</div>
                                        <div class="col-lg-9 col-md-8">{{ $product->description }}</div>
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
