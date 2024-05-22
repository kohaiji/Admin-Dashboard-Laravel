<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAll()
    {
        $data = "";
        $path = "admin/product-list";

        // SELECT * FROM product
        // ON product.category_id = category.id
        $products = DB::table("product")
            ->join("category", "product.category_id", "=", "category.id")
            ->select("product.*", "category.category_name")
            ->get();


        return view("admin/admin-index",
            [
                "path" => $path,
                "products" => $products,
                "data" => $data
            ]);
    }

    public function delete($id){
        DB::table("product")
            ->where("id", $id)
            ->delete();

        return redirect("/admin/product-list");

    }

    public function add(){
        $path = "admin/product-add";

        // lay list category tu DB roi truyen ra view
        $categories = DB::table("category")
            ->get();

        return view("admin/admin-index",
            [
                "path" => $path,
                "categories" => $categories
            ]);
    }

    public function save(Request $request){
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $categoryId = $request->categoryId;

        $imageName = "";
        if($request->image != null){
            $imageName = $request->image->getClientOriginalName();

            // upload image to image_product
            $request->image->move(public_path("image_product"), $imageName);
        }

        if($productName == "" || $price == "" || $categoryId == 0){
            return redirect("/admin/product-add");
        }
        else {
            DB::table("product")
                ->insert([
                    "product_name" => $productName,
                    "price" => $price,
                    "description" => $description,
                    "image" => $imageName,
                    "category_id" => $categoryId
                ]);

            return redirect("/admin");
        }
    }

    public function edit($id){
        $path = "admin/product-edit";
        $category = DB::table("category")
        ->get();
        $product = DB::table("product")
            ->where("id", "=", $id)
            ->first();


        return view("admin/admin-index", [
            "path" => $path,
            "product" => $product,
            "category" => $category
        ]);
    }

    public function update($id, Request $request){
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $categoryId = $request->categoryId;

        $imageName = "";
        if($request->image != null){
            $imageName = $request->image->getClientOriginalName();

            // upload image to image_product
            $request->image->move(public_path("image_product"), $imageName);
        }

        if($productName == "" || $price == "" || $categoryId == 0){
            return redirect("/admin/product-edit/$id");
        }
        else{
            DB::table("product")

                ->where("id", "=", $id)
                ->update([
                    "product_name" => $productName,
                    "price" => $price,
                    "description" => $description,
                    "image" => $imageName,
                    "category_id" => $categoryId
                ]);
            return redirect("/admin/product-list");
        }

    }

    public function details($id){
        $path = "admin/product-details";
        $category = DB::table("category")
            ->get();
        $product = DB::table("product")
            ->where("product.id", "=", $id)
            ->join("category", "product.category_id", "=", "category.id")
            ->select("product.*", "category.category_name")
            ->get();


        return view("admin/admin-index", [
            "path" => $path,
            "product" => $product,
            "category" => $category
        ]);
    }

    public function productSearch(Request $request){
        $path = "admin/product-list";
        $data = $request->data;

        $products = DB::table("product")
            ->where("product_name", "LIKE", "%$data%")
            ->join("category", "product.category_id", "=", "category.id")
            ->select("product.*", "category.category_name")
            ->get();


//        dd($products);

        return view("admin/admin-index", [
            "products" => $products,
            "data" => $data,
            "path" => $path
        ]);
    }
}
