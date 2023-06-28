@extends('admin.layout.master')

@section('title', 'Category')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Categories</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./admin/home">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/category/create" class="btn-create btn-shadow btn-hover-shine mr-3 btn btn-primary">
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
                                <div class="row col-lg-4 col-md-6 mt-lg-3 mt-md-3">
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
                                            <th scope="col" data-sortable="" style="width: 10%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 50%;">
                                                Name
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 40%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                            @foreach($categories as $category)
                                                <tr>
                                                    <th scope="row" style="text-align: center">{{ $category->id }}</th>
                                                    <td style="font-weight: 700; opacity: 0.8;">{{ $category->name }}</td>
                                                    <td style="text-align: center">
                                                        <a href="./admin/category/{{ $category->id }}/edit" data-toggle="tooltip" title="Edit"
                                                           data-placement="bottom"
                                                           class="btn btn-outline-warning border-0 btn-sm">
                                                                            <span class="btn-icon-wrapper opacity-8">
                                                                                <i class="bi bi-pencil-square"></i>
                                                                            </span>
                                                        </a>
                                                        <form class="d-inline" action="./admin/category/{{ $category->id }}" method="post">
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
                                        {{$categories->links()}}
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
