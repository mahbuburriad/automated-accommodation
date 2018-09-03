<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Automated Accommodation | Life Makes Esier" />
<meta name="keywords" content="home, flat, office" />
<meta name="author" content="Automated Accommodation" />

<title>@yield('title')</title> 


<!-- Favicon and Touch Icons -->
<link href="autoacco/images/favicon.jpg" rel="shortcut icon" type="image/png">
<link href="autoacco/images/apple-touch-icon.jpg" rel="apple-touch-icon">
<link href="autoacco/images/apple-touch-icon-72x72.jpg" rel="apple-touch-icon" sizes="72x72">
<link href="autoacco/images/apple-touch-icon-114x114.jpg" rel="apple-touch-icon" sizes="114x114">
<link href="autoacco/images/apple-touch-icon-144x144.jpg" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
{!! Html::style('autoacco/css/bootstrap.min.css')!!}
{!! Html::style('autoacco/css/jquery-ui.min.css')!!}
{!! Html::style('autoacco/css/animate.css')!!}
{!! Html::style('autoacco/css/css-plugin-collections.css')!!}
<!-- CSS | menuzord megamenu skins
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/> -->
<!-- CSS | Main style file -->
{!! Html::style('autoacco/css/style-main.css')!!}
<!-- CSS | Preloader Styles -->
{!! Html::style('autoacco/css/preloader.css')!!}
<!-- CSS | Custom Margin Padding Collection -->
{!! Html::style('autoacco/css/custom-bootstrap-margin-padding.css')!!}
<!-- CSS | Responsive media queries -->
{!! Html::style('autoacco/css/responsive.css')!!}

{!! Html::style('autoacco/js/revolution-slider/css/settings.css') !!}
{!! Html::style('autoacco/js/revolution-slider/css/layers.css') !!}
{!! Html::style('autoacco/js/revolution-slider/css/navigation.css') !!}


<!-- CSS | Theme Color -->
{!! Html::style('autoacco/css/colors/theme-skin-color-set-2.css')!!}

<!-- external javascripts -->
{!! Html::script('autoacco/js/jquery-2.2.4.min.js' )!!}
{!! Html::script('autoacco/js/jquery-ui.min.js' )!!}
{!! Html::script('autoacco/js/bootstrap.min.js' )!!}

{!! Html::script('autoacco/js/jquery-plugin-collection.js' )!!}

<!-- Revolution Slider 5.x SCRIPTS -->
{!! Html::script('autoacco/js/revolution-slider/js/jquery.themepunch.tools.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/jquery.themepunch.revolution.min.js' )!!}


</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader 
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-tube-tunnel">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> -->
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
                <li>
                  <a class="text-white" href="#">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Help Desk</a>
                </li>
                <li class="text-white">|</li>  
                @if(Auth::user())
                <li>
                 <!-- {!! Html::link('logout', 'Logout', array('class' => 'text-white')) !!}-->

                 <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST"  style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                           
                </li>
                @else
                <li>
                  {!! Html::link('login', 'Login', array('class' => 'text-white')) !!}          
                </li>
                @endif
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">  
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#" target="_blank"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="images/logo.jpg" alt="">Automated Accommodation</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                  <h5 class="font-14 m-0">8247</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                  <h5 class="font-13 text-black m-0"> Sat-Thur 9:00AM-6:00PM</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            
<ul class="menuzord-menu">
              <li>{!! Html::link('index', 'Home') !!}</li>

        
         <li>{!! Html::link('buy', 'Buy') !!}</li>
            
              <li>{!! Html::link('rent', 'Rent') !!}</li>
        
         
        <li>{!! Html::link('app_page', 'Mobile App') !!}</li>
        
           <li>{!! Html::link('pricing', 'Pricing') !!}</li>
                
             
        
           
        




              <li><a href="#">Help Page</a>
                <ul class="dropdown">
                  <li><a href="account.php">How to Use Mobile App</a></li>
          <li><a href="account.php">How to Use Website</a></li>
          <li><a href="account.php">How to Buy/Rent/Sell</a></li>
          <li>{!! Html::link('about', 'About') !!}</li>
          <li>{!! Html::link('team', 'Team') !!}</li>
          <li><a href="account.php">Faq</a></li>
         
                  
                </ul>
              </li>
        
        <li><a href="contact">Contact Us</a></li>
        
         
              <!--  <li><a href="javascript:void(0)">Mega Menu</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="#"><i class="fa fa-th-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-map-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-play-circle-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-search-plus"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-expand"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-navicon"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tablet"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-minus-square-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-binoculars"></i> Sub-menu</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                       <li><a href="#"><i class="fa fa-th-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-map-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-play-circle-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-search-plus"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-expand"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-navicon"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tablet"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-minus-square-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-binoculars"></i> Sub-menu</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="#"><i class="fa fa-th-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-map-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-play-circle-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-search-plus"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-expand"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-navicon"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tablet"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-minus-square-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-binoculars"></i> Sub-menu</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="#"><i class="fa fa-th-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-list"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-map-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-play-circle-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-search-plus"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-expand"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-navicon"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-tablet"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-minus-square-o"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Sub-menu</a></li>
                        <li><a href="#"><i class="fa fa-binoculars"></i> Sub-menu</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <li><a href="contact-us.php">Contact Us</a></li>
              </li> -->
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Join Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target=".bs-example-modal-lg" href="ajax-load/reservation-form.html">Search</a>
              <!--  <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #002e5b">
                      <button style="color: white" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 style="color: white" class="modal-title" id="myModalLabel2">Search</h4>
                    </div>
                    <div class="modal-body">
                     <form action="#" method="post">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Location</label>
                  <input type="text" placeholder="Enter Location" class="form-control">
                </div>
                <div class="form-group col-md-6">
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
              <label>Price Range</label>
              <div class="row">
                <div class="col-xs-4">
                  
    <input type="text" class="form-control" placeholder="Min Price">
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Max Price">
  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Beds</label><br />
                  <div class="form-group col-md-6">
                  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox4" value="option1"> 1
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox5" value="option2"> 2
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox6" value="option3"> 3
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox4" value="option4"> 4
</label>



</div>
                </div>
                <div class="form-group col-md-6">
                  <label>Sqr. Ft</label>
                  <div class="row">
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Minimum">
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Maximum">
  </div>
</div>
                  
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary text-white">Search Now</button>

                <button type="Reset" class="btn btn-default">Reset</button>
                      
              </div>
            </form>
                    </div>
                    
                  </div>
                </div>
                <!-- Modal: Join Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
@yield('content')

 <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="autoacco/images/footer.jpg">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo.jpg">
            <p>North South univesity</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">aa.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.aa.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
              <li><a href="page-about-style1">About Us</a></li>
              <li><a href="page-course-list">Our Programs</a></li>
              <li><a href="page-pricing-style">Gallary</a></li>
              <li><a href="page-gallery-3col">Menu</a></li>
              <li><a href="shop-category">Events</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Twitter Feed</h4>
            <div class="twitter-feed list-border clearfix" data-username="windowsinsider" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +61 3 1234 5678 <br>
              +12 3 1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn bg-theme-color-2 text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2017 AA. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

{!! Html::script('autoacco/js/custom.js' )!!}


{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.actions.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.migration.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.video.min.js' )!!}

</body>
</html>