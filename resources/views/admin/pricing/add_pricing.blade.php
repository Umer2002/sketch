@extends('admin.layouts.admin')

@section('content')


<div class="content">
    <div class="container-fluid">
        <a href="{{ route('admin.pricing') }}"><button class="btn btn-info">Back</button></a>
    </div>
    <form action="{{ route('admin.add_pricing_action') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>

                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>

                    <input type="text" class="form-control" name="price" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Plans</label>
                    <textarea class="form-control tinymce-editor" name="plan" id="plans">                   
                </textarea>

                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
        
</div>
</div>

@stop