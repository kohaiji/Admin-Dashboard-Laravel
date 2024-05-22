@extends('adminlte::page')

@section('title', 'Product List')

@section('content_header')
    <div class="container">
        <h1>Product List</h1>
    </div>
@stop

@section('content')
    <div class="container">
        <form action="/admin/product-search" method="get">
            <div class="row">
                <div class="col-10">
                    <input placeholder="Search Something......" class="form-control form-control-sm" type="text" name="data" value="{{$data}}">
                </div>
                <div class="col-auto">
                    <button class="btn btn-dark btn-sm" type="submit"><i class="fa fa-search" aria-hidden="true" ></i></button>
                </div>
                <div class="col-auto"><span><a class="btn btn-success btn-sm " href="/admin/product-list">View All</a></span></div>
            </div>
        </form>

        <a href="/admin/product-add" class="btn btn-primary btn-sm">Add Product</a>

        <table class="table table-hover  table-striped">
            <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Description</th>
                <th class="text-center">Image</th>
                <th class="text-center">Category Name</th>
                <th colspan="3" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $obj)
                <tr>
                    <td class="text-center">{{$obj->id}}</td>
                    <td class="text-center">{{$obj->product_name}}</td>
                    <td class="text-center">{{$obj->price}}</td>
                    <td class="text-center">{{$obj->description}}</td>
                    <td class="text-center"><img height="50" src="/image_product/{{$obj->image}}" alt=""></td>
                    <td class="text-center">{{$obj->category_name}}</td>
                    <td class="text-left">
                        <a href="/admin/product-details/{{$obj->id}}" class="btn btn-outline-success btn-sm">Details</a>
                    </td>
                    <td class="text-center">
                        <a href="/admin/product-edit/{{$obj->id}}" class="btn btn-outline-primary btn-sm">Edit</a>
                    </td>
                    <td class="text-right">
                        <a onclick="return confirm('Are you sure?')" href="/admin/product-delete/{{$obj->id}}" class="btn btn-outline-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>

    </script>
@stop


