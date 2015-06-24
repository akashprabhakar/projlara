@extends('app')

@section('content')

   	<div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">

                      <div class="side side-right">
                      <div class="profile"><span class="glyphicon glyphicon-hourglass"></div>
                      <h1><span>Login</span></h1>

                        <div class="intro-content1 effect-8">
                           @include('errors.list')


                            <div class="row ">
                               
                                <form class="form-horizontal col-md-12" role="form" method="POST" action="/auth/login">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                                  <div class="form-group col-md-12 align-bottom">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control color-input" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-12 ">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control color-input" name="password" id="password" placeholder="Password">
                                  </div>
                                  <div class="checkbox col-md-12">
                                    <input type="checkbox" id="remember" class="align-bottom"> 
                                    <label for="remember">Remember Me</label>
                                      
                                  </div>
                                   <div class="form-group col-md-12 ">
                                  <button type="submit" class="btn btn-primary col-md-12 form-control1 align-btn align-bottom1">Login</button>
                                  <p class="col-md-12 align-bottom">If you dont have an account you can register by clicking below.</p>
                                  <a href="#" class="btn btn-primary col-md-4 align-btn form-control1 text-center ">Register</a>
                                	</div>
                                </form>
            
                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                
                
                
            </div><!-- /splitlayout -->
        </div><!-- /container -->
    
@stop