@extends('website.index')
@section('content')
<div class="main">
    <div class="wishlist_page_bg">
        <div class="container">
            <div class="wishlist_area">   
               <div class="wishlist_inner">
                    <form action="#"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc wishlist">
                                    <div class="cart_page">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr class="wishlist-tr">
                                                        <td class="product_remove"> 
                                                            <button class="btn btn-primary delete-wishlist"  data-product-id="{{$product->id}}">X</button>
                                                        </td>
                                                        <td class="product_thumb"><a href="#"><img src="{{$product->image}}" alt=""></a></td>
                                                        <td class="product_name"><a href="#">{{$product->name_ge}}</a></td>
                                                        <td class="product-price">{{$product->price}} ₾</td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>   
                                    </div>  

                                </div>
                             </div>
                         </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.delete-wishlist').click(function(){
            var token = $('meta[name="csrf-token"]').attr('content');
            var productId = $(this).data('product-id'); // Retrieve product ID from data-product-id attribute
            var $row = $(this).closest('.wishlist-tr')
            $.ajax({
                type: 'DELETE', // Use DELETE method
                url: '/delete-from-cache/' + productId,
                data: {
                        _token: token // Include the CSRF token
                    },
                success: function(response) {
                    console.log('Product deleted from cache successfully');
                    Swal.fire("პროდუქტი წარმატებით წაიშალა");
                    $row.remove();
                },
                error: function(xhr, status, error) {
                    Swal.fire("მსგავსი პროდუქტი არ მოიძებნა");

                }
            });
        });
    });
</script>
@stop