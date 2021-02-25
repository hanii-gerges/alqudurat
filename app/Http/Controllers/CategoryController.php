<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    public function adminIndex()
    {
        $categories = Category::all();
        return view('categories.admin.index')->with('categories',$categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create($request->all());

        return redirect('/admin/categories')->with('success','category created');
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category',$category);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category->update($request->all());

        return redirect('/admin/categories')->with('success','category updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin/categories')->with('success','Category Deleted');
    }
}
