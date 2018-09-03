@extends('layout')
@section('title', 'Login & Register')
@section('content')

  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="autoacco/images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Login/Register</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">Login & Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#login-tab" data-toggle="tab">Login</a></li>
              <li><a href="#register-tab" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active p-15" id="login-tab">
                <h4 class="text-gray mt-0 pt-5"> Login</h4>
                <hr>

                <form name="login-form" class="clearfix" method="POST" action="{{ route('login') }}" >
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" class="form-control" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password">Password</label>
                      <input type="password" type="password" id="password" name="password" class="form-control" required>

                      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">
                    <label for="form_checkbox">
                      <input id="form_checkbox" name="form_checkbox" {{ old('remember') ? 'checked' : '' }} type="checkbox" >
                      Remember me </label>
                  </div>
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Forgot Your Password?</a>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="login/facebook" data-bg-color="#3b5998">Login with facebook</a>
                    <a class="btn btn-dark btn-lg btn-block no-border" href="login/google" data-bg-color="#d34836">Login with google+</a>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade in p-15" id="register-tab">
                <form name="reg-form" class="register-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                  <p class="text-gray">here You can register.</p>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name">Name</label>
                      <input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" >Email Address</label>
                      <input id="email" name="email" class="form-control" type="email" value="{{ old('email') }}" required>
                       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                  </div>
<!--
                  
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="username">Choose Username</label>
                      <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}">
                      @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group col-md-6">
                       <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="gender">Gender</label>
                      <input type="text" id="gender" name="gender" class="form-control" type="text">
                    </div>


                    <label>Property Type</label>

                  <select  class="form-control">
                   <option> Apartments</option>
                   <option>Penthouses</option>
                   <option>Plazas</option>
                   <option>Plots</option>
                   <option>Rooms</option>
                   <option>Duplex</option>
                   <option>Buildings</option>
                   <option>Offices</option>
                   <option>Shops</option>
                   <option>Open Floor</option>
                   <option>Office Apartment</option>
                   <option>Duplex</option>
                   <option>Plazas</option>
                   <option>Plots</option>
                  </select>
                </div>
              </div>
-->
                
                <div class="row">
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="username">Choose Username</label>
                      <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}">
                      @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                      <label for="gender">Gender</label>
                      <select class="form-control" id=gender name=gender value="{{ old('gender') }}">
                      <option>Male</option>
                      <option>Female</option>
                      </select>
                            </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                      <label for="address">Choose Address</label>
                      <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">
                      @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                      <label for="city">Choose City</label>
                      <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}">
                      @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password">Choose Password</label>
                      <input id="password" type="password" class="form-control" name="password" required>

                       @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                    </div>
                    <div class="form-group col-md-6">
                      <label for="password-confirm">Re-enter Password</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                          <!-- <div class="form-group col-md-12">
                      <label for="photo">Image Upload</label>
                      <input id="photo" type="file" class="form-control" name="photo" value="photo" required>
                            </div>-->
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection