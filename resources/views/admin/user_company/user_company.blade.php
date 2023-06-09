@extends('admin.layouts.admin')

@section('content')


<div class="content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Company Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $company->user->name }}</td>
                <td>{{ $company->company_name }}</td>
                <td>
                    <a href="{{ route('admin.delete_company', $company->id) }}"><button
                            class="btn btn-danger">Delete</button></a>
                    <a href="#" data-toggle="modal" data-target="#editcompany{{ $company->id }}"><button
                            class="btn btn-primary">Edit</button></a>

                </td>

            </tr>



            <!-- Modal -->
            <div class="modal fade" id="editcompany{{ $company->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #1D1D2C">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #1D1D2C">
                            <form action="{{ route('admin.company_edit') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" id="" value="{{ $company->user_id }}">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Company Name</label>

                                            <input type="text" class="form-control" name="company_name"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{ $company->company_name }}">

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



@stop
