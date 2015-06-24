@extends('app')

@section('content')
	
	@include('timesheets.menu')

	<div class="container">
	    <div class="content2">


    <h1 class="page-header">Add a new record</h1>

    @include('errors.list')

    {!! Form::open(['url' => 'timesheets']) !!}

        @include('timesheets.form', ['submitButtontext'=> 'Add Record'])

    {!! Form::close() !!}

    </div>
    </div>

@stop

@stop