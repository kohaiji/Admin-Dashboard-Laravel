<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getAll()
    {
        $path = "admin/category-list";
        $data = "";
        $categories = DB::table("category")
            ->get();


        return view("admin/admin-index",
        [
            "path" => $path,
            "categories" => $categories,
            "data" => $data
        ]);
    }

    public function delete($id){
        DB::table("category")
            ->where("id", $id)
            ->delete();

        return redirect("/admin/category-list");

    }

    public function add(){
        $path = "admin/category-add";

        return view("admin/admin-index",
        [
            "path" => $path
        ]);
    }

    public function save(Request $request){
        $path = "admin/category-add";
        $categories = DB::table("category")
            ->first();
        $categoryName = $request->categoryName;
//        $this->validate($request, [
//            'categoryName'=>'unique:category,categoryName',
//        ]);


            DB::table("category")
                ->insert([
                    "category_name" => $categoryName
                ]);

            return redirect("/admin/category-list");

    }

    public function edit($id){
        $path = "admin/category-edit";
        $category = DB::table("category")
            ->where("id", "=", $id)
            ->first();


        return view("admin/admin-index", [
            "path" => $path,
            "category" => $category
        ]);
    }

    public function update($id, Request $request){
        $categoryName = $request->categoryName;
        if ($categoryName == ""){
            return redirect("/admin/category-edit/$id");
        }
        else{
            DB::table("category")
                ->where("id", "=", $id)
                ->update([
                    "category_name" => $categoryName,
                ]);
            return redirect("/admin/category-list");
        }
    }

    public function categorySearch(Request $request){
        $path = "admin/category-list";
        $data = $request->data;

        $categories = DB::table("category")
            ->where("category_name", "LIKE", "%$data%")
            ->get();

//        dd($products);

        return view("admin/admin-index", [
            "categories" => $categories,
            "data" => $data,
            "path" => $path
        ]);
    }
}
