@extends('admin.index')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">

        <form action="/projects" method="get">
            <div class="mt-3 mb-3 form-group d-flex ">
                {{-- <input type="text" name='search' class="mt-2 form-control search" value=""
                    placeholder="მოძებნე პროექტი">
                <button class="btn btn-primary">ძებნა</button> --}}
                <button type="button" class="ml-auto btn btn-primary" data-toggle="modal" data-target="#add_product">პროდუქტის დამატება</button>
            </div>
        </form>
        <div class="mt-5 card">
            <h5 class="card-header">კატეგორიები</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped project-table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">პროდუქტის დასახელება</th>
                        <th scope="col">კატეგორია</th>
                        <th scope="col">ავტომობილის მწარმოებელი</th>
                        <th scope="col">ავტომობილის მოდელი</th>
                        <th scope="col">ფოტოსურათი</th>
                        <th scope="col">რედაქტირება</th>
                        <th scope="col">წაშლა</th>
                    </thead>
                    <tbody class="table-border-bottom-0 product-tbody">
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name }}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->specie->name }}</td>
                                <td><img src="{{$product->image}}" alt=""></td>
                                <td><button class="btn btn-info" data-toggle="modal" data-target="#edit_product_{{$product->id}}">რედაქტირება</button></td>
                                <td><button class="btn btn-danger" data-toggle="modal" data-target="#delete_product_{{$product->id}}">წაშლა</button></td>
                            </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($products as $product)

    <div class="modal fade bd-example-modal-lg"  id="edit_product_{{$product->id}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">პროდუქტის რედაქტირება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" enctype='multipart/form-data' method='post'>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mb-2 ">პროდუქტის დასახელება</label>
                                <input type="text" name='name' value="{{$product->name}}" required class=" form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mb-2 ">პროდუქტის კატეგორია</label>
                                <select name="category_id" class="form-select" >
                                    <option value="{{ $product->category_id }}">{{ $product->category_id }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mt-1 mb-2">ავტომობილის მწარმოებელი</label>
                                <select name="brand_id" class="form-select" >
                                    <option value="{{ $product->brand_id }}">{{ $product->brand_id }}</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mt-1 mb-2">ავტომობილის მოდელი</label>
                                <select name="specie_id" class="form-select" >
                                    <option value="{{ $product->specie_id }}">{{ $product->specie_id }}</option>
                                    @foreach ($species as $specie)
                                        <option value="{{ $specie->id }}">{{ $specie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1">პროდუქტის ღირებულება</label>
                                <input type="number" name='price' value="{{$product->price}}" required class="mt-2 form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1">პროდუქტის ფოტოსურათი</label>
                                <input type="file" value="{{$product->image}}" name='image'  class="mt-2 form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-12">
                                <label for="exampleInputEmail1" class="mt-3 mb-2">აღწერა</label>
                                <textarea name="description"  cols="30" rows="10">{{$product->description}}</textarea>
                            </div>
                            <div class="mt-5 form-group col-12 col-md-6">
                                <button class="btn btn-primary" type='submit'>დამატება</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade bd-example-modal-lg" id="delete_product_{{$product->id}}" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">პროდუქტის წაშლა</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">წაშლა</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="modal fade bd-example-modal-xl" id="add_product" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">პროდუქტის დამატება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{route('admin.product.store')}}' enctype='multipart/form-data' method='post'>
                        @csrf
                        <div class='row'>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mb-2 ">პროდუქტის დასახელება</label>
                                <input type="text" name='name' required class=" form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mb-2 ">პროდუქტის კატეგორია</label>
                                <select name="category_id" class="form-select" >
                                    <option value="">კატეგორია</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mt-1 mb-2">ავტომობილის მწარმოებელი</label>
                                <select name="brand_id" class="form-select" >
                                    <option value="">მწარმოებელი</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1" class="mt-1 mb-2">ავტომობილის მოდელი</label>
                                <select name="specie_id" class="form-select" >
                                    <option value="">მოდელი</option>
                                    @foreach ($species as $specie)
                                        <option value="{{ $specie->id }}">{{ $specie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1">პროდუქტის ღირებულება</label>
                                <input type="number" name='price' required class="mt-2 form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-6">
                                <label for="exampleInputEmail1">პროდუქტის ფოტოსურათი</label>
                                <input type="file" name='image' required class="mt-2 form-control">
                            </div>
                            <div class="mt-3 col-12 col-md-12">
                                <label for="exampleInputEmail1" class="mt-3 mb-2">აღწერა</label>
                                <textarea name="description"  cols="30" rows="10"></textarea>
                            </div>
                            <div class="mt-5 form-group col-12 col-md-6">
                                <button class="btn btn-primary" type='submit'>დამატება</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.tiny.cloud/1/gbrnntnsdmxh6mubj1f4yravc9pedm4onu6rtjcvxiwbtweg/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    </script>
@stop
