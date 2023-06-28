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
                            <li class="breadcrumb-item active">You can add, edit, see the details of the products below.</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/product/{{ $product->id }}/detail/create" class="btn-blue btn-shadow btn-hover-shine mr-3 btn btn-primary">
                      <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="bi bi-plus-lg"></i>
                      </span>
                    Create
                </a>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="row col-lg-4 col-md-4 mt-lg-3 mt-md-3">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="search" name="search" id="search" placeholder="Search everything" class="form-control">
                                            <span class="input-group-append ">
                                            <button type="submit" class="btn btn-primary b-btn">
                                                <i class="bi bi-search"></i>&nbsp;
                                                Search
                                            </button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="dataTable-container">
                                    <table class="table datatable dataTable-table table-striped" >
                                        <thead>
                                        <tr>
                                            <th scope="col" data-sortable="" style="width: 50%;">
                                                Product Name
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 10%;text-align: center;">Color</th>
                                            <th scope="col" data-sortable="" style="width: 15%;text-align: center;">Size</th>
                                            <th scope="col" data-sortable="" style="width: 10%;text-align: center;">Qty</th>
                                            <th scope="col" data-sortable="" style="width: 20%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                            @foreach($productDetails as $productDetail)
                                                <tr>
                                                    <td style="font-weight: 700">{{ $product->name }}</td>
                                                    <td style="text-align: center">{{ $productDetail->color }}</td>
                                                    <td style="text-align: center">{{ $productDetail->size }}</td>
                                                    <td style="text-align: center">{{ $productDetail->qty }}</td>
                                                    <td style="text-align: center"></a>
                                                        <a href="./admin/product/{{ $product->id }}/detail/{{ $productDetail->id }}/edit" data-toggle="tooltip" title="Edit"
                                                           data-placement="bottom"
                                                           class="btn btn-outline-warning border-0 btn-sm">
                                                                            <span class="btn-icon-wrapper opacity-8">
                                                                                <i class="bi bi-pencil-square"></i>
                                                                            </span>
                                                        </a>
                                                        <form class="d-inline" action="./admin/product/{{ $product->id }}/detail/{{ $productDetail->id  }}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                                    type="submit" data-toggle="tooltip" title="Delete"
                                                                    data-placement="bottom"
                                                                    onclick="return confirm('Do you really want to delete this item?')">
                                                                                <span class="btn-icon-wrapper opacity-8">
                                                                                    <i class="bi bi-trash3"></i>
                                                                                </span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
