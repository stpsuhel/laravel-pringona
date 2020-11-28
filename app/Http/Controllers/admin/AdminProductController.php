<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        $allProduct = Product::paginate(15);
        return view('admin.product.product', compact('allProduct'));
    }

    public function create(){
        $allCategory = Category::all();
        return view('admin.product.productCreate', compact('allCategory'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|max:255',
            'price' => 'required|max:5',
            'category_id' => 'required|max:5',
            'quantity' => 'required|max:5',
        ]);

        $data = $request->all();

        if ($data['discount'] == null){
            $data['discount'] = 0;
        }
        $product = new Product();
        $product->create($data);
        return redirect()->route('admin.dashboard');
    }

    public function destroy(Product $product){
        $product->delete();
        return back()->with('message', 'Product Deleted successfully!');
    }

}
