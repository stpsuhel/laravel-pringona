<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function productIndex(){
        return view('admin.product.product');
    }

    public function productCreate(){
        return view('admin.product.productCreate');
    }
}
