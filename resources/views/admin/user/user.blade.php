@extends('admin.layouts.admin')

@section('content')


<div class="content">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role_as }}</td>
                <td>
                    <a href="{{ route('admin.delete_user', $user->id) }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{ route('admin.user_edit',$user->id) }}"><button class="btn btn-primary">Edit</button></a>
                    
                </td>
                
              </tr>
            @endforeach
         
          
        </tbody>
      </table>
</div>



@stop