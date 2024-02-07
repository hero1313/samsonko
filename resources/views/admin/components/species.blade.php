@extends('admin.index')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">

        <form action="/projects" method="get">
            <div class="mt-3 mb-3 form-group d-flex ">
                {{-- <input type="text" name='search' class="mt-2 form-control search" value=""
                    placeholder="მოძებნე პროექტი">
                <button class="btn btn-primary">ძებნა</button> --}}
                <button type="button" class="ml-auto btn btn-primary" data-toggle="modal"
                    data-target="#add_specie">მანქანის მოდელის დამატება</button>
            </div>
        </form>
        <div class="mt-5 card">
            <h5 class="card-header">მოდელები</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped project-table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">ავტომობილის მწარმოებელი</th>
                        <th scope="col">მოდელის დასახელება</th>
                        <th scope="col">რედაქტირება</th>
                        <th scope="col">წაშლა</th>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($species as $specie)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $specie->brand->name }}</td>
                                <td>{{ $specie->name }}</td>
                                <td><button class="btn btn-info" data-toggle="modal"
                                        data-target="#edit_specie_{{ $specie->id }}">რედაქტირება</button></td>
                                <td><button class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete_specie_{{ $specie->id }}">წაშლა</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($species as $specie)
        <div class="modal fade bd-example-modal-lg" id="edit_specie_{{ $specie->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ავტომობილოს მოდელის რედაქტირება</h5>
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.specie.update', ['id' => $specie->id]) }}" method='post'>
                            @csrf
                            @method('PUT')
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მოდელის დასახელება (ქართულად)</label>
                                <input type="text" name='name_ge' value="{{ $specie->name_ge }}" class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მოდელის დასახელება (ინგლისურად)</label>
                                <input type="text" name='name_en' value="{{ $specie->name_en }}" class="mt-2 form-control">
                            </div>
                            
                            
                            <label for="exampleInputEmail1" class="mt-3 mb-2">ავტომობილის მწარმოებელი</label>
                            <select name="brand_id" class="form-select" aria-label="Default select example">
                                <option value="{{ $specie->brand_id }}">{{ $specie->brand_id }}</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-5 form-group col-12 col-md-12">
                                <button class="btn btn-primary" type='submit'>რედაქტირება</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="delete_specie_{{ $specie->id }}" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">მოდელის წაშლა</h5>
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.specie.destroy', ['id' => $specie->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">წაშლა</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade bd-example-modal-lg" id="add_specie" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">მოდელის დამატება</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{ route('admin.specie.store', ['id' => $id]) }}' method='post'>
                        @csrf
                        <div class='row'>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მოდელის დასახელება (ქართულად)</label>
                                <input type="text" name='name_ge' class="mt-2 form-control">
                            </div>
                            <div class="mt-3 form-group col-12 col-md-12">
                                <label for="exampleInputEmail1">მოდელის დასახელება (ინგლისურად)</label>
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
