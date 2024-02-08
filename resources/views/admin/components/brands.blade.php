@extends('admin.index')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">
        <form action="/projects" method="get">
            <div class="mt-3 mb-3 form-group d-flex ">
                {{-- <input type="text" name='search' class="mt-2 form-control search" value=""
                    placeholder="მოძებნე პროექტი">
                <button class="btn btn-primary">ძებნა</button> --}}
                <button type="button" class="ml-auto btn btn-primary" data-toggle="modal" data-target="#add_brand">მწარმოებლის
                    დამატება</button>
            </div>
        </form>
        
        <div class="row">
            <tbody class="table-border-bottom-0">
                @foreach ($brands as $brand)
                <div class="col-md-3">
                    <div class="p-3 mt-5 card brands">
                        <a href="/admin/species/{{ $brand->id }}"> <img src="{{ $brand->image }}"></a>
                        <h5 class="mt-3">{{ $brand->name }}</h5>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-info" data-toggle="modal"
                                    data-target="#edit_brand_{{ $brand->id }}">რედაქტირება</button></div>
                            <div class="col-6"><button class="ml-4 btn btn-danger" data-toggle="modal"
                                    data-target="#delete_brand_{{ $brand->id }}">წაშლა</button></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </div>
    </div>

    @foreach ($brands as $brand)
        <div class="modal fade bd-example-modal-lg" id="edit_brand_{{ $brand->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">მწარმოებლის რედაქტირება</h5>
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.brand.update', ['id' => $brand->id]) }}" enctype='multipart/form-data'
                            method='post'>
                            @csrf
                            @method('PUT')
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მწარმოებლის დასახელება</label>
                                <input type="text" name='name' value="{{ $brand->name }}" class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მწარმოებლის სურათი</label>
                                <input type="file" name='image' value="{{ $brand->image }}" class="mt-2 form-control">
                            </div>
                            <div class="mt-5 form-group col-12 col-md-12">
                                <button class="btn btn-primary" type='submit'>რედაქტირება</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="delete_brand_{{ $brand->id }}" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">მწარმოებლის წაშლა</h5>
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.brand.destroy', ['id' => $brand->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">წაშლა</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade bd-example-modal-lg" id="add_brand" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">მწარმოებლის დამატება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{ route('admin.brand.store') }}' enctype='multipart/form-data' method='post'>
                        @csrf
                        <div class='row'>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მწარმოებლის დასახელება (ქართულად)</label>
                                <input type="text" name='name'  class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მწარმოებლის დასახელება (ინგლისურად)</label>
                                <input type="text" name='name_en' class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მწარმოებლის სურათი</label>
                                <input type="file" name='image' class="mt-2 form-control">
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
