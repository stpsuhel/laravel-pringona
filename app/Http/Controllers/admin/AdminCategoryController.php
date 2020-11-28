<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        $allCategory = Category::paginate(15);
        return view('admin.category.category', compact('allCategory'));
    }

    public function create(){
        $category = new Category();
        return view('admin.category.categoryCreate', compact('category'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|max:255',
        ]);
        $data = $request->all();

        $category = new Category();
        $category->create($data);
        return redirect()->route('admin-category.index');
    }

    public function show(Category $category){
        return view('admin.category.categoryCreate', compact('category'));
    }

    public function destroy(Category $category){
        $category->product()->delete();
        $category->delete();
        return back()->with('message', 'Category Deleted Successfully');
    }
}
