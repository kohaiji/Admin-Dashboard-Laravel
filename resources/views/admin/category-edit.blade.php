@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
    <h1>Edit category</h1>
@stop

@section('content')
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <div class="container">
        <form action="/admin/category-update/{{$category->id}}" method="post" name="form1" onsubmit="required()">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Id</span>
                <input type="text" name="categoryId" value="{{$category->id}}" class="form-control" disabled>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Category Name</span>
                <input type="text" name="categoryName" value="{{$category->category_name}}" class="form-control">
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
            var empt = document.forms["form1"]["categoryName"].value;
            if (empt == "")
            {
                alert("Please enter category name");
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


