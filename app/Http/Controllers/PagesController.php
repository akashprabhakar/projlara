<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //About method

    public function index(){

        $name = 'Prabhakar';
        return view('pages.index')->with('name', $name);
    }

    public function about(){

    	$name = 'Prabhakar';
    	return view('pages.about')->with('name', $name);
	}


	public function contact(){

    	$name = 'Prabhakar';
    	return view('pages.contact')->with('name', $name);
	}


}
