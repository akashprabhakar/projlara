@extends('app')


@section('content')

@include('auth.introcontent')




<div class="row ">
                                <h1><span>Register</span></h1>
                                <form class="form-horizontal col-md-12" role="form" method="POST" action="/auth/register">
    
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                                    <div class="form-group align-bottom col-md-12">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control " name="username" id="username" value="{{ old('username') }}" placeholder="Username">
                                  </div>
                                  
                                  <div class="form-group col-md-12">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control col-md-6" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control col-md-6" name="password" id="password" placeholder="Password">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control col-md-6" name="password_confirmation" id="password" placeholder="Confirm Password">
                                  </div>

                                  <button type="submit" class="btn btn-primary col-md-12 form-control">Register</button>
                                  <p class="col-md-12 align-bottom">If you have an account you can login by clicking below.</p>
                                  <a href="" class="btn btn-primary col-md-8 text-center form-control">Login</a>
                                </form>
            
                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                
                
                
            </div><!-- /splitlayout -->
        </div><!-- /container -->
    

@stop