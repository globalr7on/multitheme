<!-- Preloader -->
<div class="preloader">
    <div class="dot-container">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
            </filter>
        </defs>
    </svg>
</div>
<!-- Preloader End -->
<!--Header Start-->
<header id="home" class="cursor-light">

    <div class="inner-header nav-icon no-shadow">
        <!--toggle btn-->

        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <a class="navbar-brand link" href="/design_agency/standalone">
            <img src="{{ asset('themes/design_agency/img/logo-white-small.png') }}" class="logo" alt="logo">
        </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a href="/standalone" class="navbar-brand"><img src="{{ asset('themes/design_agency/img/logo-white.png') }}" alt="logo"></a>
                </div>
                <div class="col-12 col-lg-8">
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="design_agency#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="design_agency#feature-sec">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="design_agency#portfolio-sec">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="design_agency#pricing-sec">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="design_agency#contact-sec">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-center">
                    <div class="side-footer text-white w-100">
                        <div class="menu-company-details">
                            <span>+1 631 123 4567</span>
                            <span>email@website.com</span>
                        </div>
                        <ul class="social-icons-simple">
                            <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                            <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                        <p class="text-white">&copy; 2020 MegaOne. Made With Love by Themesindustry</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
<!--Header End-->