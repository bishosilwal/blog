<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
	public function index(){
		$title = 'Welcome to laravel tutorial';
		return view('pages.index')->with('title', $title);
	}

	public function about(){
		return view('pages.about');
	}
	public function services(){
		$data = array(
			'title'=> 'services',
			'services'=> ['web Development', 'Programming', 'Seo']
		);
		return view('pages.services')->with($data);
	}
}
