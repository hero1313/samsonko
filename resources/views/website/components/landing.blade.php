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
                                    <a class="button" href="/shop">shopping now <i class="fa fa-angle-double-right"
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
                                    <a class="button" href="/shop">shopping now <i class="fa fa-angle-double-right"
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
            <div class="mb-5 blog_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                           <div class="section_title title_style2">
                               <div class="title_content">
                                   <h2><span>Services</span></h2>
                                     
                                </div>                 
                            </div>
                          </div>
                    </div>   
                    <div class="row">
                        <div class="blog_container blog_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/trasmision.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ტრანსმისიების შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/site.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ადგილზე მომსახურება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/generator.webp" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>სტარტერებისა და გენერატორების შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/4.webp" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ტურბინის შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/5.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>კარდანის წარმოება და რემონტი</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/6.jpeg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ძრავის ნაწილების შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/7.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ჰიდროცილინდრების რემონტი და წარმოება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/8.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>ძრავის კაპიტალური შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/9.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>კომპრესორების შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="blog-details.html"><img src="assets/website/img/10.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4>აღმასრულებელი მექანიზმების შეკეთება</h4> 
                                            <div class="post_meta">
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>       
                            
                </div>
            </div>
            <!--product area start-->
            <div class="mt-5 product_area product_area_four color_three">
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
                                                    <button class="add-wishlist button" data="{{$product->id}}" type="button">favorites</button>
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
