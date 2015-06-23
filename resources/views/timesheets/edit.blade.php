@extends('app')

@section('content')
	@include('timesheets.menu')

	<div class="container">
	<div class="content">

    <h1 class="page-header">Edit: {{ $timesheet->proj_name }}</h1>

    @include('errors.list')

    {!! Form::model($timesheet,['method' => 'PATCH', 'action' => ['TimesheetsController@update', $timesheet->id]]) !!}

        @include('timesheets.form' , ['submitButtontext' => 'Update Record'])

    {!! Form::close() !!}

    </div>
    </div>
@stop

@stop