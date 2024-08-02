@extends('layouts.master')
@section('content')
    <div id="all">
        <!-- Header -->
        <header id="header">
            <!-- Topbar -->


            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Search -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
{{--                            --}}
                        </div>

                        <!-- Logo -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="#">
                                    <img class="header-img"  src="{{asset('assets/img/logo.jpg')}}" alt="Logo">
                                </a>
                            </div>

                            <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                        </div>
                        <!-- Cart -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Menu -->
            <div id="main-menu">
                <ul class="menu">
                    <li>
                        <a href="#" title="Homepage">Home</a>
                    </li>



                    <li>
                        <a href="#about">About Us</a>
                    </li>
                    <li>
                        <a href="#products">Products</a>
                    </li>
                    <li>
                        <a href="#faq">Faq</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </header>


        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Slideshow -->
            <div class="section slideshow">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider" style="filter: brightness(75%);">

                        <a href="#">
                            <img class="img-responsive" src="{{asset('assets/img/banner/home-banner-4.jpg')}}" alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive"  src="{{asset('assets/img/banner/home-banner-5.jpg')}}" alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive"  src="{{asset('assets/img/banner/home-banner-6.jpg')}}" alt="Slideshow Image">
                        </a>
                    </div>
                </div>
            </div>


            <!-- Intro -->
            <div class="section intro" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="intro-header">
                                <h3>Welcome To TopNotchTurfs</h3>
                                <p>Top Notch Turfs provide an innovative way to enhance the aesthetics of a landscape. The colorants line includes mulch colorant, which is also available for bark and pine straw.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-left">
                                <div class="intro-item">
                                    <p><img src="{{asset('assets/img/grass.png')}}"  height="42" width="42" alt="Intro Image"></p>
                                    <h4>Lawn Painting</h4>
                                    <p>We specialize in the application of non-toxic, eco-friendly turf paints that transform the appearance of lawns.</p>
                                </div>

                                <div class="intro-item">
                                    <p><img src="assets/img/grass2.png"  height="42" width="42" alt="Intro Image"></p>
                                    <h4>Turf Art and Design</h4>
                                    <p>Our team of skilled artists and landscape designers collaborate to create captivating turf art.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="effect">
                                <a href="#">
                                    <img class="img-responsive" src="assets/img/2.jpg"  alt="Intro Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="assets/img/grass3.png"  height="42" width="42" alt="Intro Image"></p>
                                    <h4>Lawn Maintanance</h4>
                                    <p>We provide comprehensive lawn maintenance services tailored to promote the health and vitality of turf areas.</p>
                                </div>

                                <div class="intro-item">
                                    <p><img src="assets/img/grass4.png"  height="42" width="42" alt="Intro Image"></p>
                                    <h4>Native Landscaping</h4>
                                    <p>We embraces the beauty and sustainability of native plant species in landscaping projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>











            <!-- Product - Deals Of The Day -->
            <div class="section products-block new-arrivals layout-3" id="products">
                <div class="block-title">
                    <h2 class="title">Our <span>Products</span></h2>
                    <div class="sub-title">Exquisite landscape without breaking the bank </div>
                </div>

                <div class="block-content">
                    <div class="container">
                        <div class="products owl-theme owl-carousel">
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/lava.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Lava Boulder
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$170.00</span>
                                            <span class="spn-text"> (per tonne)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/crypt.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                               Crypt Boulder
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$170.00</span>
                                            <span class="spn-text">(per tonne)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/lime.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Limestone Boulder
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$170.00</span>
                                            <span class="spn-text">(per tonne)</span>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/black.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Black Pebbles
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$11.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/white.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                White Pebbles
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$14.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/mixed.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                               Mixed Pebbles
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$11.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/quary.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                3/4 Quary Stones
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$620.00</span>
                                            <span class="spn-text">(per 20 cubic)</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/crashed.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                White Crashed Stones
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$11.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/red.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Red Crashed Stones
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$11.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/black_soil.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Black Soil
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$30.00</span>
                                            <span class="spn-text">(per 30 Cubic)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/pool_sand.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Pool Filter Sand
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$13.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/flower.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Kids Play Sand
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$12.00</span>
                                            <span class="spn-text">(per 20kg)</span>
                                        </div>


                                    </div>
                                </div>

                            </div>



                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/turf_paint.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Commercial Turf Painting
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$2.25</span>
                                            <span class="spn-text">(per sqm)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/kid.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Turf Painting Art
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$45.00</span>
                                            <span class="spn-text">(per 5sqm)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/residential.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Residential Turf Painting
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$3.25</span>
                                            <span class="spn-text">(per sqm)</span>
                                        </div>


                                    </div>
                                </div>

                            </div>


                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/durban.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Durban Instant Lawn
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$7.00</span>
                                            <span class="spn-text">(per Sqm)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/kiku.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Kikuyu Instant Lawn
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$2.50</span>
                                            <span class="spn-text">(per Sqm)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/grass.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Lawn Mowing
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$0.20</span>
                                            <span class="spn-text">(per Sqm)</span>
                                        </div>


                                    </div>
                                </div>

                            </div>



                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/stepping.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Stepping Stones
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$6.00</span>
                                            <span class="spn-text">(5*5)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/cape.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Cape Stone
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$4.70</span>
                                            <span class="spn-text">(each)</span>
                                        </div>


                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/product/round.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="#">
                                                Round Concrete Stone
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$4.70</span>
                                            <span class="spn-text">(400 diameter)</span>
                                        </div>


                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>



            <div class="section products-block deals-of-day show-hover nav-color layout-2" id="faq">
                <div class="block-title">
                    <h2 class="title"><span>FAQ</span></h2>
                    <div class="sub-title">Our clients frequently asked questions</div>
                </div>

                <div class="block-content">
                    <div class="products owl-theme owl-carousel">
                        <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/banner/faq-11.jpg" class="img-rounded" alt="Product Image">
                                        </a>
                                    </div>
                        </div>

                        <div class="product-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/banner/faq-2.jpg" class="img-rounded" alt="Product Image">
                                </a>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/banner/faq-3.jpg" class="img-rounded" alt="Product Image">
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/banner/faq-4.jpg" class="img-rounded" alt="Product Image">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>



        <div class="block-title" id="contact">
            <h2 class="title"><span>Contact</span></h2>
        </div>
        <div class="section products-block product-tab nav-color show-hover nav-round best-sellers">


            <div class="container">
                <div class="contact-page">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item d-flex">
                                    <div class="item-left">
                                        <div class="icon"><i class="zmdi zmdi-email"></i></div>
                                    </div>
                                    <div class="item-right d-flex">
                                        <div class="title">Email:</div>
                                        <div class="content">
                                            <a href="mailto:info@topnotchturfs.co.zw">info@topnotchturfs.co.zw</a><br>
                                            <a href="mailto:sales@topnotchturfs.co.zw">sales@topnotchturfs.co.zw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item d-flex justify-content-center">
                                    <div class="item-left">
                                        <div class="icon"><i class="zmdi zmdi-home"></i></div>
                                    </div>
                                    <div class="item-right d-flex">
                                        <div class="title">Address:</div>
                                        <div class="content">
                                            63 Mendel Rd, Avondale Harare, Zimbabwe
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item d-flex justify-content-end">
                                    <div class="item-left">
                                        <div class="icon"><i class="zmdi zmdi-phone"></i></div>
                                    </div>
                                    <div class="item-right d-flex">
                                        <div class="title">Holine:</div>
                                        <div class="content">
                                           0771029899
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                    <div class="contact-map">--}}
                    {{--                        <div id="map"></div>--}}
                    {{--                        <div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">815 Sunset Boulevard Ca 70079</div>--}}
                    {{--                    </div>--}}


                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                    @endif

                    <div class="contact-form form">
                        <form action="{{route('send-email')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="YOUR NAME">
                                    @error('name')<span class="text-danger small">{{ $message }}</span>@enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="YOUR EMAIL">
                                    @error('email')<span class="text-danger small">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="SUBJECT">
                                @error('subject')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <textarea rows="10" name="message" placeholder="MESSAGE"></textarea>
                                @error('message')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Footer -->
        <footer id="footer">
            <div class="footer">
                <!-- Footer Top -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="block text">
                                    <div class="block-content">
                                        <a href="#" class="logo-footer">
                                            <img src="assets/img/logo.jpg" height="64" alt="Logo">
                                        </a>

                                        <div class="contact">
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="item-right">
                                                    <span> 63 Mendel Rd, Avondale Harare, Zimbabwe</span>
                                                </div>
                                            </div>
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <i class="zmdi zmdi-phone-in-talk"></i>
                                                </div>
                                                <div class="item-right">
                                                    <span>+263771029899</span>
                                                </div>
                                            </div>
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="item-right">
                                                    <span><a href="mailto:info@topnotchturfs.co.zw">info@topnotchturfs.co.zw</a><br><a href="mailto:sales@domain.com">sales@domain.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
{{--                                <div class="block instagram">--}}
{{--                                    <h2 class="block-title">Photo Instagram</h2>--}}

{{--                                    <div class="block-content">--}}
{{--                                        <div class="row margin-0">--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="assets/img/banner/bf-1.jpg" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="assets/img/banner/bf-2.jpg" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-3.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-4.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-5.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-6.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-7.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/instagram-8.png" alt="Instagram Image">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="block newsletter">
                                    <h2 class="block-title">Newsletter</h2>

                                    <div class="block-content">
                                        <p class="description">Sign up for newsletter to receive special offers and exclusive news about TopNotchTurfs products</p>
                                        <form action="{{route('subscribe')}}" method="post">
                                            @csrf
                                            <input type="text" name="email" placeholder="Enter Your Email">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="block social">
                                    <h2 class="block-title">Follow Us</h2>

                                    <div class="block-content">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
            </div>

            <!-- Copyright -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="copyright">Copyright © 2023 - All rights reserved. Powered by Salma Technology.</div>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
                            {{-- <div class="payment">
                                <span>Payment Accept</span>
                                <img src="assets/img/payment.png" alt="Payment">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Newsletter Popup -->
{{--        <div class="newsletter-popup">--}}
{{--            <div class="popup-wrap" id="newsletter-popup">--}}
{{--                <div class="popup">--}}
{{--                    <a class="close" href="#"><i class="zmdi zmdi-hc-fw zmdi-close"></i></a>--}}

{{--                    <h3 class="block-title">Newsletter</h3>--}}
{{--                    <p class="block-description">Sign up for newsletter to receive special offers and exclusive news about TopNotchTurfs products</p>--}}

{{--                    <form action="index.html" method="post">--}}
{{--                        <input type="text" placeholder="Enter Your Email">--}}
{{--                        <button type="submit" class="btn btn-primary">Subscribe</button>--}}
{{--                    </form>--}}

{{--                    <div class="checkbox">--}}
{{--                        <label><input type="checkbox"> Don’t show this popup again</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Go Up button -->
        <div class="go-up">
            <a href="#">
                <i class="fa fa-long-arrow-up"></i>
            </a>
        </div>

        <!-- Page Loader -->
        <div id="page-preloader">
            <div class="page-loading">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
@endsection
