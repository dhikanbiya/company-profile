<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class VismisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vision = Post::where('page',2)->get();
        return view('vismis.index',compact('vision'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $about = Post::where('page',2)->first();
       if($about){
        return view('vismis.index');
       }else{
        return view('vismis.create'); 
       } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'section_one' => 'required',
            'section_two' => 'required',
            'image' => 'required|image'
        ]);

        $about = new Post;
        $about->section_one = $request->section_one;
        $about->section_two = $request->section_two;
        $about->user_id = Auth::user()->id;
        $about->page = 2;
        if($request->hasFile('image')){
            $file = $request->image->store('images/');
            $about->image = $request->image->hashName();
            $about->save();
        }
        return redirect()->route('vision.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Post::findOrFail($id);
        return view('vismis.edit',compact('edit'));
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
        $this->validate($request,[
            'section_one' => 'required',
            'section_two' => 'required',
            'image' => 'image',
            ]);

        $update = Post::findOrFail($id);
        $update->section_one = $request->section_one;
        $update->section_two = $request->section_two;
        if($request->hasFile('image')){
            Storage::delete('images/'.$request->oldimage);           
            $file = $request->image->store('images/');
            $update->image = $request->image->hashName();                  
        }        
        $update->save(); 
        return redirect()->route('vision.index')->with('success','vision mission updated');
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
