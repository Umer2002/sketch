@extends('admin.layouts.admin')

@section('content')


<div class="content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $contact->message }}</textarea>
                </td>
                <td>
                    <a href="{{ route('admin.del_contact',$contact->id) }}"><button
                            class=" btn btn-danger">Delete</button></a>
                    <a href="#" data-toggle="modal" data-target="#editcontact{{ $contact->id }}"><button
                            class=" btn btn-info">Edit</button></a>
                </td>

            </tr>

            <!-- Modal -->
            <div class="modal fade" id="editcontact{{ $contact->id }}" tabindex="-1" role="dialog"
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
                            <form action="{{ route('admin.edit_contact') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="" value="{{ $contact->id }}">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Name</label>

                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $contact->name }}">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Email</label>

                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $contact->email }}">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="text-white" for="exampleInputEmail1">Phone</label>

                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $contact->phone }}">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label class="text-white" for="exampleInputEmail1">Message</label>

                                          <textarea name="message" class="form-control" id="" cols="30" rows="0">{{ $contact->message }}</textarea>

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
