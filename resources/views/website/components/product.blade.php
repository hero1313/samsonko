@extends('website.index')
@section('content')
<div class="main">
    <div class="product_page_bg">
        <div class="container">
            <!--product details start-->
            <div class="product_details">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <img id="zoom1" class="product-page-image" src="{{$product->image}}" data-zoom-image="{{$product->image}}" alt="big-1">
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_d_right">
                           <form action="#">
                                <h3><a href="#">{{$product->name_en}}</a></h3>
                                <div class="price_box">
                                    <span class="current_price">{{$product->price}} ₾</span>
                                </div>
                                <div class="product_meta">
                                    <span>Brand: <a href="#">{{$product->brand->name}}</a></span>
                                </div>
                                <div class="product_meta">
                                    <span>Specie: <a href="#">{{$product->specie->name}}</a></span>
                                </div>
                                
                                <div class="product_variant quantity">
                                    <button class="add-wishlist button" data="{{$product->id}}" type="button">favorites</button>
                                </div>
                            </form>
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
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                        <div class="product_info_content">
                                            {{$product->description_en}}
                                        </div>    
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>   
            </div>  
            <!--product info end-->
        </div>
    </div>
</div>
@stop