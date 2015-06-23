@extends('app')

@section('content')

@include('admin.menu');
<div class="container">
    <div class="content">

        <h1 class="page-header">All Users</h1>


        <div class="row">
            <p class="col-lg-12">
                <a href="{{ route('timesheets.create') }}" class="btn btn-success pull-right" >Add new record</a>
                <br/>
            </p>



            <table class="table table-hover">

                <tr class="space">
                    <th class="table-header">Username</th>
                    <th class="table-header">Email Id</th>
                    <th class="table-header">Role</th>
                    <th class="table-header">Action</th>
                </tr>


                @foreach($users as $user)

                <tr class="space">
                    <td>{{ $user->username}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->roles->first()->name}}</td>
                    <td><a href="{{ url('/admin', $user->id) }}" class="btn btn-info" >View </a>
                        <a href="{{ route('timesheets.edit', $user->id) }}" class="btn btn-primary" >Edit</a>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@stop

@stop

@stop

@stop