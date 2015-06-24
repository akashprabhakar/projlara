@extends('app')

@section('content')

@include('timesheets.menu')

<div class="container">
	<div class="content1">
		<p class="col-lg-12">
		  	<a href="{{ route('timesheets.create') }}" class="icon" ><span class="glyphicon glyphicon-edit"></span><h6>Add Record</h6></a>
		</p>
        <p class="col-lg-12">
            <a href="{{ url('/generatecsv') }}" class="icon" ><span class="glyphicon glyphicon-file"><h6>Generate CSV</h6></span></a>
      
        </p>
	</div>	
            


     <div class="content">
		<h1 class="page-header">All Records</h1>
		<div class="row">
		    <table class="table table-bordered">

			    <tr class="space">
				  	<th class="table-header">Date</th>
				  	<th class="table-header">Project Name</th>
				  	<th class="table-header">Developer Initials</th>
				  	<th class="table-header">Action</th>
				</tr>


			@foreach($timesheets as $timesheet)

				<tr class="space">
					<td>{{ $timesheet->task_date}}</td>
					<td>{{ $timesheet->proj_name}}</td>
					<td>{{ $timesheet->dev_initials}}</td>
					<td><a href="{{ url('/timesheets', $timesheet->id) }}" class="btn btn-info" >View </a>
			            <a href="{{ route('timesheets.edit', $timesheet->id) }}" class="btn btn-info" >Edit</a>
			            
			        </td>
				</tr>
			@endforeach
			
			</table>
		</div>

			{!! $timesheets->render() !!}
	</div>
</div>

@stop

@stop