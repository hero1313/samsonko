@extends('admin.index')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">

        <form action="/projects" method="get">
            <div class="mt-3 mb-3 form-group d-flex ">
                {{-- <input type="text" name='search' class="mt-2 form-control search" value=""
                    placeholder="მოძებნე პროექტი">
                <button class="btn btn-primary">ძებნა</button> --}}
                <button type="button" class="ml-auto btn btn-primary" data-toggle="modal" data-target="#add_category">კატეგორიის დამატება</button>
            </div>
        </form>
        <div class="mt-5 card">
            <h5 class="card-header">კატეგორიები</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped project-table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">კატეგორიის დასახელება</th>
                        <th scope="col">რედაქტირება</th>
                        <th scope="col">წაშლა</th>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$category->name_ge}}</td>
                                <td><button class="btn btn-info" data-toggle="modal" data-target="#edit_category_{{$category->id}}">რედაქტირება</button></td>
                                <td><button class="btn btn-danger" data-toggle="modal" data-target="#delete_category_{{$category->id}}">წაშლა</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($categories as $category)
    <div class="modal fade bd-example-modal-lg" id="edit_category_{{$category->id}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">კატეგორიის რედაქტირება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method='post'>
                        @csrf
                        @method('PUT')
                        <div class="mt-3 form-group col-12 col-md-12">
                            <label for="exampleInputEmail1">კატეგორიის დასახელება (ქართულად)</label>
                            <input type="text" name='name_ge' value="{{$category->name_ge}}" class="mt-2 form-control">
                        </div>
                        <div class="mt-3 form-group col-12 col-md-12">
                            <label for="exampleInputEmail1">კატეგორიის დასახელება (ინგლისურად)</label>
                            <input type="text" name='name_en' value="{{$category->name_en}}" class="mt-2 form-control">
                        </div>
                        <div class="mt-5 form-group col-12 col-md-12">
                            <button class="btn btn-primary" type='submit'>რედაქტირება</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade bd-example-modal-lg" id="delete_category_{{$category->id}}" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">კატეგორიის წაშლა</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.category.destroy', ['id' => $category->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">წაშლა</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="modal fade bd-example-modal-lg" id="add_category" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">კატეგორიის დამატება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{route('admin.category.store')}}' method='post'>
                        @csrf
                        <div class='row'>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">კატეგორიის დასახელება (ქართულად)</label>
                                <input type="text" name='name_ge'  class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">კატეგორიის დასახელება (ინგლისურად)</label>
                                <input type="text" name='name_en' class="mt-2 form-control">
                            </div>
                            <div class="mt-5 form-group col-12 col-md-12">
                                <button class="btn btn-primary" type='submit'>დამატება</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop
