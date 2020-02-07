<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'category' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
 
        // Product::create([
        //     'name' => $request->name,
        //     'category' => $request->category,
        //     'fileUpload' => $request->image
        // ]);
           $files = $request->file('fileUpload');
           $destinationPath = 'image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           
           $product = new Product;
           $product->name = $request->name;
           $product->category = $request->category;
           $product->image = $insert['image'] = "$profileImage";
           $product->save();

 
        return redirect('/');
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
       $product = Product::find($id);
       return view('edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
            'category' => 'required',          
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $product = Product::find($id);

        if ($files = $request->file('fileUpload')){
            $usersImage = public_path("image/{$product->image}"); // get previous image from folder
        
         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }
        $destinationPath = 'image/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $insert['image'] = "$profileImage";

        
        $product->name = $request->name;
        $product->category = $request->category;
        $product->image = $insert['image'] = "$profileImage";
     }
        $product->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $gambar = Product::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

        Product::where('id',$id)->delete();


        return redirect('/');
    }
}
