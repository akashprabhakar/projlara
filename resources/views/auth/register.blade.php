@extends('app')


@section('content')

  <div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">

                      <div class="side side-right">
                      <div class="profile"><span class="glyphicon glyphicon-hourglass"></div>
                      <h1><span>Register</span></h1>

                        <div class="intro-content1 effect-8">
                           @include('errors.list')





<div class="row ">
                               
                                <form class="form-horizontal col-md-12" role="form" method="POST" action="/auth/register">
    
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                                    <div class="form-group align-bottom col-md-12">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control color-input " name="username" id="username" value="{{ old('username') }}" placeholder="Username">
                                  </div>
                                  
                                  <div class="form-group col-md-12">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control color-input col-md-6" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control color-input col-md-6" name="password" id="password" placeholder="Password">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control color-input col-md-6" name="password_confirmation" id="password" placeholder="Confirm Password">
                                  </div>

                                  <button type="submit" class="btn btn-primary col-md-6 form-control1 align-btn align-bottom1">Register</button>
                                  <p class="col-md-12 align-bottom">If you have an account you can login by clicking below.</p>
                                  <a href="#" class="btn btn-primary col-md-6 align-btn form-control1 text-center ">Login</a>
                                </form>
            
                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                
                
                
            </div><!-- /splitlayout -->
        </div><!-- /container -->
    

@stop