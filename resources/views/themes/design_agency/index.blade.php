@extends('themes.design_agency.layout.app')

@section('content')

<!--Banner start-->
<section class="banner-slider position-relative cursor-light height-60 secondary-pages-banner" id="banner-slider">
    <div class="row banner-slider-row no-gutters height-60">
        <div class="col-12 bg-blue banner-left-area d-flex justify-content-center align-items-center">
            <div class="left-banner">
                <div class="container">
                    <div class="detail-text">
                        <div class="inner-content position-relative text-center"  data-depth="0.05">
                            <h4 class="heading">Standalone<span>Content</span></h4>
                            <div class="main-ring"><div class="slider-ring"></div></div>
                        </div>
                    </div>
                </div>
                <div class="slider-object1 no-animation"><img src="{{ asset('themes/design_agency/img/slider-object1.png') }}"></div>
                <div class="slider-object2 no-animation"><img src="{{ asset('themes/design_agency/img/slider-object2.png') }}"></div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content padding-top padding-bottom">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                    <p class="sub-heading text-center">Most flexible one page</p>
                                    <h1 class="heading">Section Title</h1>
                                    <p class="para_text m-auto">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--content-->
                        <div class="standalone-area">
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{ asset('themes/design_agency/img/gallery-thumb1.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1">Standalone Heading</h2>
                                            <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{ asset('themes/design_agency/img/gallery-thumb5.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center color-yellow">Most flexible one page</p>
                                            <h2 class="gradient-text1">Standalone Heading</h2>
                                            <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{ asset('themes/design_agency/img/gallery-thumb4.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">Most flexible one page</p>
                                            <h2 class="gradient-text1">Standalone Heading</h2>
                                            <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--content-->
                        </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->
@endsection

