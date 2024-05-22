@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>Edit Product</h1>
@stop

@section('content')
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <div class="container">
        <form action="/admin/product-update/{{$product->id}}" method="post" enctype="multipart/form-data" name="form1" onsubmit="required()">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text"><b>Id</b></span>
                <input type="text" name="productId" value="{{$product->id}}" class="form-control" disabled>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><b>Product Name</b></span>
                <input type="text" name="productName" value="{{$product->product_name}}" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><b>Price</b></span>
                <input type="number" name="price" value="{{$product->price}}" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><b>Description</b></span>
                <input type="text" name="description" value="{{$product->description}}" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><b>Image</b></span>
                <input type="file" name="image" value="{{$product->image}}" class="form-control">
            </div>

            <div class="mt-2 mb-2">
                <label for="">Category</label>

                <select name="categoryId" id="" class="form-control form-control-sm">
                    <option value="0">None</option>
                    @foreach($category as $object)
                        <option value="{{$object->id}}" @if($object->id == $product->category_id){{'selected'}}@endif>{{$object->category_name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <button class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        function required()
        {
            var empt1 = document.forms["form1"]["productName"].value;
            var empt2 = document.forms["form1"]["price"].value;
            var empt3 = document.forms["form1"]["categoryId"].value;
            if (empt1 == "" || empt2 == "" || empt3 == 0)
            {
                alert("Product name, Category or Price cannot be blank!");
                return false;
            }
            else
            {
                alert('Successfully!');
                return true;
            }
        }

    </script>
@stop
