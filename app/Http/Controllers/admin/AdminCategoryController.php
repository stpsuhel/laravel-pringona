<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('admin.category.category');
    }

    public function create(){
        return view('admin.category.categoryCreate');
    }

    /*public function store(Request $request){
        dd($request->all());
        $product = new Product();
        $product->save($request->all());
        return redirect('admin-product.index', 200);
    }*/
}
