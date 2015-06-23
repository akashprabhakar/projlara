<?php

namespace App\Http\Controllers;

use App\Timesheet;
use Illuminate\Http\Requests\Request    ;
use App\Http\Requests\TimesheetRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimesheetsController extends Controller
{
    //


    public function __construct()
    {

        $this->middleware('auth');



    }

    public function index() 
    {
        

    	$timesheets = \Auth::user()->timesheets()->latest()->get();

    	return view('timesheets.index', compact('timesheets'));
    }

    public function show($id)
    {

    	$timesheet = Timesheet::findOrFail($id);
    
    	return view('timesheets.show', compact('timesheet'));
    }


    public function create() 
    {


    	return view('timesheets.create');

    }

    public function store(TimesheetRequest $request)
    {

//      Timesheet::create($request->all());

        $timesheet = new Timesheet($request->all());

        \Auth::user()->timesheets()->save($timesheet);
    	return redirect('timesheets');

    }


    public function  edit($id)
    {
        $timesheet = Timesheet::findOrFail($id);


        return view('timesheets.edit', compact('timesheet'));



    }


    public function update($id, TimesheetRequest $request)
    {
        $timesheet = Timesheet::findOrFail($id);

        $timesheet->update($request->all());

        return redirect('timesheets');

    }

    public function destroy($id)
    {

        $timesheet = Timesheet::find($id);

        $timesheet->delete();

        return redirect('timesheets');

    }
}

