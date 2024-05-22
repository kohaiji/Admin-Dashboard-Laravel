
@extends('adminlte::page')

@section('title', 'Category List')

@section('content_header')
    <div class="container">
        <h1>Category List</h1>
    </div>
@stop

@section('content')
    <div class="container">
        <form action="/admin/category-search" method="get">
            <div class="row">
                <div class="col-10">
                    <input placeholder="Search Something......" class="form-control form-control-sm" type="text" name="data" value="{{$data}}">
                </div>
                <div class="col-auto">
                    <button class="btn btn-dark btn-sm" type="submit"><i class="fa fa-search" aria-hidden="true" ></i></button>
                </div>
                <div class="col-auto"><span><a class="btn btn-success btn-sm " href="/admin/category-list">View All</a></span></div>

            </div>

        </form>
                <a href="/admin/category-add" class="btn btn-primary btn-sm">Add Category</a>
        <div class="table-responsive" style="display: flex;">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Category Name</th>
                    <th colspan="2" class="text-center">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($categories as $obj)
                    <tr>
                        <td class="text-center">{{$obj->id}}</td>
                        <td class="text-center">{{$obj->category_name}}</td>
                        <td class="text-center">
                            <a href="/admin/category-edit/{{$obj->id}}" class="btn btn-outline-primary">Edit</a>
                        </td>
                        <td class="text-center">
                            <a onclick="return confirm('Are you sure?')" href="/admin/category-delete/{{$obj->id}}" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
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


