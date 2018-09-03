@extends('layout')
@section('title', 'Automated Accommodation || Home Page')

@section('content')

 
 <!-- Start main-content -->
  <div class="main-content"> 
   
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="autoacco/Images/slider1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="autoacco/Images/slider1.jpg"  alt=""  data-bgposition="center 10%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['45']"
                  data-lineheight="['110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:650;">Automated Accomodation
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['31']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Trusted resource for home seeker 
                </div>
				
				 <!-- LAYER NR. 3.1 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35']"
                  data-fontsize="['20']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:100;">Discover Your Perfect Home with the most complete
																								<br /> source of homes for sale near you.
                </div>

                <!-- LAYER NR. 3.2 -->
				<!--
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"
                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We save home seekers time by showing <br> the best home based on their choice.
                </div> -->

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a> 
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="autoacco/Images/slider2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="autoacco/Images/slider2.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">The True Condominium
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['40']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">Automated Accomodation
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provide unsurpassed information, tools and professional <br />
																								expertise across a family of websites and mobile experiences for 
																								consumers through all stages of the home journey.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" style="background-color:#002E5B" href="#">Read More</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="autoacco/Images/slider3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="autoacco/Images/slider3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['40']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Automated Accomodation
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:300;">Sell Your Property In Best rate.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:110;">
																				We provide a complete online property management solution, packed<br>
																		        with value-adding features to help you
																				run your property with ease.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">View Details</a> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
      
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
              sliderType:"standard",
              jsFileLocation: "js/revolution-slider/js/",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "gyges",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      }
                  },
                    bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [620, 768, 960, 720],
              lazyType: "none",
              parallax:"mouse",
              parallaxBgFreeze:"off",
              parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>


    <!-- Section: home-boxes -->
    <section class="">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row" data-margin-top="-70px">
            <div class="col-sm-12 col-md-4">
              <div class="card effect__hover">
                <div class="card__front border-3px bg-lighter">
                    <div class="card__text">
                      <div class="display-table-parent">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <div class="icon-box mb-0">
                              <a href="#" class="icon mb-0">
                                <i class="text-theme-colored pe-7s-users font-72"></i>
                              </a>
                              <h3 class="icon-box-title text-theme-colored">High quality properties</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                <div class="card__back" data-bg-color="#202c45">
                  <div class="card__text">
                    <div class="display-table-parent p-30">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <h3 class="text-theme-color-2">High quality properties</h3>
                            <p class="text-gray-lightgray" style="text-align:justify; text-justify:inter-word">It's sure that the listings are submitted by
															reputable individuals and companies.There is no reason to worry about fraud,
															as we keep a close eye on each
															transaction made through our website. Those who are looking for the perfect investment, 
															or their dream home, can be sure that they will find it on our website.</p>
                            <a href="#" class="btn btn-default mt-10"> Read More </a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div><!-- /flip-box -->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="card effect__hover">
                <div class="card__front border-3px bg-lighter" >
                    <div class="card__text">
                      <div class="display-table-parent">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <div class="icon-box mb-0">
                              <a href="#" class="icon mb-0">
                                <i class="text-theme-colored pe-7s-note2 font-72"></i>
                              </a>
                              <h3 class="icon-box-title text-theme-colored">Buy & Rent</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                <div class="card__back" data-bg-color="#202c45">
                  <div class="card__text">
                    <div class="display-table-parent p-30">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <h3 class="text-theme-color-2">Buy & Rent</h3>
                            <p class="text-gray-lightgray" style="text-align:justify; text-justify:inter-word">Automated Accomodation is the country's best online property finder, providing customers with
															a wide selection of apartments, houses, and commercial properties for sale and for rent. 
															Individual sellers can also sell their properties in a secure way.</p>
                            <a href="#" class="btn btn-default mt-10"> Read More </a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div><!-- /flip-box -->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="card effect__hover">
                <div class="card__front border-3px bg-lighter" >
                    <div class="card__text">
                      <div class="display-table-parent">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <div class="icon-box mb-0">
                              <a href="#" class="icon mb-0">
                                <i class="text-theme-colored pe-7s-phone font-72"></i>
                              </a>
                              <h3 class="icon-box-title text-theme-colored">Access anywhere, anytime </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                <div class="card__back" data-bg-color="#202c45">
                  <div class="card__text">
                    <div class="display-table-parent p-30">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <h3 class="text-theme-color-2">Access anywhere, anytime</h3>
                            <p class="text-gray-lightgray" style="text-align:justify; text-justify:inter-word">Forget being tied to your front desk waiting for bookings to come in.
														   Log into our cloud-based accommodation management system
														   from anywhere at any time using your mobile, tablet or desktop and search easily by GPS service.</p>
                            <a href="#" class="btn btn-default mt-10"> Read More </a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div><!-- /flip-box -->
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- Section: About -->
  <div id = ab>
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
            
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1" >About</h2>
			  
              
			  <p style="text-align:justify; text-justify:inter-word" >
					Automated Accomodation is the trusted resource for home buyers, sellers, renters and dreamers
					offering the most comprehensive source for-sale properties. We provide enough
					information, tools and professional expertise to help people move confidently through 
					every step of their home journey. We reduce people's tension and trouble by providing 
					enough information to find a advantageous place to stay or make comfortable workplace.</p>
            
              {!! Html::link('about', 'Know More', array('class' => 'btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30')) !!}
            </div>
			
			<div class="col-md-1">
			</div>
			
            <div class="col-md-6">
              
              

                  <img alt="" src="autoacco/Images/Search-for-Homes.jpg" class="img-responsive img-fullwidth">
               
              </div>
            </div>
          </div>
        </div>
    
    </section>
	</div>

    <!-- Section: Most rated Accommodation -->
    <section class="bg-lighter">
      <div class="container pb-60">
        <div class="section-title mb-10">
        <div class="row">
          <div class="col-md-8">
            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Most Rated<span class="text-theme-color-2 font-weight-400"> Accommodation</span></h2>
         </div>
        </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-4col" data-dots="true">
                <div class="item ">
                  <div class="service-block bg-white">
                    <div class="thumb"> <img alt="featured project" src="autoacco/Images/rated_flat1.jpg" class="img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">20,000BDT</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Medium Size Flat for Rent</h4>
                      <p style="text-align:justify; text-justify:inter-word">There are two medium size bedroom, three bath and one small dining space.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="autoacco/Images/rated_flat2.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">15,000BDT</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Small Flat for Rent</h4>
                      <p style="text-align:justify; text-justify:inter-word">There are two small size bedroom, two bath and one small open space.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                   </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="autoacco/Images/rated_flat3.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">1,50,00,000BDT</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Duplex House for Sale</h4>
                      <p style="text-align:justify; text-justify:inter-word">There are two medium size bedroom and two bath in the upper floor. At ground floor there are a 
					  medium space gor drawing and dining with one washroom</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                   </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="autoacco/Images/rated_flat4.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">2,00,00,000BDT</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Luxurious Appartment for sale</h4>
                      <p style="text-align:justify; text-justify:inter-word">There are one big attractive space for drawing room, one small dining space, three bedroom, four bathroom. </p>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="autoacco/Images/rated_flat5.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">60,000</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
              
                      <h4 class="line-bottom mb-10">Luxurious Appartment for sale</h4>
                      <p style="text-align:justify; text-justify:inter-word">There are one big attractive space for drawing room, one small dining space,
					  three bedroom, four bathroom.</p>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="https://www.hdwallpapers.in/walls/green_bubbles-wide.jpg" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="1000" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">We have 1000 happy users.</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">675 peoples commented about the project.</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">248 people have sold their property by using our product.</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">we've got 24 rewarded.</h5>
            </div>
          </div>
        </div>
      </div>
    </section>




<!-- Section: Gallery -->
    <section id="gallery" class="bg-lighter">
     <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Most Viewed<span class="text-theme-color-2 font-weight-400"> Accommodation</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Works Filter -->
              <div class="portfolio-filter font-alt align-center">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#select1" class="" data-filter=".select1">Flat</a>
                <a href="#select2" class="" data-filter=".select2">Office</a>
                <a href="#select3" class="" data-filter=".select3">open space</a>
              </div>
              <!-- End Works Filter -->
              
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
               
                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/Flat1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/1.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/Flat2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/2.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/2.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/office1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/3.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/3.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/openspace1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/4.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/4.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/Flat3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/5.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/5.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/openspace2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/6.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/6.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/office2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/7.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/7.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/openspace3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/8.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/8.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/Flat4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/9.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/9.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/office3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/10.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/10.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/Flat5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/11.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/11.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="autoacco/Images/openspace4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="autoacco/images/gallery/12.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="autoacco/images/gallery/12.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div >
    </section>


<!-- Divider: testimonials -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="http://estateimagery.com.au/wp-content/uploads/2012/11/19-21-Caruana-Dr_17_web1.jpg">
      <div class="container pb-50">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0 text-gray-lightgray">Said About Us</h5>
              <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Testimonials<span class="font-30 text-theme-color-2">.</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-10">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img style="height: 100px; width: 100px" class="img-circle" alt="" src="autoacco/Images/test01.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">This is very good site and helps to solve all problems about Accommodation</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Bill Gates</span> <small><em class="text-gray-lightgray">CEO, Microsoft</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img style="height: 100px; width: 100px" class="img-circle" alt="" src="autoacco/Images/test02.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">very good in all accoommodation purpose</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Jeff Bezos</span> <small><em class="text-gray-lightgray">CEO, Amazon</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img style="height: 100px; width: 100px" class="img-circle" alt="" src="autoacco/Images/test03.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">Very good at social service with accommodation</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Carlos slim helu</span> <small><em class="text-gray-lightgray">CEO, Pinrest</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img style="height: 100px; width: 100px" class="img-circle" alt="" src="autoacco/Images/test04.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">Very good in all services</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Warren Buffett</span> <small><em class="text-gray-lightgray">CEO, Warren Buffett & Co.</em></small></p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>


<!-- Section: blog -->
    <section id="blog" class="bg-lighter">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span class="text-theme-color-2 font-weight-400">News</span></h2>
           </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img style="height: 225px; width: 330px;" src="autoacco/Images/20.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">20% Discount.</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">20% discount for regular customer till the 31st night.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img style="height: 225px; width: 330px;" src="autoacco/Images/10.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Offer For Monthly Users.</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">10% discount for Monthly Users till the 31st night.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img style="height: 225px; width: 330px;" src="autoacco/Images/5.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Discount for Weekly Users.</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">5% discount for weekly Users till the 31st night.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            
          </div>
        </div>
      </div>
    </section>


<!-- Divider: Clients -->
    <section class="clients bg-theme-color-2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="autoacco/Images/Flat3.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/Flat4.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat1.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat2.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat3.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat4.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat5.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/rated_flat6.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/Flat1.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="autoacco/Images/Flat2.jpg" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>

@endsection