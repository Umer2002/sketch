@extends('admin.layouts.admin')

@section('content')


<div class="content">

    <div>
        <a href="{{ route('admin.add_pricing') }}"><button class="btn btn-primary">Add</button></a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Plan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pricing as $price)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $price->name }}</td>
                <td>{{ $price->price }}</td>
                <td>
                    <textarea name="" id="" cols="30" rows="0">{{ $price->plan }}</textarea>
                </td>
                <td>
                    <a href="{{ route('admin.delete_price', $price->id) }}"><button
                            class="btn btn-danger">Delete</button></a>
                    <a href="#" data-toggle="modal" data-target="#editprice{{ $price->id }}"><button
                            class="btn btn-primary">Edit</button></a>


                </td>

            </tr>
            <!-- Modal -->
            <div class="modal fade" id="editprice{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #1D1D2C">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #1D1D2C">
                            <form action="{{ route('admin.price_edit') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="" value="{{ $price->id }}">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Name</label>

                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $price->name }}">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Price</label>

                                            <input type="text" class="form-control" name="price" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $price->price }}">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Plans</label>
                                            <textarea class="form-control tinymce-editor" name="plan" cols="30"rows="0">{{ $price->plan }}</textarea>

                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </tbody>

    </table>
</div>
</div>
@stop
