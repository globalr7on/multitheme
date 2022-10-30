@extends('themes.consulting_startup.layout.app', ['activePage' => 'contact'])

@section('content')
<div class="overflow-hidden">

<!-- START HEADER IMAGE -->
<div class="header7_img">
    <div class="overlay">
        <div class="header_tittle">
            <p class="header_tittle1">Contact Us</p>
            <p class="header_tittle2">Lorem ipsum dolor sit amet, consectetur elit.</p>
        </div>
    </div>
</div>
<!-- END HEADER IMAGE -->

<!-- START CONTACT INFO -->
<section id="information_process" class="information_process">
    <div class="container">
        <div class="row">
            <!-- Contact Detail -->
            <div class="col-12 col-md-6 col-lg-6 order-1 order-md-1 order-lg-1 margin_form wow fadeInLeft" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInLeft;">
                <p class="colored_heading">Need to talk</p>
                <h1 class="heading_mainc margin_heading"> Let's Get In Touch</h1>
                <ul class="contact-list">
                    <li>123 Street New York City , United States Of America.</li>
                    <li>Office Telephone : 001 01085379709</li>
                    <li>Mobile : 001 63165370895 Email :<a href="#"> admin@website.com</a></li>
                    <li>Inquiries :<a href="#"> email@website.com</a></li>
                    <li>Mon-Fri: 9am to 6pm</li>
                </ul>
            </div>
            <!-- Contact Image -->
            <div class="col-12 col-md-6 col-lg-6 order-2 order-md-2 order-lg-2 img-sc1  wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1s" style="visibility: visible; animation-delay: 700ms; animation-name:fadeInRight;">
                <div class="blue_rectangle right-0 blue-right"></div>
                <div class="about_img">
                    <img src="{{ asset('themes/consulting_startup/img/contact_img.jpg') }}" alt="About Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT INFO -->

<!-- START CONTACT FORM -->
<section id="contact_form" class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 order-2 order-lg-1 pt-4 information_process">
             <p class="colored_heading">Contact Form</p>
                <h1 class="heading_mainc margin_heading">Have any question?</h1>
                <!-- Form -->
                <form id="contact-form-data">
                    <div class="row mt-5">
                        <div class="col-12" id="result"></div>
                        <!-- Name -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name" required  name="userName">
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" required  name="userEmail">
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="col-lg-4">
                            <div class="form-group ">
                                <input class="form-control" type="text" placeholder="Subject" name="userSubject">
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="col-12">
                            <div class="form-group ">
                                <textarea class="form-control" placeholder="Message" required rows="5" name="userMessage"></textarea>
                            </div>
                            <button type="button" class="btn btn-large btn-primary padding_button w-100 contact_btn">SUBMIT REQUEST</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT FORM -->

<!-- START MAP SECTION -->
<div id="map" class=" map">
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