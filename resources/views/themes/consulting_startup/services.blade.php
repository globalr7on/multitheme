@extends('themes.consulting_startup.layout.app', ['activePage' => 'services'])

@section('content')
  <!-- START HEADER IMAGE -->
  <div class="header1_img">
      <div class="overlay">
          <div class="header_tittle">
              <p class="header_tittle1">Our Services</p>
              <p class="header_tittle2">Lorem ipsum dolor sit amet, consectetur elit.</p>
          </div>
      </div>
  </div>
  <!-- END HEADER IMAGE -->

  <!-- START COUNTER SECTION -->
  <section id="counters" class="counters padding-down">
      <div class="container">
          <div class="row wow fadeInUp" data-wow-delay="700ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
              <div class="counter-heading">
                  <p class="colored_heading">Don't take our words</p>
                  <h1 class="heading_mainc margin_heading">Corex Experience in Numbers</h1>
                  <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim veniam,laboris nisi
                      in voluptate velit esse cillum.</p>
              </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
              <!-- Counter-1 -->
              <div class="col-12 col-md-4 col-lg-4">
                  <div class="wrapper">
                      <div class="counter">
                          <i class="las la-smile counter_icon"></i>
                          <span class="timer count-title count-number" data-to="4500" data-speed="1000"></span> <i class="las la-plus counter_plus"></i>
                      </div>
                      <p class="count-text">Satisfied Customers</p>
                  </div>
              </div>
              <!-- Counter-2 -->
              <div class="col-12 col-md-4 col-lg-4">
                  <div class="wrapper">
                      <div class="counter">
                          <i class="las la-mail-bulk counter_icon"></i>
                          <span class="timer count-title count-number" data-to="1000" data-speed="500"></span> <i class="las la-plus counter_plus"></i>
                      </div>
                      <p class="count-text ">Projects Completed</p>
                  </div>
              </div>
              <!-- Counter-3 -->
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

  <!-- START DETAIL SECTION -->
  <div id="detail_process" class="detail_process">
      <!-- First Row -->
      <div class="row no-gutters">
          <div class="col-sm-12 col-lg-6 overflow-hidden">
              <div class="process_image figure wow slideInLeft" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInLeft;">
                  <img src="{{ asset('themes/consulting_startup/img/services/process3.jpg') }}" alt="process image">
              </div>
          </div>
          <div class="col-sm-12 col-lg-6 margin-col">
              <div class="process_text wow slideInRight" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInRight;">
                  <p class="colored_heading">Our Services</p>
                  <h1 class="main_heading margin_heading heading_font_sm width">Planning & Strategy of Investment</h1>
                  <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim veniam, quis nostrud elit, sed do eiusmod tempor incididunt ut.</p>
              </div>
          </div>
      </div>
      <!-- Second Row -->
      <div class="row no-gutters">
          <div class="col-sm-12 col-lg-6 order-lg-2 overflow-hidden">
              <div class="process_image figure wow slideInRight" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInRight;">
                  <img src="{{ asset('themes/consulting_startup/img/services/process1.jpg') }}" alt="process image">
              </div>
          </div>
          <div class="col-sm-12 col-lg-6 order-lg-1 margin-col">
              <div class="process_text wow slideInLeft" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInLeft;">
                  <p class="colored_heading">Our Services</p>
                  <h1 class="main_heading margin_heading heading_font_sm width">Offering Business Opportunities</h1>
                  <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim veniam, quis nostrud elit, sed do eiusmod tempor incididunt ut.</p>
              </div>
          </div>
      </div>
      <!-- Third Row -->
      <div class="row no-gutters">
          <div class="col-sm-12 col-lg-6 overflow-hidden">
              <div class="process_image figure wow slideInLeft" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInLeft;">
                  <img src="{{ asset('themes/consulting_startup/img/services/process2.jpg') }}" alt="process image">
              </div>
          </div>
          <div class="col-sm-12 col-lg-6 margin-col">
              <div class="process_text wow slideInRight" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInRight;">
                  <p class="colored_heading">Our Services</p>
                  <h1 class="main_heading margin_heading heading_font_sm width">Digital Advisory & Consultation </h1>
                  <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim veniam, quis nostrud elit, sed do eiusmod tempor incididunt ut.</p>
              </div>
          </div>
      </div>
      <!-- Fourth Row -->
      <div class="row no-gutters">
          <div class="col-sm-12 col-lg-6 order-lg-2 overflow-hidden">
              <div class="process_image figure wow slideInRight" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInRight;">
                  <img src="{{ asset('themes/consulting_startup/img/services/process4.jpg') }}" alt="process image">
              </div>
          </div>
          <div class="col-sm-12 col-lg-6 order-lg-1 margin-col">
              <div class="process_text wow slideInLeft" data-wow-delay="900ms" data-wow-duration="0.8s" style="visibility: visible; animation-delay: 700ms; animation-name: slideInLeft;">
                  <p class="colored_heading">Our Services</p>
                  <h1 class="main_heading margin_heading heading_font_sm width">Business Planning & Consultion</h1>
                  <p class="info info_width">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim veniam, quis nostrud elit, sed do eiusmod tempor incididunt ut.</p>
              </div>
          </div>
      </div>
  </div>
  <!-- END DETAIL SECTION -->

  <!-- START CONTACT SECTION -->
  <section id="contact" class="padding-top">
      <div class="container">
          <div class="row">
              <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1.3s" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
                  <div class="contact_text">
                      <p class="colored_heading">Let's Get Started</p>
                      <h1 class="heading margin_heading heading_font_sm">Want To Collaborate?</h1>
                      <p class="info info_width contact_margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                      <a href="/consulting_startup/contact" class="btn btn-large btn-primary margin_button">Start Now</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END CONTACT SECTION -->

  <!-- START MAP SECTION -->
  <div id="map" class="map padding-up">
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