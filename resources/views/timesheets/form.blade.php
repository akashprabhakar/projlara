<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <table class="table table-hover ">
        <tr class="form-group space">
            <td class="show-format right-align">{!! Form::label('task_date','Date:') !!}</td>
            <td>{!! Form::input('Date','task_date',date('m-d-Y'),['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('proj_name','Project Name:') !!}</td>
            <td>{!! Form::text('proj_name',null,['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('task_desc','Description Of Task:') !!}</td>
            <td>{!! Form::textarea('task_desc',null,['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('dev_initials','Developer Initials:') !!}</td>
            <td>{!! Form::text('dev_initials',null,['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('reference','Reference:') !!}</td>
            <td>{!! Form::text('reference',null,['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('hours','Hours:') !!}</td>
            <td clas="form-control">{!! Form::text('hours',null,['class' => 'form-control']) !!}</td>
        </tr>
        <tr class="form-group space ">
            <td class="show-format right-align">{!! Form::label('solution','Solution:') !!}</td>
            <td>{!! Form::textarea('solution',null,['class' => 'form-control']) !!}</td>
        </tr>

    </table>
    <p class="col-lg-12">
        {!! Form::submit($submitButtontext,['class' => 'col-md-4 btn btn-primary ']) !!}
        <a href="{{ url('/timesheets') }}" class="col-md-4 btn btn-info pull-right">View Records</a>

    </p>

</div>