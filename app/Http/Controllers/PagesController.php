<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome to Pb';
    	return view('pages.index')->with('title',$title);
    }

    public function welcome(){
    	return view('welcome');
    }
    public function about(){
    	$title = 'About';
    	return view('pages.about')->with('title',$title);
    }
    public function services(){
    	$title = 'Services';
    	return view('pages.services')->with('title',$title);
    }
}
