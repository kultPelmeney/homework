@extends('front.client.layout.master')

@section('title', 'Sell Products')

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
                                    <form  action="./client/seller/product/{{ $product->id }}/auction">

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
                                            <th scope="col" data-sortable="" style="width: 13%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 37%;">
                                                Name
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 30%;text-align: center;">Price</th>
                                            <th scope="col" data-sortable="" style="width: 20%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                                @foreach($productAuctions as $productAuction)
                                                    <tr>
                                                        <th scope="row" style="text-align: center">{{  $i++ }}</th>
                                                        <td>
                                                            <div class="widget-heading">
                                                                <a href="client/user/profile/{{ $productAuction->user_id }}">
                                                                    {{ $productAuction->name }}
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td style="text-align: center">${{number_format($productAuction->price,2)}}</td>
                                                        <td style="text-align: center">
{{--                                                            @if(strtotime($product->end_time) < strtotime(\Illuminate\Support\Carbon::now()) )--}}

                                                                @if( count($status) == 1)
                                                                    @if( $productAuction->status == 1 )
                                                                        <div class="badge bg-success mt-2">successful</div>
                                                                    @else
                                                                        <div class="badge bg-danger mt-2">fail</div>
                                                                    @endif

                                                                @else
                                                                    <form action="./client/seller/product/{{ $product->id  }}/auction/{{ $productAuction->id }}" method="post">
                                                                        @csrf
                                                                        <input type="number" hidden name="status" value="1">
                                                                        <button type="submit" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">approve</button>
                                                                    </form>
                                                                @endif

{{--                                                            @else--}}
{{--                                                                <div class="badge bg-warning mt-2">ongoing</div>--}}
{{--                                                            @endif--}}



                                                        </td>
                                                    </tr>
                                                @endforeach


                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-block card-footer">
                                    <div class="row col-lg-12 col-md-12">
{{--                                        {{$products->links()}}--}}
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
