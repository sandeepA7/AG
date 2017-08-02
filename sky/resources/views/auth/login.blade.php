@extends('layouts.app')

@section('content')
<div class="container" id="home">
    <div class="row">
      <div class="col-md-8"> <img src="images/regis-bg_01_01.jpg" class="img-responsive" /> </div>
      
      <div class="col-md-4">
        <form action="{{ url('/register') }}" method="POST" class="form" role="form">
          {{ csrf_field() }}
          
          <legend>Create your account</legend>
          <h6>free account for life time</h6>
                    
          <div class="col-xs-6 col-md-6{{ $errors->has('fname') ? ' has-error' : '' }}">
            <label>Name:</label>
            <input class="form-control input-lg" name="fname" placeholder="First Name" type="text" value="{{ old('fname') }}"/>
            @if ($errors->has('fname'))
                <span class="help-block">
                    <strong>{{ $errors->first('fname') }}</strong>
                </span>
            @endif
          </div>
          
          <div class="col-xs-6 col-md-6{{ $errors->has('sname') ? ' has-error' : '' }}">
            <label >Surname</label>
            <input class="form-control input-lg" name="sname" placeholder="Surname" type="text" value="{{ old('sname') }}" />
            @if ($errors->has('sname'))
                <span class="help-block">
                    <strong>{{ $errors->first('sname') }}</strong>
                </span>
            @endif            
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('username') ? ' has-error' : '' }}">
            <label>Contact details</label>
            <input class="form-control input-lg" name="username" placeholder="Email Id / Mobile No" type="mobileno" value="{{ old('username') }}" />
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif            
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('cusername') ? ' has-error' : '' }}">
            <label>Confirm Contact details</label>
            <input class="form-control input-lg" name="cusername" placeholder="Email Id / Mobile No" type="text" />
            @if ($errors->has('cusername'))
                <span class="help-block">
                    <strong>{{ $errors->first('cusername') }}</strong>
                </span>
            @endif            
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Password</label>
            <input class="form-control input-lg" name="password" placeholder="Password" type="password" />
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif            
          </div>
          <div class="col-xs-6 col-md-6{{ $errors->has('gender') ? ' has-error' : '' }}">
            <label >Gender</label>
            <select class="form-control" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            @if ($errors->has('gender'))
                <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
            @endif            
           </div>

           <div class="col-xs-6 col-md-6{{ $errors->has('dob') ? ' has-error' : '' }}">
            <label> Date of Birth</label>
            <input type="text" placeholder="dd / mm / yyy" data-date-format="mm/dd/yy" name="dob" id="dp2"  class="form-control input-lg" value="{{ old('dob') }}" />
            @if ($errors->has('dob'))
                <span class="help-block">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
            @endif              
          </div>


          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('npcontact') ? ' has-error' : '' }}">
            <label>Nominee Details<sub> (optional)</sub></label>
            <input class="form-control input-lg" name="npcontact" placeholder="Email id / Mobile No" type="mobileno" value="{{ old('npcontact') }}"/>
            @if ($errors->has('npcontact'))
                <span class="help-block">
                    <strong>{{ $errors->first('npcontact') }}</strong>
                </span>
            @endif            
          </div>
          
          
          <div class="checkbox icheck col-xs-12 col-md-6 col-lg-12{{ $errors->has('tnc') ? ' has-error' : '' }}">
            <label>
            <input type="checkbox" name="tnc">
            I agree to the <a href="#">Terms &amp; Conditions</a> </label>
          </div>
          
          <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit"> Continue</button>
        </form> 
        
        </div> 

    </div>
  </div>
@endsection
