@extends('layouts.app')

@section('content')
<div class="container" id="home">
    <div class="row">
    
         <div class="col-md-8"> <img src="{{ asset('dist/img/images/regis-bg_01_01.jpg') }}" class="img-responsive" /> </div>
      
     	 <div class="col-md-3" >
        <form action="{{ url('confirmation') }}" method="post" class="form" role="form" style="min-height:150px !important;" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <legend>Enter OTP</a></legend>
          <h6>Sent to your mentioned Mobile & Email</h6>
          <div class="row">
          
          <div class="col-xs-12 col-md-12">
            <input class="form-control input-lg" name="token" id="token" placeholder="Mobile OTP / Email OTP" type="mobileno" />
            @if ($errors->has('token'))
                <span class="help-block">
                    <strong>{{ $errors->first('token') }}</strong>
                </span>
            @endif
          </div>
          
          <input type="hidden" name="user_id" id="user_id" value="{{Request::segment(2)}}">
          <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit"> Confirm</button>
        </form>
      </div>
    </div>
    <div class="col-offset-left-1"> </div>
  </div>
</div>
@endsection