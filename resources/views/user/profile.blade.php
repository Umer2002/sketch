@extends('user.layouts.user')

@section('content')

    <div class="content mt-5">
        <form action="{{ route('user.edit_user_profile') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $profile->id }}">
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label style="color:#fff;" for="exampleInputEmail1">Name</label>

                        <input style="border:1px solid #fff;" type="text" class="form-control" name="name" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{ $profile->name }}">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="color:#fff;" for="exampleInputEmail1">Email</label>

                        <input style="border:1px solid #fff;" type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{ $profile->email }}">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="color:#fff;" for="exampleInputEmail1">Password</label>

                        <input style="border:1px solid #fff;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="password" placeholder="Password" required>

                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-onfo">Submit</button>
                </div>
        </form>
    </div>

</div>
</div>

@stop
