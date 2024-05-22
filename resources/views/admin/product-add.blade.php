@extends('adminlte::page')

@section('title', 'Add Product')

@section('content_header')
    <h1>Add Product</h1>
@stop

@section('content')
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <div class="container">
        <form action="/admin/product-save" method="post" enctype="multipart/form-data" name="form1" onsubmit="required()">
            @csrf
            <div class="mt-2 mb-2">
                <label for="">Product Name</label>
                <input type="text" name="productName" class="form-control form-control-sm"/>
            </div>

            <div class="mt-2 mb-2">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control form-control-sm"/>
            </div>

            <div class="mt-2 mb-2">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control form-control-sm" />
            </div>

            <div class="mt-2 mb-2">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control form-control-sm" />
            </div>

            <div class="mt-2 mb-2">
                <label for="">Category</label>
                <select name="categoryId" id="" class="form-control form-control-sm">
                    <option value="0">None</option>
                    @foreach($categories as $obj)
                        <option value="{{$obj->id}}">{{$obj->category_name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="mt-2 mb-2">
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
