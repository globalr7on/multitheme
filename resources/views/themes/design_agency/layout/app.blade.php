<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative Startup, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Design Agency | MegaOne HTML5 Template</title>
     <!-- Favicon -->
    <link href="" rel="icon">
    <!-- Bundle -->
    <link href="{{ asset('themes/design_agency/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/line-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/revolution-settings.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/jquery.fancybox.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/cubeportfolio.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/LineIcons.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/slick.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/slick-theme.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/wow.css') }}" >
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/blog.css') }}" >
    <link rel="stylesheet" href="{{ asset('themes/design_agency/css/style.css') }}" >
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">
@include('themes.design_agency.layout.header')

@yield('content')

@include('themes.design_agency.layout.footer')


<!--Animated Cursor-->
<div class="aimated-cursor">
    <div class="cursor">
        <div class="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<!-- JavaScript -->
<script src="{{ asset('themes/design_agency/js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('themes/design_agency/js/jquery.appear.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/parallaxie.min.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/wow.min.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/jquery.cubeportfolio.min.js') }}"></script>

<!--Tilt Js-->
<script src="{{ asset('themes/design_agency/js/TweenMax.min.js') }}"></script>
<!-- custom script-->
<script src="{{ asset('themes/design_agency/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/contact_us.js') }}"></script>
<script src="{{ asset('themes/design_agency/js/script.js') }}"></script>

</body>
</html>

