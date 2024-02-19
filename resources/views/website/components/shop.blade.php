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
                            <form action="">
                                <div class="widget_list widget_categories">
                                    <h3>Brands</h3>
                                    <ul>
                                        @if ($brands)
                                            @foreach ($brands as $brand)
                                                <li class="widget_sub_categories">
                                                    <a href="#" class="brand"
                                                        data="{{ $brand->id }}">{{ $brand->name }}</a>
                                                    <ul class="widget_dropdown_categories">
                                                        @if ($brand->specie)
                                                            @foreach ($brand->specie as $specie)
                                                                <li><a href="#" class="specie"
                                                                        data="{{ $specie->id }}">{{ $specie->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="widget_list widget_categories">
                                    <h3>Categories</h3>
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li>
                                            <input id="check_{{$category->id}}" name="category_id" value="{{$category->id}}" type="checkbox">
                                            <label for="check_{{$category->id}}">{{$category->name_ge}}</label>
                                            <span class="checkmark"></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="hidden" id="specie" name="specie_id">
                                <input type="hidden" id="brand" name="brand_id">
                                <button class="btn btn-primary" type="submit">გაფილტვრა</button>
                            </form>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="active btn-grid-4" data-bs-toggle="tooltip"
                                    title="4"></button>
                                <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip"
                                    title="3"></button>
                            </div>
                        </div>
                        <div class="row shop_wrapper">
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-12 ">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb shop-product">
                                                <a class="primary_img" href="{{ route('main.product', $product->id) }}"><img
                                                        src="{{ $product->image }}" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('main.product', $product->id) }}"><img
                                                        src="{{ $product->image }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product_content grid_content">
                                                <div class="product_content_inner">
                                                    <p class="manufacture_product"><a href="#">
                                                            <h4 class="product_headline">{{ $product->name_ge }}</h4>
                                                        </a></p>
                                                    <h4 class="product_name"><a
                                                            href="{{ route('main.product', $product->id) }}">{{ $product->brand->name }}</a>
                                                    </h4>
                                                    <h4 class="product_name"><a
                                                            href="{{ route('main.product', $product->id) }}">{{ $product->specie->name }}</a>
                                                    </h4>
                                                    <h4 class="product_name"><a
                                                        href="{{ route('main.product', $product->id) }}">{{ $product->code }}</a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="current_price">${{ $product->price }}</span>
                                                    </div>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <button class="add-wishlist button" data="{{$product->id}}" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                            </svg>
                                                        </button>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content list_content">
                                                <div class="left_caption">
                                                    <h4 class="product_name"><a href="product-details.html">{{ $product->name_ge }}</a></h4>
                                                    <p class="manufacture_product"><a href="#">{{ $product->brand->name }}</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">${{ $product->price }}</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>
                                                            {{ $product->description_ge }}
                                                        </p>
                                                        <button class="add-wishlist button" data="{{$product->id}}" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.specie').click(function() {
                $('.specie').css('color', 'black');
                var specieValue = $(this).attr('data');
                $(this).css('color', 'red');
                $('#specie').val(specieValue);
            });

            var brandValue = ''; // Initialize brandValue

            $('.brand').click(function() {
                $('.brand').css('color', 'black');
                var dataValue = $(this).attr('data');
                $(this).attr('data')
                if (brandValue == dataValue) {
                    brandValue = '';
                    $('#brand').val('');
                    $('#specie').val('');
                    $(this).siblings('ul').slideToggle('medium');

                } else {
                    $(this).css('color', 'red');
                    brandValue = dataValue;
                    $('#brand').val(dataValue);
                    $(this).siblings('ul').slideToggle('medium');

                }
            });
            $('.category_checkbox').click(function() {
                $('.category_checkbox').find('a').css('color', 'black');
                $('.category_checkbox').find('a').css('background', '#fff');
                $(this).find('a').css('color', '#fff');
                $(this).find('a').css('background', 'black');
            });
        });
    </script>
@stop
