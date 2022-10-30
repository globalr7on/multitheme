@extends('themes.consulting_startup.layout.app', ['activePage' => 'about'])

@section('content')
  <!-- START HEADER IMAGE -->
  <div class="header8_img background-cover">
    <div class="overlay">
      <div class="header_tittle">
        <p class="header_tittle1">About Us</p>
        <p class="header_tittle2">Lorem ipsum dolor sit amet, consectetur elit.</p>
      </div>
    </div>
  </div>
  <!-- END HEADER IMAGE -->

  <!-- START ABOUT SECTION -->
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <!-- About Image -->
        <div class=" col-sm-12 col-md-6 col-lg-6 img-sc">
          <div class="blue_rectangle"></div>
          <div class="about_img margin_aboutimg">
            <img src="{{ asset('themes/consulting_startup/img/about/about_logo1.jpg') }}" alt="ABOUT Image">
          </div>
        </div>
        <!-- About Detail -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="about-heading">
            <p class="colored_heading wow fadeInUp" data-wow-delay="400ms" data-wow-duration="0.5s" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Information about us</p>
            <h1 class="heading margin_heading wow fadeInUp" data-wow-delay="600ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Our Business Story</h1>
            <p class="info  wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.3s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation ullamco laboris nisi
            in voluptate velit esse cillum.<span class="mt-3">
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <a href="#information_about" class="btn btn-large btn-primary margin_button scroll wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT SECTION -->

  <!-- START SERVICES SECTION -->
  <section id="services" class="services">
    <div class="container">
      <div class="row no-gutters">
        <!-- First Service -->
        <div class="col-12 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
          <div class="cover">
            <div class="card numbering"><i class="lab la-cloudversify"></i></div>
            <div class="card-body">
              <h5 class="card-title">Unique Ideas</h5>
              <p class="card-text info">sed diam nonummy nibh euismod laoreeadipiscing elit  Excepteur sint occaecat cupidatat non proident, sunt in culpa diam.</p>
            </div>
          </div>
        </div>

        <!-- Second Service -->
        <div class="col-12 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
          <div class="cover">
            <div class="card numbering"><i class="las la-user-shield"></i></div>
            <div class="card-body">
              <h5 class="card-title">Customer Support</h5>
              <p class="card-text info">sed diam nonummy nibh euismod laoreeadipiscing elit  Excepteur sint occaecat cupidatat non proident, sunt in culpa diam.</p>
            </div>
          </div>
        </div>

        <!-- Third Service -->
        <div class="col-12 col-md-4 col-lg-4  wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 400ms; animation-name:fadeInRight;">
          <div class="cover">
            <div class="card numbering"><i class="las la-tools"></i></div>
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

  <!-- START ABOUT DETAIL SECTION -->
  <section id="information_about" class="information_about pt-0">
    <div class="container">
      <div class="row">
        <!-- About Detail -->
        <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1 order-lg-1 mt-5 mt-md-0 mt-lg-0 d-flex justify-content-center align-items-center wow fadeInLeft" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInLeft;">
          <div class="about_descp">
            <p class="colored_heading">Information about us</p>
            <h1 class="heading margin_heading">What We Do</h1>
            <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation ullamco laboris nisi in voluptate velit esse cillum.<span class="mt-3"> dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <a href="#" class="btn btn-large btn-primary margin_button scroll wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">Read More</a>
          </div>
        </div>

        <!-- About Image -->
        <div class="col-12 col-md-6 col-lg-6 order-1 order-md-2 order-lg-2 img-sc1  wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInRight;">
          <div class="blue_rectangle blue-right right-0"></div>
          <div class="about_img">
            <img src="{{ asset('themes/consulting_startup/img/about/about_logo1.jpg') }}" alt="ABOUT Image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT DETAIL SECTION -->

  <!-- START TEAM SECTION -->
  <section id="team" class="team pt-0">
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
            <p class="info infot_margin">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons">
                <i class="lab la-facebook-f"></i>
                <i class="lab la-google"></i>
                <i class="lab la-linkedin-in"></i>
              </span>
            </p>
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
            <p class="info infot_margin">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons">
                <i class="lab la-facebook-f"></i>
                <i class="lab la-google"></i>
                <i class="lab la-linkedin-in"></i>
              </span>
            </p>
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
            <p class="info infot_margin">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons">
                <i class="lab la-facebook-f"></i>
                <i class="lab la-google"></i>
                <i class="lab la-linkedin-in"></i>
              </span>
            </p>
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
            <p class="info infot_margin">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt until laoreet.<br>
              <span class="team-icons">
                <i class="lab la-facebook-f"></i>
                <i class="lab la-google"></i>
                <i class="lab la-linkedin-in"></i>
              </span>
            </p>
            <div class="testimonial_img">
              <img src="{{ asset('themes/consulting_startup/img/testimonial2.jpg') }}" alt="testimonial picture">
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

  <!-- START SECTION CLIENTS -->
  <section id="testimonial-sec" class="bg-testimonial">
    <div class="testimonial-sec">
      <div class="overlay-test"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center testimonial-heading">
            <p class="colored_heading">Let's Get Started</p>
            <h1 class="heading_mainc white_text margin_heading">Client Reviews</h1>
            <span class="fly-line"></span>
          </div>
        </div>

        <div class="testimonial-card owl-carousel owl-theme">
          <!-- Item 1 -->
          <div class="item text-center">
            <div class="testimonial-review">
              <div class="review-detail">
                <p class="white_text info">Lorem ipsum is simply dummy text of the printing and type setting. Lorem Ipsum has been the industry’s is dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                <div class="client-info media-body">
                  <h5 class="client-name mt-0">- JOE MARTIN -</h5>
                  <p class="client-designation">Senior Developer</p>
                </div>
                <ul class="test-review m-0">
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="item text-center">
            <div class="testimonial-review">
              <div class="review-detail">
                <p class="white_text info">Lorem ipsum is simply dummy text of the printing and type setting. Lorem Ipsum has been the industry’s is dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                <div class="client-info media-body">
                  <h5 class="client-name mt-0">- JOE MARTIN -</h5>
                  <p class="client-designation">Senior Developer</p>
                </div>
                <ul class="test-review m-0">
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="item text-center">
            <div class="testimonial-review">
              <div class="review-detail">
                <p class="white_text info">Lorem ipsum is simply dummy text of the printing and type setting. Lorem Ipsum has been the industry’s is dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                <div class="client-info media-body">
                  <h5 class="client-name mt-0">- JOE MARTIN -</h5>
                  <p class="client-designation">Senior Developer</p>
                </div>
                <ul class="test-review m-0">
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                  <li><a href="#"><i class="las la-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION CLIENTS -->

  <!-- START CONTACT SECTION -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1.3s" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
          <div class="contact_text">
            <p class="colored_heading">Let's Get Started</p>
            <h1 class="heading margin_heading heading_font_sm">Want To Collaborate?</h1>
            <p class="info info_width contact_margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
            <a href="/consulting_startup/contact" class="btn btn-large btn-primary margin_button">Start Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END CONTACT SECTION -->

  <!-- START MAP SECTION -->
  <div id="map" class="map padding-down padding-up">
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
  <!-- END MAP SECTION -->
@endsection