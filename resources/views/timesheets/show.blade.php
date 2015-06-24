@extends('app')

@section('content')
	@include('timesheets.menu')

	<div class="container">
	<div class="content">


	<h1 class="page-header">{{ $timesheet->proj_name }}</h1>
	<div class="row">
	<table class="table table-hover">
	<tr class="space">
	  	<td class="show-format">Date:</th>
	  	<td class="tab-data">{{ $timesheet->task_date}}</td>

	</tr>
	<tr class="space">
	  	<td class="show-format">Description Of task:</th>
	  	<td class="tab-data">{{ $timesheet->task_desc}}</td>

	</tr>

	<tr class="space">
	  	<td class="show-format">Developer name:</th>
	  	<td class="tab-data">{{ $timesheet->dev_initials}}</td>

	</tr>

	<tr class="space">
	  	<td class="show-format">Reference:</th>
	  	<td class="tab-data">{{ $timesheet->reference}}</td>

	</tr>
	<tr class="space">
	  	<td class="show-format">Hours:</th>
	  	<td class="tab-data">{{ $timesheet->hours}}</td>

	</tr>

	<tr class="space">
	  	<td class="show-format">Solution:</th>
	  	<td class="tab-data">{{ $timesheet->solution}}</td>

	</tr>


	
	</table>
	{!! Form::open(['method' => 'DELETE', 'route' => ['timesheets.destroy', $timesheet->id]]) !!}
		<p>
        <a class="">{!! Form::submit('Delete Record',['class' => 'col-md-4 btn btn-primary ']) !!}</a>
        <a href="{{ url('/timesheets') }}" class="col-md-4 btn btn-primary">View Records</a>
        
        </p>

        </div>
      {!! Form::close() !!}
	</div>
	</div>
	</div>
	@stop

@stop