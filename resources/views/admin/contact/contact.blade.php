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
                
              </tr>
            @endforeach
         
          
        </tbody>
      </table>
</div>



@stop