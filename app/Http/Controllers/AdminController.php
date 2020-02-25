<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Destination;
use App\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination=Destination::all();
        $destination=Destination::paginate(2);
        $category=Category::all();
        return view('admin/index_admin', ['destination' => $destination], compact('destination', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
    	return view('admin/create', compact('category'));
    }

    public function createCat()
    {
        $category = Category::all();
        return view('admin/create_cat');
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
			'name' => 'required',
			'category' => 'required',
			'location' => 'required',
			'description' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:4096'
		]);

		$file = $request->file('image');
		$destinationPath = 'image/'; // upload path
        $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profileImage);
        $insert['image'] = "$profileImage";
		// $insert['foto'] = "$imageKaryawan";

		Destination::create([
			'name' => $request->name,
			'category' => $request->category,
			'location' => $request->location,
			'description' => $request->description,
			'image' => $insert['image'] = "$profileImage"
        ]);
        return redirect('/');
    }

    public function storeCat(Request $request)
    {
        $this->validate($request, [
			'nama_cat' => 'required'
		]);

		Category::create([
			'nama_cat' => $request->nama_cat
		]);

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
    public function edit()
    {
        $destination=Destination::all();
        $destination=Destination::paginate(10);
        return view('admin/utilities', ['destination' => $destination], compact('destination', 'category'));
    }


    public function editCat()
    {
        $category = Category::all();
        return view('admin/utilities_cat', ['category' => $category], compact('destination', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update($id)
    {
        $destination = Destination::find($id);
        $category = Category::all();
        return view('admin/update', ['destination' => $destination], compact('destination', 'category'));

    }


    public function updateStore(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
			'category' => 'required',
			'location' => 'required',
			'description' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:4096'
		]);

        $destination = Destination::find($id);

        if ($files = $request->file('image')){
            $usersImage = public_path("image/{$destination->image}"); // get previous image from folder
        
         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }

        $file = $request->file('image');
		$destinationPath = 'image/'; // upload path
        $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profileImage);
        $insert['image'] = "$profileImage";
		// $insert['foto'] = "$imageKaryawan";

	
        $id = $request['id'];
        $update = Destination::where('id', $id)->first();
        $update->name =  $request['name'];
        $update->category = $request['category'];
        $update->location = $request['location'];
        $update->description = $request['description'];
        $update->image = $insert['image'] = "$profileImage";

        $update->update();
     }
    
        return redirect('/edit');
    }


    public function updateCat($id_cat)
    {
        $category = Category::find($id_cat);
        return view('admin/update_cat', ['category' => $category]);

    }

    public function updateCatStore($id_cat,Request $request){
		$this->validate($request, [
			'nama_cat' => 'required'
		]);

		$table = Category::find($id_cat);

		$id_cat = $request['id_cat'];
	    $update = Category::where('id_cat', $id_cat)->first();
	    $update->nama_cat = $request['nama_cat'];
	    $update->update();
		
    	return redirect('/');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Destination::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

        Destination::where('id',$id)->delete();


        return redirect('/edit');
    }

    public function destroyCat($id_cat)
    {
        $delete = Category::find($id_cat);
    	$delete->delete();

    	return redirect('/editCat');
    }
}
