@extends('themes.consulting_startup.layout.app', ['activePage' => 'index'])

@section('content')
  <!-- START REV SLIDER SECTION -->
  <div id="home">
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="yogaslider" data-source="gallery" style="background:transparent;padding:0;">
      <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
        <ul>
          <!-- SLIDE 1 -->
          <li data-index="rs-4" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('themes/consulting_startup/img/slider_img/thumb1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('themes/consulting_startup/img/slider_img/banner1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->
            <!-- LAYER-overlay -->
            <div class="layer-overlay"></div>
            <!-- LAYERS-overlay -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption rev-btn"
              id="slide-4-layer-2"
              data-x="['center','center','center','center']" data-hoffset="['1','1','1','1']"
              data-y="['middle','middle','middle','middle']" data-voffset="['100','100','50','0']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="button"
              data-responsive_offset="on"
              data-responsive="off"
              data-frames='[{"delay":10,"speed":3500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600ms","ease":"Power3.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:linear-gradient(to right, #5192e1 0%, #23ced5 51%, #5192e1 100%);;bs:solid;bw:0 0 0 0;br:30px 30px 30px 30px;"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[15,15,15,15]"
              data-paddingright="[38,38,38,38]"
              data-paddingbottom="[15,15,15,15]"
              data-paddingleft="[38,38,48,38]"
              style="z-index: 5; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing:0 ;font-family:'Raleway', sans-serif; background:linear-gradient(to right, #5192e1 0%, #23ced5 21%, #5192e1 100%);border-color:rgba(0,0,0,1);border-radius:50px 50px 50px 50px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"
            >
              <a class="white_text" href="javascript:void(0);">Get Started</a>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme"
              id="slide-4-layer-3"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['22','22','-35','-78']"
              data-fontsize="['24','24','24','16']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":400,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 34px; font-weight: 300; color: #ffffff; letter-spacing: 0;font-family:'Open Sans', sans-serif;"
              >
              Lorem ipsum dolor sit amet, consectetur.
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme"
              id="slide-4-layer-4"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-120','-150']"
              data-fontsize="['72','72','72','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":0,"split":"lines","splitdelay":0.05,"speed":3500,"split_direction":"forward","frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","split":"lines","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 85px; font-weight: 200; color: #ffffff; letter-spacing: 0;font-family:'Raleway', sans-serif;"
            >
              Consulting Startup
            </div>
          </li>

          <!-- SLIDE 2 -->
          <li data-index="rs-6" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('themes/consulting_startup/img/slider_img/thumb2.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('themes/consulting_startup/img/slider_img/banner-2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->
            <div class="layer-overlay"></div>
            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme"
              id="slide-6-layer-3"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['22','22','-35','-78']"
              data-fontsize="['24','24','24','16']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 5; white-space: nowrap; font-size: 24px; line-height: 34px; font-weight: 300; color: #ffffff; letter-spacing: 0;font-family:'Open Sans', sans-serif;"
            >
              Lorem ipsum dolor sit amet, consectetur.
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme"
              id="slide-6-layer-4"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-120','-150']"
              data-fontsize="['72','72','72','50']"
              data-fontweight="['300','100','100','100']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: 85px; font-weight: 200; color: #ffffff; letter-spacing: 0;font-family:'Raleway', sans-serif;"
            >
              Consult Corporate
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme"
              id="slide-6-layer-7"
              data-x="['center','center','center','center']" data-hoffset="['-130','-50','-30','-40']"
              data-y="['middle','middle','middle','middle']" data-voffset="['100','100','50','0']"
              data-width="['160','160','260','320']"
              data-height="none"
              data-whitespace="nowrap"
              data-type="button"
              data-responsive_offset="on"
              data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Linear.ease","to":"o:1;rX:0;rY:0;rZ:0;z:0;"}]'
              data-textAlign="['inherit','inherit','inherit','center']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 11; white-space: nowrap; font-size: 15px; line-height: 17px; font-weight: 300; color: #ffffff; letter-spacing: 0;font-family:'Raleway', sans-serif;"
            >
              <a href="#about" class="btn btn-slider tarns-white mr-2"> Read More</a>
              <a href="consulting_startup/contact" class="btn btn-slider gradient-blue-btn">Contact Us</a>
            </div>
          </li>

          <!-- SLIDE 3 -->
          <li data-index="rs-8" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('themes/consulting_startup/img/slider_img/thumb3.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('themes/consulting_startup/img/slider_img/banner-3.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme"
              id="slide-8-layer-3"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['22','22','-35','-78']"
              data-fontsize="['24','24','24','16']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":150,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 5; white-space: nowrap; font-size: 24px; line-height: 34px; font-weight: 300; color: #ffffff; letter-spacing: 0;font-family:'Open Sans', sans-serif;"
            >
              Lorem ipsum dolor sit amet, consectetur.
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme"
              id="slide-8-layer-4"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-120','-150']"
              data-fontsize="['72','72','72','50']"
              data-fontweight="['300','300','300','100']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text"
              data-responsive_offset="on"
              data-frames='[{"delay":10,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: 85px; font-weight: 300; color: #ffffff; letter-spacing: 0;font-family:'Raleway', sans-serif;"
            >
              Beneficial Services
            </div>

            <!-- LAYER NR. 3 -->
            <a href="#about" class="tp-caption rev-btn pagescroll "
              id="slide-8-layer-7"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['middle','middle','middle','middle']" data-voffset="['100','100','50','0']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="button"
              data-responsive_offset="on"
              data-responsive="off"
              data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"},{"frame":"hover","speed":"600ms","ease":"Power1.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:linear-gradient(to right, #5192e1 0%, #23ced5 51%, #5192e1 100%);bs:solid;bw:0 0 0 0;"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[15,15,15,15]"
              data-paddingright="[38,38,38,38]"
              data-paddingbottom="[15,15,15,15]"
              data-paddingleft="[38,38,48,38]"
              style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 17px; font-weight: 300; color: #ffffff; letter-spacing:0 ;font-family:'Raleway', sans-serif;background:linear-gradient(to right, #5192e1 0%, #23ced5 21%, #5192e1 100%);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"
            >
              Read More
            </a>
          </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
      </div>
    </div>
  </div>
  <!-- END REV SLIDER SECTION -->

  <!-- START ABOUT US SECTION -->
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class=" col-sm-12 col-md-6 col-lg-6 img-sc">
          <div class="blue_rectangle"></div>
          <div class="about_img margin_aboutimg">
            <img src="{{ asset('themes/consulting_startup/img/about/about_logo1.jpg') }}" alt="ABOUT Image">
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="about-heading">
            <p class="colored_heading wow fadeInUp" data-wow-delay="400ms" data-wow-duration="0.5s" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Information about us</p>
            <h1 class="heading margin_heading wow fadeInUp" data-wow-delay="600ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Our Business Story</h1>
            <p class="info  wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.3s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation ullamco laboris nisi
            in voluptate velit esse cillum.<span class="mt-3">
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <a href="consulting_startup/about" class="btn btn-large btn-primary margin_button  wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT US SECTION -->

  <!-- START SERVICES SECTION -->
  <section id="services" class="services pt-0">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
          <div class="cover">
            <div class="card numbering">
              <i class="lab la-cloudversify"></i>
            </div>

            <div class="card-body">
              <h5 class="card-title">Unique Ideas</h5>
              <p class="card-text info">sed diam nonummy nibh euismod laoreeadipiscing elit  Excepteur sint occaecat cupidatat non proident, sunt in culpa diam.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
          <div class="cover">
            <div class="card numbering">
              <i class="las la-user-shield"></i>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customer Support</h5>
              <p class="card-text info">sed diam nonummy nibh euismod laoreeadipiscing elit  Excepteur sint occaecat cupidatat non proident, sunt in culpa diam.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4  wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name:fadeInRight;">
          <div class="cover">
            <div class="card numbering">
              <i class="las la-tools"></i>
            </div>

            <div class="card-body">
              <h5 class="card-title">24/7 Service</h5>
              <p class="card-text info">sed diam nonummy nibh euismod laoreeadipiscing elit  Excepteur sint occaecat cupidatat non proident, sunt in culpa diam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SERVICES SECTION -->

  <!-- START GALLERY SECTION -->
  <section id="portfolio_top" class="portfolio_top py-0">
    <div class="container">
      <div class="col-sm-12 col-md-12">
        <div class="cbp-item small-screen">
          <div class="text_wrap wow fadeIn" data-wow-delay="350ms">
            <div class="portfolio-heading">
              <p class="colored_heading text_color">Watch exclusive</p>
              <h1 class="heading heading_color new_font">New Projects</h1>
              <p class="info info_margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1.5s" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
          <div id="portfolio-measonry" class="cbp border-portfolio simple_overlay">
            <div class="cbp-item itemshadow">
              <div class="padding_box">
                <figure class="snip0015">
                  <img class="padding_color" src="{{ asset('themes/consulting_startup/img/portfolio1.jpg') }}" alt="">
                  <figcaption>
                    <div class="caption_center">
                      <i class="las la-plus plus_icon"></i>
                      <h3 class="hover_heading">View Project</h3>
                      <p>Lorem ipsum dolor sit, consectetur.</p>
                    </div>
                    <a href="{{ asset('themes/consulting_startup/img/portfolio1.jpg') }}"  data-fancybox="gallery1"></a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="cbp-item large-screen">
              <div class="text_wrap wow fadeIn" data-wow-delay="350ms">
                <div class="portfolio-heading">
                  <p class="colored_heading text_color">Watch exclusive</p>
                  <h1 class="heading heading_color">New Projects</h1>
                  <p class="info info_margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>

            <div class="cbp-item itemshadow">
              <div class="padding_box">
                <figure class="snip0015">
                  <img class="padding_color" src="{{ asset('themes/consulting_startup/img/portfolio2.jpg') }}" alt="">
                  <figcaption>
                    <div class="caption_center">
                      <i class="las la-plus plus_icon"></i>
                      <h3 class="hover_heading">View Project</h3>
                      <p>Lorem ipsum dolor sit, consectetur</p>
                    </div>
                    <a href="{{ asset('themes/consulting_startup/img/portfolio2.jpg') }}"  data-fancybox="gallery1"></a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="cbp-item itemshadow">
              <div class="padding_box">
                <figure class="snip0015">
                  <img class="padding_color" src="{{ asset('themes/consulting_startup/img/portfolio3.jpg') }}" alt="">
                  <figcaption>
                    <div class="caption_center">
                      <i class="las la-plus plus_icon"></i>
                      <h3 class="hover_heading">View Project</h3>
                      <p>Lorem ipsum dolor sit, consectetur</p>
                    </div>
                    <a href="{{ asset('themes/consulting_startup/img/portfolio3.jpg') }}"  data-fancybox="gallery1"></a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="cbp-item itemshadow">
              <div class="padding_box">
                <figure class="snip0015">
                  <img class="padding_color" src="{{ asset('themes/consulting_startup/img/portfolio4.jpg') }}" alt="">
                  <figcaption>
                    <div class="caption_center">
                      <i class="las la-plus plus_icon"></i>
                      <h3 class="hover_heading">View Project</h3>
                      <p>Lorem ipsum dolor sit, consectetur</p>
                    </div>
                    <a href="{{ asset('themes/consulting_startup/img/portfolio4.jpg') }}"  data-fancybox="gallery1"></a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="cbp-item">
              <div class="cells">
                <div class="portfolio-heading1">
                  <h1 class="main_heading">We have many more</h1>
                  <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit labore et dolore magna aliqua.</p>
                  <a href="consulting_startup/projects" class="btn btn-large btn-primary">View All</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END GALLERY SECTION -->

  <!-- START COUNTER SECTION -->
  <section id="counters" class="counters padding-down">
    <div class="container">
      <div class="row wow fadeInUp" data-wow-delay="700ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
        <div class="counter-heading">
          <p class="colored_heading">Don't take our words</p>
          <h1 class="heading_mainc margin_heading">MegaOne Experience in Numbers</h1>
          <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam,laboris nisi in voluptate velit esse cillum.</p>
        </div>
      </div>

      <div class="row wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
        <!--  First Counter  -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="wrapper">
            <div class="counter">
              <i class="las la-smile counter_icon"></i>
              <span class="timer count-title count-number" data-to="4500" data-speed="1000"></span> <i class="las la-plus counter_plus"></i>
            </div>
            <p class="count-text">Satisfied Customers</p>
          </div>
        </div>

        <!--  Second Counter  -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="wrapper">
            <div class="counter">
              <i class="las la-mail-bulk counter_icon"></i>
              <span class="timer count-title count-number" data-to="1000" data-speed="500"></span> <i class="las la-plus counter_plus"></i>
            </div>
            <p class="count-text ">Projects Completed</p>
          </div>
        </div>

        <!--  Third Counter  -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="wrapper">
            <div class="counter">
              <i class="las la-user-plus counter_icon"></i>
              <span class="timer count-title count-number" data-to="300" data-speed="500"></span><i class="las la-plus counter_plus"></i>
            </div>
            <p class="count-text ">Team Experts</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END COUNTER SECTION -->

  <!-- START SUCCESS STORY SECTION -->
  <div id="sucess-story" class="success-story">
    <div class="row">
      <!--  Left Side  -->
      <div class="col-12 col-md-12 col-lg-6 order-2 order-md-2 order-lg-1 d-flex justify-content-center align-items-center wow fadeInLeft" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInLeft;">
        <div class="vedio-heading ">
          <p class="colored_heading">Don't take our words</p>
          <h1 class="main_heading margin_heading md_heading"> Watch Our Success Story</h1>
          <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation.</p>
          <div id="video">
            <a data-fancybox="" href="https://www.youtube.com/watch?v=7e90gBu4pas" class="btn btn-large btn-primary">
            <i class="fas fa-play mr-2"></i>Play Now</a>
          </div>
        </div>
      </div>

      <!--  Right Side  -->
      <div class="col-12 col-md-12 col-lg-6 order-1 order-md-1 order-lg-2  wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInRight;">
        <div class="vedio_img">
          <img src="{{ asset('themes/consulting_startup/img/sucess-story.jpg') }}" alt="Blog Image">
        </div>
      </div>
    </div>
  </div>
  <!-- END SUCCESS STORY SECTION -->

  <!-- START TEAM SECTION -->
  <section id="team" class="team padding-down">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="counter-heading">
            <p class="colored_heading">Our Team Members</p>
            <h1 class="heading_mainc margin_heading">Meet Our Experts</h1>
          </div>
        </div>
      </div>

      <div class="owl-team owl-carousel owl-theme ">
        <!-- Item 1 -->
        <div class="item">
          <div class="testimonial-box">
            <p class="info infot_margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
            <span class="team-icons"><i class="lab la-facebook-f"></i><i class="lab la-google"></i><i class="lab la-linkedin-in"></i></span></p>
            <div class="testimonial_img">
              <img src="{{ asset('themes/consulting_startup/img/testimonial1.jpg') }}" alt="testimonial picture">
            </div>
            <div class="text">
            <p class="testimonial_name">David Raleway</p>
              <p class="info blue_text">Company Owner</p>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="item">
          <div class="testimonial-box">
            <p class="info infot_margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons"><i class="lab la-facebook-f"></i><i class="lab la-google"></i><i class="lab la-linkedin-in"></i></span></p>
            <div class="testimonial_img">
              <img src="{{ asset('themes/consulting_startup/img/testimonial2.jpg') }}" alt="testimonial picture">
            </div>
            <div class="text">
              <p class="testimonial_name">Kate Marasisa</p>
              <p class="info blue_text">Marketing Head</p>
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="item">
          <div class="testimonial-box">
            <p class="info infot_margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons"><i class="lab la-facebook-f"></i><i class="lab la-google"></i><i class="lab la-linkedin-in"></i></span></p>
            <div class="testimonial_img">
              <img src="{{ asset('themes/consulting_startup/img/testimonial3.jpg') }}" alt="testimonial picture">
            </div>
            <div class="text">
              <p class="testimonial_name">Sam Hendias</p>
              <p class="info blue_text">Business Expert</p>
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="item">
          <div class="testimonial-box">
            <p class="info infot_margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons"><i class="lab la-facebook-f"></i><i class="lab la-google"></i><i class="lab la-linkedin-in"></i></span></p>
            <div class="testimonial_img">
              <img src="{{ asset('themes/consulting_startup/img/testimonial3.jpg') }}" alt="testimonial picture">
            </div>
            <div class="text">
              <p class="testimonial_name">David Raleway</p>
              <p class="info blue_text">Company Owner</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END TEAM SECTION -->

  <!-- START BLOG SECTION -->
  <div id="blog" class="blog">
    <div class="row">
      <!-- Blog Image -->
      <div class="col-sm-12 col-md-12 col-lg-6 order-sm-1">
        <div class="blog_img">
          <img src="{{ asset('themes/consulting_startup/img/blog_img2.jpg') }}" alt="Blog Image">
        </div>
      </div>

      <!-- Content -->
      <div class="col-sm-12 col-md-12 col-lg-6 order-sm-2">
        <div class="blog_text">
          <p class="colored_heading">Read Our Blog</p>
          <h1 class="main_heading margin_heading heading_font_sm">Explore Solution of Problems</h1>
          <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud elit, sed do eiusmod tempor incididunt ut.</p>
          <a href="consulting_startup/blog" class="btn btn-large btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END BLOG SECTION -->

  <!-- START CONTACT SECTION -->
  <section id="contact" class="contact padding-down">
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1.3s" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
          <div class="contact_text">
            <p class="colored_heading">Let's Get Started</p>
            <h1 class="heading margin_heading heading_font_sm">Want To Collaborate?</h1>
            <p class="info info_width contact_margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
            <a href="consulting_startup/contact" class="btn btn-large btn-primary margin_button">Start Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END CONTACT SECTION -->

  <!-- START MAP SECTION -->
  <div id="map" class="map">
    <div class="row">
      <div class="col-12">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.9674103770367!2d-111.89998968532109!3d33.31966746342612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDE5JzEwLjgiTiAxMTHCsDUzJzUyLjEiVw!5e0!3m2!1sen!2s!4v1573716071790!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAP SECTION  -->
@endsection