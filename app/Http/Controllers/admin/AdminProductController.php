<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        return view('admin.product.product');
    }

    public function create(){
        $allCategory = Category::all();
        return view('admin.product.productCreate', compact('allCategory'));
    }

    public function store(Request $request){
        if ($request->discount == null){
            $request->discount = 0;
        }
        $product = new Product();
        $product->create($request->all());
        return redirect('priyangona/admin-product');
    }

}
