@extends('user.layouts.user')

@section('content')

    <div class="content" style="margin-top: 100px ">

        <div>
            <h1>What's the name of your company or team?</h1>
            <p>This will be the home for all of your Vizcom work. Choose something that your team will recognize.You can always change this name later.</p>
        </div>
        <form action="{{ route('user.add_company') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="row" style="">

                <div class="col-md-3">
                    <div class="form-group">
                        <label style="color:#fff;" for="exampleInputEmail1">Company Name</label>

                        <input style="border:1px solid gray;" type="text" class="form-control" name="company_name" id="exampleInputEmail1"
                            aria-describedby="emailHelp" @if ($company == null)  value=""@else value="{{ $company->company_name }}"@endif >

                    </div>
                </div>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
               
        </form>
    </div>

</div>
</div>



@stop
