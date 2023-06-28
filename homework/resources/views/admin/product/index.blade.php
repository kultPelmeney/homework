@extends('admin.layout.master')

@section('title', 'Product')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Products</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./admin/home">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/product/create" class="btn-blue btn-shadow btn-hover-shine mr-3 btn btn-primary">
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
                                    <form  action="./admin/product">

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
                                            <th scope="col" data-sortable="" style="width: 3.62902%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 46%;">
                                                Name / Category
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 9.7949%;text-align: center;">Starting Price</th>
                                            <th scope="col" data-sortable="" style="width: 8.0558%;text-align: center;">Number Of Auctioneers</th>
                                            <th scope="col" data-sortable="" style="width: 15.203%;text-align: center;">End Time</th>
                                            <th scope="col" data-sortable="" style="width: 19.2995%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                            @foreach($products as $product)
                                                <tr>
                                                    <th scope="row" style="text-align: center">{{ $product->id }}</th>
                                                    <td>
                                                        <div>
                                                            <div style="display: flex; align-items: center;">
                                                                <img style="height: 60px; max-width: 60px" data-toggle="tooltip" title="" data-placement="bottom" src="front/img/products/{{ $product->productImages[0]->path  ?? '' }}" alt="" data-original-title="Image">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ $product->name }}</div>
                                                                    <div class="widget-subheading opacity-7">
                                                                        {{ $product->productCategory->name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center">${{number_format($product->price,2)}}</td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-hover-shine btn-outline-danger border-0 btn-sm" href="admin/product/{{ $product->id }}/auctioneers">
                                                            {{ count($product->historyAuctions) }}
                                                            <i class="bi bi-people"></i>
                                                        </a>
                                                    </td>
                                                    <td style="text-align: center">
                                                        @if(strtotime($product->end_time) < strtotime(\Illuminate\Support\Carbon::now()) || count($product->historyAuctions->where('status', 1)) == 1)
                                                            <div class="badge bg-danger mt-2">The End</div>
                                                        @else
                                                            <div class="badge bg-success mt-2">
                                                                {{ date('H:i:s d/m/Y', strtotime($product->end_time)) }}
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td style="text-align: center">
                                                        <a href="./admin/product/{{ $product->id }}"
                                                           class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                            Details
                                                        </a>
                                                        <a href="./admin/product/{{ $product->id }}/edit" data-toggle="tooltip" title="Edit"
                                                           data-placement="bottom"
                                                           class="btn btn-outline-warning border-0 btn-sm">
                                                                            <span class="btn-icon-wrapper opacity-8">
                                                                                <i class="bi bi-pencil-square"></i>
                                                                            </span>
                                                        </a>
                                                        <form class="d-inline" action="./admin/product/{{ $product->id }}" method="post">
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


                                <div class="d-block card-footer">
                                    <div class="row col-lg-12 col-md-12">
                                        {{$products->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
