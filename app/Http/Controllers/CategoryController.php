<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('site.services' , compact('categories'));
    }

    public function show(Category $category)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$category->id)->get();
        return view('site.show',compact('category','products','categories'));
    }


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
        ]);

        $category = Category::create($request->all());

        if(request('image')){
            $category->addMediaFromRequest('image')->toMediaCollection();
        }

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
        ]);

        $category->update($request->all());
        
        if(request('image')){
            if($category->getFirstMedia())
            {
                $category->getFirstMedia()->delete();
            }
            $category->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect('categories/edit/'.$category->id)->with('success','category updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin/categories')->with('success','Category Deleted');
    }
}