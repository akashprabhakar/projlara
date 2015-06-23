@extends('app')

@section('content')

@include('auth.introcontent')

                            <div class="row ">
                                <h1><span>Login</span></h1>
                                <form class="form-horizontal col-md-12" role="form" method="POST" action="/auth/login">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                                  <div class="form-group col-md-12 align-bottom">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-12 align-bottom">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                  </div>
                                  <div class="checkbox col-md-12">
                                    <input type="checkbox" id="remember" class="align-bottom"> 
                                    <label for="remember">Remember Me</label>
                                      
                                  </div>
                                  <button type="submit" class="btn btn-primary col-md-8 form-control align-bottom1">Login</button>
                                  <p class="col-md-12 align-bottom">If you dont have an account you can register by clicking below.</p>
                                  <a href="#" class="btn btn-primary col-md-8 text-center form-control">Register</a>
                                </form>
            
                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                
                
                
            </div><!-- /splitlayout -->
        </div><!-- /container -->
    
@stop