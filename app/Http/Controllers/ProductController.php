<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $product = Product::paginate(10);
        return view('product.index',compact('product'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cat = Category::all();
        return view('product.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'desc' => 'required',
            'link' => 'required',
            'image' => 'required|image',
            'cat' => 'required'
            ]);
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->desc;
        $product->link = $request->link;
        $product->category_id = $request->cat;
        $product->user_id = Auth::user()->id;
        if($request->hasFile('image')){
            $file = $request->image->store('products/');
            $product->image = $request->image->hashName();
            $product->save();
        }
        return redirect()->route('product.index')->with('success','new product created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Product::findOrFail($id);
        return view('product.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $cat = Category::all();
        $row = Product::findOrFail($id);
        return view('product.edit',compact('row','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'desc' => 'required',
            'link' => 'required',
            'cat' => 'required',
            'image' => 'image',
            ]);
        $update = Product::findOrFail($id);
        $update->title = $request->title;
        $update->description = $request->desc;                  
        $update->link = $request->link;                  
        $update->category_id = $request->cat;                  
        if($request->hasFile('image')){
            Storage::delete('products/'.$request->oldimage);           
            $file = $request->image->store('products/');
            $update->image = $request->image->hashName(); 
            // echo $request->oldimage;           
        }        
        $update->save(); 
        return redirect()->route('product.index')->with('success','product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
