<?php

$loginname="Developer:";
if(\Auth::user()->roles){
if (\Auth::user()->roles->first()->name == 'Admin')
   $loginname="Admin:";
   
}

// $loginname="Developer";


?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-hourglass glyph-size"></span><p class="login-name">{{ $loginname }}{{  \Auth::user()->username}}</p></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-times"></span></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li style="color:#fff;"><a href="{{ url('/auth/logout') }}" class="pull-right" ><span class="glyphicon glyphicon-off"></span></a></li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
