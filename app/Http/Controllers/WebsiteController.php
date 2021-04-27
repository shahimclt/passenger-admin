<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class WebsiteController extends Controller
{
    public function index()
	{
		$photos = Photo::with('category')
			// ->orderBy('arrival', 'asc')
			->get();

        
		$categories = Category::all();

		return view('website.home')
			->with('nav','home')
            ->with('photos', $photos)
            ->with('categories', $categories);
	}

	public function about()
	{
		return view('website.about')
		->with('nav','about');
	}
}
