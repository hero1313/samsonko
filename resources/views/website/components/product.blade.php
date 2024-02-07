@extends('website.index')
@section('content')
<div class="main">
    <div class="product_page_bg">
        <div class="container">
            <!--product details start-->
            <div class="product_details">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="assets/img/product/productbig5.jpg" data-zoom-image="assets/img/product/productbig5.jpg" alt="big-1">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                            <img src="assets/img/product/productbig4.jpg" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                            <img src="assets/img/product/productbig1.jpg" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                            <img src="assets/img/product/productbig2.jpg" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                            <img src="assets/img/product/productbig3.jpg" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_d_right">
                           <form action="#">

                                <h3><a href="#">Donec Non Est</a></h3>
                                <div class="product_nav">
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                               <div class="product_rating">
                                  <ul>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       <li class="review"><a href="#">(1 customer review )</a></li>
                                   </ul>
                                </div>
                                <div class="price_box">
                                    <span class="old_price">$80.00</span>
                                    <span class="current_price">$70.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                                </div>
                                <div class="product_variant color">
                                    <h3>Available Options</h3>
                                    <label>color</label>
                                    <ul>
                                        <li class="color1"><a href="#"></a></li>
                                        <li class="color2"><a href="#"></a></li>
                                        <li class="color3"><a href="#"></a></li>
                                        <li class="color4"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="product_variant quantity">
                                    <label>quantity</label>
                                    <input min="1" max="100" value="1" type="number">
                                    <button class="button" type="submit">add to cart</button>  

                                </div>
                                <div class=" product_d_action">
                                   <ul>
                                       <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                       <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                   </ul>
                                </div>
                                <div class="product_meta">
                                    <span>Category: <a href="#">Clothing</a></span>
                                </div>

                            </form>
                            <div class="priduct_social">
                                <ul>
                                    <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                    <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                    <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                    <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                    <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                                </ul>      
                            </div>

                        </div>
                    </div>
                </div>   
            </div>
            <!--product details end-->

            <!--product info start-->
            <div class="product_d_info"> 
                <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">   
                                <div class="product_info_button">    
                                    <ul class="nav" role="tablist" id="nav-tab">
                                        <li >
                                            <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                        </li>
                                        <li>
                                             <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                        </li>
                                        <li>
                                           <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                        <div class="product_info_content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                        </div>    
                                    </div>
                                    <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                        <div class="product_d_table">
                                           <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Compositions</td>
                                                            <td>Polyester</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Styles</td>
                                                            <td>Girly</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Properties</td>
                                                            <td>Short Dress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                        </div>    
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                        <div class="reviews_wrapper">
                                            <h2>1 review for Donec eu furniture</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="assets/img/blog/comment2.jpg" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                           </ul>
                                                        </div>
                                                        <p><strong>admin </strong>- September 12, 2022</p>
                                                        <span>roadthemes</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="comment_title">
                                                <h2>Add a review </h2>
                                                <p>Your email address will not be published.  Required fields are marked </p>
                                            </div>
                                            <div class="mb-10 product_rating">
                                               <h3>Your rating</h3>
                                                <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Your review </label>
                                                            <textarea name="comment" id="review_comment" ></textarea>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Name</label>
                                                            <input id="author"  type="text">

                                                        </div> 
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Email </label>
                                                            <input id="email"  type="text">
                                                        </div>  
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                 </form>   
                                            </div> 
                                        </div>     
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>   
            </div>  
            <!--product info end-->

            <!--product area start-->
            <section class="product_area related_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Related</span> Products</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="product_carousel product_details_column5 owl-carousel">
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-56%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
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
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
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
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-56%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
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
                                                    <span class="old_price">$420.00</span> 
                                                    <span class="current_price">$180.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
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
                                                    <span class="old_price">$420.00</span> 
                                                    <span class="current_price">$180.00</span>
                                                </div>
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_new">new</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
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
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
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
                                            </div> 
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div>  
                                        </div>
                                    </figure>
                                </article>
                       </div>
                    </div> 
                </div>  
            </section>
            <!--product area end-->

            <!--product area start-->
            <section class="product_area upsell_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Upsell</span> Products</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="product_carousel product_details_column5 owl-carousel">
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
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
                                                <span class="old_price">$420.00</span> 
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div> 
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_new">new</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
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
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
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
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
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
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
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
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div>  
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
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
                                                <span class="old_price">$420.00</span> 
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div> 
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div> 
                                    </div>
                                </figure>
                            </article>
                       </div>
                    </div>
                </div> 
            </section>
            <!--product area end-->
        </div>
    </div>
</div>
@stop