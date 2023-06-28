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
                                        Create Product
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">


                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="post" action="admin/product" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="product_category_id" class="col-md-4 col-lg-3 col-form-label">Category</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select required name="product_category_id" id="product_category_id" class="form-control">
                                                    <option value="">-- Category --</option>

                                                    @foreach($productCategories as $productCategory)
                                                        <option value={{ $productCategory->id }}>
                                                            {{ $productCategory->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name"
                                                   class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                       value="" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="end_time"
                                                   class="col-md-4 col-lg-3 col-form-label">End Time</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="end_time" type="datetime-local" class="form-control" id="end_time"
                                                       value="" placeholder="End Time">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="price"
                                                   class="col-md-4 col-lg-3 col-form-label">Price</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="price" type="text" class="form-control" id="price"
                                                       value="" placeholder="Price">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="weight"
                                                   class="col-md-4 col-lg-3 col-form-label">Weight</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="weight" type="text" class="form-control" id="weight"
                                                       value="" placeholder="Weight">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="sku" class="col-md-4 col-lg-3 col-form-label">Sku</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="sku" type="text" class="form-control" id="sku"
                                                       value="" placeholder="Sku">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="description" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control" name="description" id="description" placeholder="Description">description</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4 col-lg-3 text-center">

                                            </div>

                                            <div class="col-md-8 col-lg-9 text-center">
                                                <a href="./admin/product" class="btn btn-red btn-primary">Cancel</a>
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
