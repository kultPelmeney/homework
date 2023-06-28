@extends('front.client.layout.master')

@section('title', 'Buy Products')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Products</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Below are the products that you have auctioned</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="row col-lg-4 col-md-4 mt-lg-3 mt-md-3">
                                    <form  action="./client/buyer/product">

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
                                            <th scope="col" data-sortable="" style="width: 3%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 41%;">
                                                Name / Category
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 20%;text-align: center;">Your Bid</th>
                                            <th scope="col" data-sortable="" style="width: 21%;text-align: center;">Current Price</th>
                                            <th scope="col" data-sortable="" style="width: 15%;text-align: center;">End Time</th>

                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                            @foreach($products as $product)
                                                @foreach($product->historyAuctions->where('user_id', \Illuminate\Support\Facades\Auth::user()->id) as $productAuction)
                                                    <tr>
                                                        <th scope="row" style="text-align: center">{{  $i++ }}</th>
                                                        <td>
                                                            <div>
                                                                <div style="display: flex; align-items: center;">
                                                                    <img style="height: 60px; max-width: 60px" data-toggle="tooltip" title="" data-placement="bottom" src="front/img/products/{{ $product->productImages[0]->path  ?? '' }}" alt="" data-original-title="Image">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading"><a class="product-title" href="shop/product/ {{ $product->id }}">{{ $product->name }}</a></div>
                                                                        <div class="widget-subheading opacity-7">
                                                                            {{ $product->productCategory->name }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="text-align: center">${{number_format($productAuction->price,2)}}</td>
                                                        <td style="text-align: center">${{number_format($product->historyAuctions->last()->price,2)}}</td>
                                                        <td style="text-align: center">
                                                            @if(strtotime($product->end_time) < strtotime(\Illuminate\Support\Carbon::now()) || count($product->historyAuctions->where('status', 1)) == 1 )
                                                                <div class="badge bg-danger mt-2">The End</div>
                                                            @else
                                                                <div class="badge bg-success mt-2">
                                                                    {{ date('H:i:s d/m/Y', strtotime($product->end_time)) }}
                                                                </div>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-block card-footer">
                                    <div class="row col-lg-12 col-md-12">
{{--                                        {{ $products->links()}}--}}
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
