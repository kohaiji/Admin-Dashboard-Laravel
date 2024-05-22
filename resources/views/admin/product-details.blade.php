@extends('adminlte::page')

@section('title', 'Product Details')

@section('content_header')
    <h1>Product Details</h1>
@stop

@section('content')
    <div class="container">
        <table class="table table-hover  table-striped">
            @foreach($product as $obj)
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$obj->id}}</td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td>{{$obj->product_name}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{$obj->price}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$obj->description}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img height="100" src="/image_product/{{$obj->image}}" alt=""></td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td>{{$obj->category_name}}</td>
                </tr>
                @endforeach
                </thead>
        </table>
        <a href="/admin/product-list" class="btn btn-primary btn-sm">Go Back</a>
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


