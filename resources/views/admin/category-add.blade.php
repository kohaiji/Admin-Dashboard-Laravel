
@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@stop

@section('content')
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <div class="container">

        <form action="/admin/category-save" method="post" name="form1" onsubmit="required()">
            @csrf
            <div class="mt-2 mb-2">
                <label for="">Category Name</label>
                <input type="text" name="categoryName" class="form-control form-control-sm" pattern="[^0-9]*" title="Category Name cannot contains any numbers" required/>
            </div>

            <div class="mt-2 mb-2">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
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
            var x=document.forms["form1"]["categoryName"].value;
            if (isNaN(x) == true) // this is the code I need to change
            {

                return true;
            }
            else {
                alert("Category cannot have numbers!");
                return false;
            }

            // var empt = document.forms["form1"]["categoryName"].value;
            // if (empt == "")
            // {
            //     alert("Please enter category name");
            //     return false;
            // }
            // else
            // {
            //     alert('Successfully!');
            //     return true;
            // }
        }
    </script>
@stop
