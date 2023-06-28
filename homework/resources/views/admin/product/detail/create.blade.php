@extends('admin.layout.master')

@section('title', 'Product')

@section('body')
    <main id="main" class="main">

        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Product Detail</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./admin/home">Home</a></li>
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item">Product Detail</li>
                            <li class="breadcrumb-item active">Create</li>
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
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        Create Product Detail
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">


                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form  method="post" action="admin/product/{{ $product->id }}/detail" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 label">Name Product</div>
                                            <div class="col-md-8 col-lg-9" >{{ $product->name }}</div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="color"
                                                   class="col-md-4 col-lg-3 col-form-label">Color</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="color" type="text" class="form-control" id="color"
                                                       value="" placeholder="color">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="size"
                                                   class="col-md-4 col-lg-3 col-form-label">Size</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="size" type="text" class="form-control" id="size"
                                                       value="" placeholder="size">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="qty"
                                                   class="col-md-4 col-lg-3 col-form-label">Qty</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="qty" type="text" class="form-control" id="qty"
                                                       value="" placeholder="qty">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-md-4 col-lg-3 text-center">

                                            </div>

                                            <div class="col-md-8 col-lg-9 text-center">
                                                <button type="submit" class="btn btn-red btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-blue btn-primary">Save</button>
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

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>

@endsection
