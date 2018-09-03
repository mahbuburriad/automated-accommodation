@extends('layout')
@section('title', 'Edit Profile')
@section('content')

  <div class="main-content">
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="autoacco/images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">AA || Account</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">All</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="doctor-thumb">
                <img src="images/user.png" alt="">
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white">Riad</h4>
                <p class="text-gray-silver">Lol Lol Details</p>
                <ul class="list angle-double-right m-0">
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br> aaa@gmail.com</li>
                  <li>domainname.com</li>
                </ul>
                <ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                {!! Html::link('editprofile', 'Edit Profile', array('class' => 'btn btn-info btn-flat mt-10 mb-sm-30')) !!}
                {!! Html::link('index', 'Logout', array('class' => 'btn btn-danger btn-flat mt-10 mb-sm-30')) !!}
            
              </div>
            </div>



<div class="col-xs-12 col-sm-8 col-md-8">
              <form name="editprofile-form" method="post">
                <div class="icon-box mb-0 p-0">
                  <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                    <i class="fa fa-user"></i>
                  </a>
                  <h4 class="text-gray pt-10 mt-0 mb-30">Edit Profile</h4>
                </div>
                <hr>
                <p class="text-gray">Type your update</p>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Name</label>
                    <input name="form_name" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input name="form_email" class="form-control" type="email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Date of Birth</label>
                    <input name="form_dob" class="form-control" type="email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Address</label>
                    <textarea name="form_address" class="form-control" cols="20" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-dark btn-lg mt-15" type="submit">Update</button>
                </div>
              </form>
              
              <hr class="mt-70 mb-70">

              <form name="editprofile-form" method="post">
                <div class="icon-box mb-0 p-0">
                  <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                    <i class="fa fa-key"></i>
                  </a>
                  <h4 class="text-gray pt-10 mt-0 mb-30">Change Password</h4>
                </div>
                <hr>
                <p class="text-gray">Update your password</p>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Choose Password</label>
                    <input name="form_choose_password" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Re-enter Password</label>
                    <input name="form_re_enter_password"  class="form-control" type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Old Password</label>
                    <input name="form_old_password" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-dark btn-lg mt-15" type="submit">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection