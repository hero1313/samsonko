@extends('website.index')
@section('content')
    <div class="main">
        <!--slider area start-->
        <section class="slider_section slider_s_four">
            <div class="slider_area slider_carousel owl-carousel">
                <div class="single_slider d-flex align-items-center" data-bgimg="assets/website/img/banner-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    <h1>Big sale off <span>Accessories Fidanza</span></h1>
                                    <p>Exclusive Offer -30% Off This Week</p>
                                    <a class="button" href="shop.html">shopping now <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider d-flex align-items-center" data-bgimg="assets/website/img/banner-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content center">
                                    <h1>Accessories <span>all kinds of tractor trailer</span></h1>
                                    <p>Exclusive Offer -30% Off This Week</p>
                                    <a class="button" href="shop.html">shopping now <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider area end-->

        <!--home section bg area start-->
        <div class="home_section_bg section_bg_four">
            <!--banner area start-->
            <div class="banner_area mb-80">
                <div class="container">
                    <div class="row">
                        <div class="section_title s_title_style4">
                            <h2><span>Partners</span></h2>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <figure class="single_banner">
                                <div class="m-auto banner_thumb center">
                                    <div class="partner">
                                        <a href="shop.html"><img src="assets/website/img/kronoil.png" alt=""></a>
                                    </div>
                                    <div class="center">
                                        <h3>Oil and lubricants</h3>
                                        <h4>Manufacturer Germany</h4>
                                    </div>
                                </div>
                                
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <figure class="single_banner">
                                <div class="m-auto banner_thumb center">
                                    <div class="partner">
                                        <a href="shop.html"><img src="assets/website/img/engine.png" alt=""></a>
                                    </div>
                                    <div class="center">
                                        <h3>Engine pacts</h3>
                                        <h4>Manufacturer Germany</h4>
                                    </div>
                                </div>
                                
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <figure class="single_banner">
                                <div class="m-auto banner_thumb center">
                                    <div class="partner">
                                        <a href="shop.html"><img src="assets/website/img/motorservice.png" alt=""></a>
                                    </div>
                                    <div class="center">
                                        <h3>Oil and air filters, pumps</h3>
                                        <h4>Manufacturer Germany</h4>
                                    </div>
                                </div>
                                
                            </figure>
                        </div>
                        <div class="mt-4 col-lg-6 col-md-6">
                            <figure class="single_banner right">
                                <div class="mr-5 banner_thumb first-banner">
                                    <div class="partner">
                                        <a href="shop.html"><img src="assets/website/img/insink.png" alt=""></a>
                                    </div>
                                    <div class="center">
                                        <h3>Sliding bearings</h3>
                                        <h4>Manufacturer Germany</h4>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="mt-4 col-lg-6 col-md-6">
                            <figure class="single_banner left">
                                <div class="ml-5 banner_thumb last-banner">
                                    <div class="partner">
                                        <a href="shop.html"><img src="assets/website/img/king.png" alt=""></a>
                                    </div>
                                    <div class="center">
                                        <h3>Food waste shredder</h3>
                                        <h4>Manufacturer Germany</h4>
                                    </div>
                                </div>
                                
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner area end-->
            <!--Categories product area start-->
            <div class="categories_product_area categories_product_four mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_title s_title_style4">
                                <h2><span>Car</span> Brands</h2>
                            </div>
                            <div class="row">
                                @foreach ($brands as $brand)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 brands-lending">
                                    <div class="single_categories_product ">
                                        <div class="categories_product_thumb center">
                                            <a href="shop.html"><img class="brand-img" src="{{$brand->image}}"alt=""></a>
                                        </div>
                                        <div class="categories_product_content">
                                            <h4><a href="shop.html"> {{$brand->name_ge}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Categories product area end-->
            <!--product area start-->
            <div class="product_area product_area_four color_three">
                <div class="container">
                    <div class="row">
                        <div class="section_title s_title_style4">
                            <h2><span>Popular Products</span></h2>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="deals_product_style4">
                                <div class="section_title title_style2">
                                    <div class="title_content">
                                        <h2><span>products</span></h2>
                                    </div>
                                </div>
                                <div class="product_carousel deals_product_column1 owl-carousel">
                                    {{-- main products --}}
                                    
                                    @foreach ($products as $product)
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-countdown.html"><img src="{{$product->image}}" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#"><h3>{{$product->name_ge}}</h3></a></p>
                                                <h4 class="product_name"><a href="product-countdown.html">{{$product->brand->name}}</a></h4>
                                                <h4 class="product_name"><a href="product-countdown.html">{{$product->specie->name}}</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">${{$product->price}}</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>{{$product->description_ge}}</p>
                                                </div>
                                                <div class="countdown_text">
                                                    <p><span>Hurry Up!</span> Offers ends in:</p>
                                                </div>
                                            
                                            </div>
                                        </figure>
                                    </article>
                                    @endforeach
                                    {{-- products --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="small_product_sidebar">
                                <div class="section_title title_style2">
                                    <h2><span>products</span></h2>
                                </div>
                                <div class="product_slick small_product_active">
                                    {{-- more products --}}
                                    @foreach ($products as $product)
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html">
                                                    <img src="{{$product->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">{{$product->name_ge}}</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">${{$product->price}}</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    @endforeach

                                    {{-- more products --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--product area end-->

        </div>
    @stop
