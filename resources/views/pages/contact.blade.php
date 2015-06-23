@extends('app')

@section('content')
    <div class="title">Contact {{ $name}}..</div>

    <div class="quote">{{ Inspiring::quote() }}</div>
@stop

@section('footer')
    
    <script type="text/javascript">alert('Learning Larvel');</script>
    
@stop

