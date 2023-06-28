@extends('admin.layout.master')

@section('title', 'Order')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Orders</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./admin/home">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Order</li>
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
                                            <th scope="col" data-sortable="" style="width: 4%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 41%;">
                                                Customer / Products
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 21%;text-align: center;">Address</th>
                                            <th scope="col" data-sortable="" style="width: 11%;text-align: center;">Total</th>
                                            <th scope="col" data-sortable="" style="width: 12%;text-align: center;">Status</th>
                                            <th scope="col" data-sortable="" style="width: 11%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                            @foreach($orders as $order)
                                                <tr>
                                                    <th scope="row" style="text-align: center">{{ $order->id }}</th>
                                                    <td >
                                                        <div>
                                                            <div style="display: flex; align-items: center;">
                                                                <img style="height: 60px;" data-toggle="tooltip" title="" data-placement="bottom" src="front/img/products/{{ $order->orderDetails[0]->product->productImages[0]->path }}" alt="" data-original-title="Image">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ $order->first_name . ' ' . $order->last_name }}</div>
                                                                    <div class="widget-subheading opacity-7">
                                                                        @if(count($order->orderDetails) > 1)
                                                                            (and {{ count($order->orderDetails) }} other products)
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td style="text-align: center">{{ $order->street_address . ' - ' . $order->town_city }}</td>
                                                    <td style="text-align: center">${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}</td>
                                                    <td style="text-align: center">
                                                        <div class="badge badge-dark">
                                                            {{ \App\Utilities\Constant::$order_status[$order->status] }}
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <a href="./admin/order/{{ $order->id }}"
                                                           class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                            Details
                                                        </a>
                                                    </td>
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-block card-footer">
                                    <div class="d-block card-footer">
                                        {{ $orders->links() }}
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
