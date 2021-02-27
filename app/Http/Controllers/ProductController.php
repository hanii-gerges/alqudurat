<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function adminIndex()
    {
        $products = Product::all();
        return view('products.admin.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);

        $product = Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        if(request('image')){
            $product->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect('/admin/products')->with('success','product created');
    }

   
        //

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::all();
        return view('site.product.show' , compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit')->with('product',$product)
                                    ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);

        $product->update($request->all());
        
        if(request('image')){
            if($product->getFirstMedia())
            {
                $product->getFirstMedia()->delete();
            }
            $product->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect('/admin/products')->with('success','product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/products')->with('success','product deleted');
    }
}
