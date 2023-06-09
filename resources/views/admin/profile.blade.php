@extends('admin.layouts.admin')

@section('content')

<div class="content">
    <form action="{{ route('admin.edit_admin_profile') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $profile->id }}">
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>

                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $profile->name }}">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>

                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $profile->email }}">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>

                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Password">

                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>

</div>

@stop
