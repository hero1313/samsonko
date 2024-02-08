@extends('website.index')
@section('content')
    <div class="main">
       <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Cameras & Camcoders</a></li>
                                <li class="widget_sub_categories"><a href="javascript:void(0)">Computer & Networking</a>
                                    <ul class="widget_dropdown_categories">
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Networking</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Games & Consoles</a></li>
                                <li><a href="#">Headphone & Speaker</a></li>
                                <li><a href="#">Movies & Video Games</a></li>
                                <li><a href="#">Smartphone</a> </li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h3>Price</h3>
                            <form action="#"> 
                                <div id="slider-range"></div>   
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />   

                            </form> 
                        </div>
                        <div class="widget_list widget_categories">
                            <h3>Manufacturer</h3>
                            <ul>
                               <li>
                                    <input id="check1" type="checkbox">
                                    <label for="check1">Calvin Klein (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check2" type="checkbox">
                                    <label for="check2">Diesel (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check3" type="checkbox">
                                    <label for="check3">Tommy Hilfiger (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check4" type="checkbox">
                                    <label for="check4">Versace (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget_list widget_categories">
                            <h3>Category</h3>
                            <ul>
                               <li>
                                    <input id="check5" type="checkbox">
                                    <label for="check5">Accessories (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check6" type="checkbox">
                                    <label for="check6">Dresses (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check7" type="checkbox">
                                    <label for="check7">Handbags (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                                <li>
                                    <input id="check8" type="checkbox">
                                    <label for="check8">Tops (8)</label>
                                    <span class="checkmark"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget_list tags_widget">
                            <h3>Product tags</h3>
                            <div class="tag_cloud">
                                <a href="#">blouse</a>
                                <a href="#">clothes</a>
                                <a href="#">fashion</a>
                                <a href="#">handbag</a>
                                <a href="#">laptop</a>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button"  class="active btn-grid-4" data-bs-toggle="tooltip" title="4"></button>
                            <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip" title="3"></button>
                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper">
                        
                        @foreach ($products as $product )
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb shop-product">
                                        <a class="primary_img" href="product-details.html"><img src="{{$product->image}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{$product->image}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        {{-- <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div> --}}
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#"><h4 class="product_headline">{{$product->name_ge}}</h4></a></p>
                                            <h4 class="product_name"><a href="product-details.html">{{$product->brand->name}}</a></h4>
                                            <h4 class="product_name"><a href="product-details.html">{{$product->specie->name}}</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">${{$product->price}}</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Favorite</a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                           <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box"> 
                                                <span class="old_price">$320.00</span> 
                                                <span class="current_price">$120.00</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <p class="text_available">Availability: <span>In Stock</span></p>
                                            <div class="action_links">
                                                <ul> 
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        @endforeach
                    </div>

                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
    </div>
@stop
