<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class PhotoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$photos = Photo::with('category')
			// ->orderBy('arrival', 'asc')
			->get();
		return view('admin.photos')->with('photos', $photos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$categories = Category::all();
		return view('admin.photoCreate', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if ($request->hasFile('photo_file')) {
			//get file name with extension
			$fileNameWithExt = $request->file('photo_file')->getClientOriginalName();
			//get just file name
			$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
			//just file extension
			$extension = $request->file('photo_file')->getClientOriginalExtension();
			//file name to store
			$fileNameToStore = $filename . '_' . time() . '.' . $extension;
			//image upload
			$path = $request->file('photo_file')->storeAs('public/photo_files', $fileNameToStore);
		} else {
			$fileNameToStore = 'noimage.jpg';
		}
		$request->request->add(['url' => $fileNameToStore]);
		$request->request->add(['width' => 640]);
		$request->request->add(['height' => 480]);
		Photo::create($request->all());
		return redirect('admin/photos')->with('success', 'photo created!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Photo $photo)
	{
		$photo = Photo::with('category')->get()->find($photo->id);
		return view('admin.photoSingle', compact('photo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Photo $photo)
	{
		$photo = Photo::with('category')->get()->find($photo->id);
		$categories = Category::all();
		return view('admin.photoEdit', compact('photo', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Photo $photo)
	{
		$photo->title = $request->title;
		$photo->description = $request->description;
		$photo->date = $request->date;
		$photo->location = $request->location;
		$photo->category_id = $request->category_id;
		$photo->url = $request->url;

		$photo->save();
		return redirect('admin/photos')->with('success', 'Successfully updated your photo!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Photo $photo)
	{
		$photo = Photo::find($photo->id);
		$photo->delete();

		return redirect('admin/photos')->with('success', 'Successfully deleted your photo!');
	}
}
