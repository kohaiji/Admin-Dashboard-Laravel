<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminIndexController extends Controller
{
    public function adminIndex()
    {

        return view("admin/admin-index-redirect");
    }
}
