@extends('themes.consulting_startup.layout.app', ['activePage' => 'blog'])

@section('content')
<!-- START HEADER IMAGE -->
<div class="header5_img">
    <div class="overlay">
        <div class="header_tittle">
            <p class="header_tittle1">Our Blog</p>
            <p class="header_tittle2">Lorem ipsum dolor sit amet, consectetur elit.</p>
        </div>
    </div>
</div>
<!-- END HEADER IMAGE -->

<!-- START BLOG CONTENT -->
<div id="search" class="search">
    <div class="container">
        <div class="row pt-sm-5">
            <!-- Blog Left -->
            <div class="col-12 col-lg-4 order-2 order-md-1">
                <div class="search_outerbox">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i></button>
                    </span>
                    </div>
                </div>
                <!-- Topics -->
                <div id="topics" class="topics">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pr-0 pl-0">
                                <div class="topic_outerbox mt-4">
                                    <h2>Topics</h2>
                                    <div class="inner-box">
                                        <ul>
                                            <li><a href="javascript:void(0);">Planning</a> <span class="dots">..................</span>4</li>
                                            <li><a href="javascript:void(0);">Business</a> <span class="dots">..................</span>5</li>
                                            <li><a href="javascript:void(0);">Case Study </a> <span class="dots">................</span>3</li>
                                            <li><a href="javascript:void(0);">Finance</a> <span class="dots">..................</span> 8</li>
                                            <li><a href="javascript:void(0);">Investment</a> <span class="dots">................</span>6</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Post -->
                <div id="popular_post" class="popular_post">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="outer_popular mt-4">
                                    <h2>Popular Post</h2>
                                    <!-- Post-1 -->
                                    <div class="outer mt-4 display">
                                        <div class="popular_image">
                                        <a href="/consulting_startup/detail-blog">
                                            <img src="{{ asset('themes/consulting_startup/img/blog/popular-img1.jpg') }}" alt="popular image">
                                        </a>
                                        </div>
                                            <div class="text_post">
                                            <p class="main"> Minimal Post...</p>
                                            <p class="date">August 13, 2019 by</p><span>Mark Edison</span>
                                        </div>
                                    </div>
                                    <!-- Post-2 -->
                                    <div class="outer pt-lg-3 display">
                                        <div class="popular_image">
                                            <a href="/consulting_startup/detail-blog"><img src="{{ asset('themes/consulting_startup/img/blog/popular-img2.jpg') }}" alt="audio image"></a>
                                        </div>
                                        <div class="text_post">
                                            <p class="main"> Standard Post....</p>
                                            <p class="date">October 22, 2019 by</p><span>Mark Edison</span>
                                        </div>
                                    </div>
                                    <!-- Post-3 -->
                                    <div class="outer pt-lg-3 display">
                                        <div class="popular_image">
                                        <a href="/consulting_startup/detail-blog"><img src="{{ asset('themes/consulting_startup/img/blog/popular-img3.jpg') }}" alt="standard image"></a>
                                    </div>
                                        <div class="text_post">
                                            <p class="main">Standard Post...</p>
                                            <p class="date">October 30, 2019 by</p><span>Mark Edison</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div id="tags" class="tags">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pr-0 pl-0">
                                <div class="outer_tag mt-4">
                                    <h2 class="main_tag">Tags</h2>
                                    <div class="inner_tag">
                                        <div class="tag_text">
                                            <span><a href="javascript:void(0);">Projects</a></span>
                                            <span><a href="javascript:void(0);">Strategy</a></span>
                                            <span><a href="javascript:void(0);">Goal</a></span>
                                            <span><a href="javascript:void(0);">Oppertunity</a></span>
                                            <span><a href="javascript:void(0);">Marketing</a></span>
                                            <span><a href="javascript:void(0);">Finance</a></span>
                                            <span><a href="javascript:void(0);">Advisory</a></span>
                                            <span><a href="javascript:void(0);">Amount</a></span>
                                            <span><a href="javascript:void(0);">Team</a></span>
                                            <span><a href="javascript:void(0);">Prices</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archives -->
                <div id="archieve" class="archieve">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pr-0 pl-0">
                                <div class="topic_outerbox mt-4">
                                    <h2>Archives</h2>
                                    <div class="inner-box1">
                                        <ul>
                                            <li><a href="javascript:void(0);">May 2016</a> <span class="dots">..................</span>1</li>
                                            <li><a href="javascript:void(0);">July 2015</a> <span class="dots">..................</span>3</li>
                                            <li><a href="javascript:void(0);">Dec 2017</a> <span class="dots">..................</span>1</li>
                                            <li><a href="javascript:void(0);">Oct 2019</a> <span class="dots">..................</span>6</li>
                                            <li><a href="javascript:void(0);">Sep 2018</a> <span class="dots">..................</span>8</li>
                                            <li><a href="javascript:void(0);">Feb 2020</a> <span class="dots">..................</span>1</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="sale_image">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pr-0 pl-0 pt-4 pb-4">
                                <img class="sale_img" src="{{ asset('themes/consulting_startup/img/sale.jpg') }}" alt="advertisment image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Right -->
            <div class="col-sm-12 col-md-12 col-lg-8 pt-sm-4 pt-md-0 pt-lg-0 order-1 order-md-2">

                <!--....MINIMAL POST....-->
                <div class="minimal_image mt-sm-10 mt-md-0 mt-lg-0">
                    <div class="min-post">
                        <img src="{{ asset('themes/consulting_startup/img/blog/blog_page.jpg') }}" alt="Blog Image">
                    </div>
                </div>
                <div class="text_minimal">
                    <a href="/consulting_startup/detail-blog"><h2>Minimal Post With A Preview Image</h2></a>
                    <div class="display">
                    <p class="date">August 13, 2019  </p><div class="verticle_line margin_1"></div>
                    <span>Mark Edison</span>
                    </div>
                    <p class="text_dummy">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem.
                        Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                    <a href="/consulting_startup/detail-blog" class="btn btn-large btn-primary">Read More</a>
                </div>
                <div class="divider1"></div>

                <!--....MINIMAL POST....-->
                <div class="minimal_image mt-sm-10 mt-md-0 mt-lg-0">
                    <div class="min-post">
                        <img src="{{ asset('themes/consulting_startup/img/blog/blog_page2.jpg') }}" alt="Blog Image">
                    </div>
                </div>
                <div class="text_minimal">
                    <a href="/consulting_startup/detail-blog"><h2>Minimal Post With A Preview Image</h2></a>
                    <div class="display">
                        <p class="date">June 13, 2020  </p><div class="verticle_line margin_1"></div>
                        <span>Ella James</span>
                    </div>
                    <p class="text_dummy">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem.
                        Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                    <a href="/consulting_startup/detail-blog" class="btn btn-large btn-primary">Read More</a>
                </div>
                <div class="divider1"></div>

                <!--....PORTFOLIO....-->
                <div class="audio-post mt-10">
                    <div class="img-area">
                        <div class="row">
                            <!-- Image-1 -->
                            <div class="col-4 pt-0 pb-0 pr-0">
                                <a href="img/blog/portfolio1.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                    <img  src="{{ asset('themes/consulting_startup/img/blog/thumbnail1.jpg') }}" alt="" />
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li> <i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Image-2 -->
                            <div class="col-4 p-0">
                                <a href="img/blog/portfolio2.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/thumbnail2.jpg') }}" alt="portfolio image">
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li><i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Image-3 -->
                            <div class="col-4 pt-0 pb-0 pl-0">
                                <a href="img/blog/portfolio5.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/thumbnail5.jpg') }}" alt="portfolio image">
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li> <i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Image-4 -->
                            <div class="col-4 pt-0 pb-0 pr-0">
                                <a href="img/blog/portfolio3.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/thumbnail3.jpg') }}" alt="portfolio image">
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li><i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Image-5 -->
                            <div class="col-4 p-0">
                                <a href="img/blog/portfolio4.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                   <img src="{{ asset('themes/consulting_startup/img/blog/thumbnail4.jpg') }}" alt="portfolio image">
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li><i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Image-6 -->
                            <div class="col-4 pt-0 pb-0 pl-0">
                                <a href="img/blog/portfolio6.jpg" data-fancybox="gallery1">
                                    <div class="box4">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/thumbnail6.jpg') }}" alt="portfolio image">
                                        <div class="box-content">
                                            <span class="post">View Gallery</span>
                                            <ul class="icon">
                                                <li><i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Text -->
                    <div class="text_minimal">
                        <a href="/consulting_startup/detail-blog"><h2>Standard Post With A Image Gallery</h2></a>
                        <div class="display">
                        <p class="date">August 13, 2019  </p><div class="verticle_line margin_1"></div>
                        <span>Mark Edison</span>
                        </div>
                        <p class="text_dummy">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem.
                            Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                        <a href="/consulting_startup/detail-blog" class="btn btn-large btn-primary">Read More</a>
                    </div>
                    <div class="divider1"></div>
                </div>

                <!--....CAROUSAL....-->
                <div class="audio-post mt-10">
                    <div class="img-area">
                        <div id="carouselExampleControls" class="carousel slide carousal-fade" data-ride="carousel">
                            <div class="carousel-inner ml-lg-10 ">
                                <div class="carousel-item active">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/blog_carousal1.jpg') }}" class="d-block w-100 h-100" alt=" ">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/blog_carousal2.jpg') }}" class="d-block w-100 h-100" alt=" ">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('themes/consulting_startup/img/blog/blog_carousal3.jpg') }}" class="d-block w-100 h-100" alt=" ">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="text_minimal">
                        <a href="/consulting_startup/detail-blog"><h2>Standard Post With Image Slider</h2></a>
                        <div class="display">
                        <p class="date">August 13, 2019  </p><div class="verticle_line margin_1"></div>
                        <span>Mark Edison</span>
                        </div>
                        <p class="text_dummy">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem.
                            Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                        <a href="/consulting_startup/detail-blog" class="btn btn-large btn-primary">Read More</a>
                    </div>
                    <div class="divider1"></div>
                </div>

                <!--....PAGINATION....-->
                <ul class="pagination mt-10">
                    <li class="page-item active">
                        <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG CONTENT -->
@endsection