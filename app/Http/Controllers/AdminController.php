<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

     public function __construct()
    {

        $this->middleware('auth');



    }
    
    public function index()
    {

        $users = User::latest()->get();
        return view('admin.index', compact('users'));
    }

    public function show($id)
    {

        $timesheets = User::find($id)->timesheets()->latest()->get();
        return view('admin.gettimesheet', compact('timesheets'));
    }
}
