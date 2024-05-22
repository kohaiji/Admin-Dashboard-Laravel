<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    @if($path == "admin/category-list")
        @include("admin.category-list")
    @endif

    @if($path == "admin/category-add")
        @include("admin.category-add")
    @endif

    @if($path == "admin/category-edit")
        @include("admin.category-edit")
    @endif

    @if($path == "admin/product-list")
        @include("admin.product-list")
    @endif

    @if($path == "admin/product-add")
        @include("admin.product-add")
    @endif

    @if($path == "admin/product-edit")
        @include("admin.product-edit")
    @endif

    @if($path == "admin/product-details")
        @include("admin.product-details")
    @endif
</body>
</html>
