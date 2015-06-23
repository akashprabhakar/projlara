@extends('app')

@section('content')
                <div class="title">Its About Me..</div>
                <div class="quote">{{ $name }}</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
@stop