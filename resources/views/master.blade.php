<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Automated Accommodation | Admin Panel" />
<meta name="keywords" content="sell, buy, rent" />
<meta name="author" content="Automated Accommodation" />

<!-- Page Title -->
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
{!! Html::style('autoacco/css/colors/theme-skin-color-set-1.css')!!}

<!-- external javascripts -->
{!! Html::script('autoacco/js/jquery-2.2.4.min.js' )!!}
{!! Html::script('autoacco/js/jquery-ui.min.js' )!!}
{!! Html::script('autoacco/js/bootstrap.min.js' )!!}

{!! Html::script('autoacco/js/jquery-plugin-collection.js' )!!}

<!-- Revolution Slider 5.x SCRIPTS -->
{!! Html::script('autoacco/js/revolution-slider/js/jquery.themepunch.tools.min.js' )!!}
{!! Html::script('autoacco/js/revolution-slider/js/jquery.themepunch.revolution.min.js' )!!}


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
<![endif]-->
</head>
<body class="vertical-nav">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header id="header" class="header layer-overlay overlay-dark-1" data-bg-img="autoacco/images/admin.jpg">
    <div class="header-nav">
      <div class="header-nav-wrapper">
        <div class="container-fluid p-0">
          <div id="menuzord-verticalnav" class="menuzord">
            <a class="menuzord-brand p-30" href="javascript:void(0)"><img width="100" alt="logo"  src="autoacco/images/logo.jpg">Automated Accommodation</a>
           <ul class="menuzord-menu">
              <li><a href="admin-profile.php">Home</a></li>



              <li><a href="#">About US</a>
                <ul class="dropdown">
                  <li><a href="#">AAAA</a></li>
                  <li><a href="#">AAAAA</a></li>
                  <li><a href="#">AAAAAAAAA</a>
                    <ul class="dropdown">
                      <li><a href="#">EAAAA</a></li>
                      <li><a href="#">AAAAAA</a></li>
                    </ul>
                  </li>
                  <li><a href="#">AAAAAAAAAAAAAA</a>
                    <ul class="dropdown">
                      <li><a href="#">AAAAAAAAA</a></li>
                      <li><a href="#">AAAAAAAAAA</a></li>
                      <li><a href="#">AAAAAAAAAAA</a></li>
                    </ul>
                  </li>
                  <li><a href="#">AAAAAAAAAAAAA</a></li>

                  <li><a href="#">AAAAAAAAAAAAA</a>
                    <ul class="dropdown">
                      <li><a href="#">AAAAAAAAAAAAA</a></li>
                      <li><a href="#">AAAAAAAAAAAAA</a></li>
                    </ul>
                  </li>
                </ul>
              </li>



              <li><a href="#">Help Page</a>
                <ul class="dropdown">
                  <li><a href="account.php">Account</a>
                    <ul class="dropdown">
                      <li><a href="account.php">Account</a></li>
                      <li><a href="#">AAAAAAAAAA</a></li>
                    </ul>
                  </li>
                  <li><a href="all.php">All</a></li>
                  <li><a href="#">SAr</a></li>
                  <li><a href="#">OAAAA</a>
                    <ul class="dropdown">
                      <li><a href="page-pricing-style1.html">AA</a></li>
                      <li><a href="page-pricing-style2.html">AAAAAA</a>
                        <ul class="dropdown">
                          <li><a href="#">AAAAAAAAA</a></li>
                          <li><a href="#">AAAAAAA</a></li>
                        </ul>
                      </li>
                      <li><a href="#">AAAAAAAAAA</a></li>
                      <li><a href="#">AAAAAAAAAAA</a></li>
                      <li><a href="#">AAAAAAAAAAAA</a></li>
                    </ul>
                  </li>
                  <li><a href="page-calendar1.html">Calender</a></li>
                </ul>
              </li>



              <li><a href="#">Portfolio </a>
                <ul class="dropdown">
                  <li><a href="#">2017 <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Sub-menu01</a></li>
                      <li><a href="#">Sub-menu02</a></li>
                      <li><a href="#">Sub-menu03</a></li>
                      <li><a href="#">Sub-menu04</a></li>
                      <li><a href="#">Sub-menu05</a></li>
                    </ul>
                      </li>

                      <li><a href="#">2016</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub-menu01</a></li>
                      <li><a href="#">Sub-menu02</a></li>
                      <li><a href="#">Sub-menu03</a></li>
                      <li><a href="#">Sub-menu04</a></li>
                      <li><a href="#">Sub-menu05</a></li>
                    </ul>
                      </li>
                      
                </ul>
              </li>
              
                <li><a href="contact-us.php">Contact Us</a></li>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="vertical-nav-widget p-30 pt-10">
            <div class="widget no-border">
              <ul>
                <li class="font-14 mb-5"> <i class="fa fa-phone text-white mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                <li class="font-14 mb-5"> <i class="fa fa-clock-o text-white mr-5"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-white mr-5"></i> <a class="text-gray" href="#">info@aa.com</a> </li>
              </ul>      
            </div>
            <div class="widget">
              <ul class="styled-icons icon-gray icon-theme-colored icon-sm">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
            <p>Copyright &copy;2017 Automated Accommodation</p>
          </div>
        </div>
      </div>
    </div>
  </header>
@yield('content')




   <!-- Footer -->
 
  <footer id="footer" class="footer" data-bg-color="#1f1f1f">
    <div class="container pt-60 pb-40">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img style="height: 60px; width: 90px" src="autoacco/images/logo.jpg" alt="">
          <p class="font-12 mt-20 mb-20">The Admin Panel, here admin can edit their file and controll all functions</p>
          <ul class="styled-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2f2f2f">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2017 Automated Accommodation. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
{!! Html::script('autoacco/js/custom.js') !!}

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') !!}
{!! Html::script('autoacco/js/revolution-slider/js/extensions/revolution.extension.video.min.js') !!}

</body>
</html>