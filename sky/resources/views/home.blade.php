@extends('layouts.app')

@section('content')
<div class="container" id="home">
   
    <div class="row">
      <div class="col-md-8"> <img src="{{ asset('dist/img/images/regis-bg_01_01.jpg') }}" class="img-responsive" /> </div>
      
      <div class="col-md-4">
        <form id="registration" name="registration" action="{{ url('/register') }}" method="POST" class="form" role="form"-->
        <!--form id="registration" name="registration" action="{{ url('/api/register') }}" method="POST" class="form" role="form"-->
          {{ csrf_field() }}

          <legend>Create your account</legend>
          <h6>free account for life time</h6>
                    
          <div class="col-xs-6 col-md-6{{ $errors->has('fname') ? ' has-error' : '' }}">
            <label>Name:</label>
            <input class="form-control input-lg" name="fname" placeholder="First Name" type="text" value="{{old('fname')}}"/>
            <span class="help-block" style="display:{{($errors->has('fname')) ? 'block;' : 'none;'}};">
                {{ $errors->first('fname') }}
            </span>
          </div>
          
          <div class="col-xs-6 col-md-6{{ $errors->has('sname') ? ' has-error' : '' }}">
            <label >Surname</label>
            <input class="form-control input-lg" name="sname" placeholder="Surname" type="text" value="{{ old('sname') }}" />
            <span class="help-block" style="display:{{($errors->has('sname')) ? 'block;' : 'none;'}};">
                {{ $errors->first('sname') }}
            </span>
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('username') ? ' has-error' : '' }}">
            <label>Contact details</label>
            <input class="form-control input-lg" name="username" placeholder="Email Id / Mobile No" type="mobileno" value="{{ old('username') }}" />
            <span class="help-block" style="display:{{($errors->has('username')) ? 'block;' : 'none;'}};">
                {{ $errors->first('username') }}
            </span>
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('username_confirmation') ? ' has-error' : '' }}">
            <label>Confirm Contact details</label>
            <input class="form-control input-lg" id="username-confirm" name="username_confirmation" placeholder="Email Id / Mobile No" type="text" />
            <span class="help-block" style="display:{{($errors->has('username_confirmation')) ? 'block;' : 'none;'}};">
                {{ $errors->first('cusername') }}
            </span>
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Password</label>
            <input class="form-control input-lg" id="password" name="password" placeholder="Password" type="password" />
            <span class="help-block" style="display:{{($errors->has('password')) ? 'block;' : 'none;'}};">
                {{ $errors->first('password') }}
            </span>
          </div>
          <div class="col-xs-6 col-md-6{{ $errors->has('gender') ? ' has-error' : '' }}">
            <label >Gender</label>
            <select class="form-control" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <span class="help-block" style="display:{{($errors->has('gender')) ? 'block;' : 'none;'}};">
                {{ $errors->first('gender') }}
            </span>
           </div>

           <div class="col-xs-6 col-md-6{{ $errors->has('dob') ? ' has-error' : '' }}">
            <label> Date of Birth</label>
            <input type="text" placeholder="dd / mm / yyy" data-date-format="mm/dd/yy" name="dob" id="dp2"  class="date form-control input-lg" value="{{ old('dob') }}" />
              <script type="text/javascript">  
                $('.date').datepicker({  
                format: 'mm-dd-yyyy'  
                });  
              </script>
              <span class="help-block" style="display:{{($errors->has('dob')) ? 'block;' : 'none;'}};">
                   {{ $errors->first('dob') }}
              </span>
          </div>

          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('country') ? ' has-error' : '' }}">
            <label>Location</label>
            <select class="form-control" name="country">
            @foreach ($countries as $country)
              <option value="{{ $country->country_name }}" @if ( $country->country_name =='India')selected="selected" @endif>{{ $country->country_name }}</option>
            @endforeach
            </select>
              <span class="help-block" style="display:{{($errors->has('country')) ? 'block;' : 'none;'}};">
                  {{ $errors->first('country') }}
              </span>
          </div>          

          <div class="col-xs-12 col-md-6 col-lg-12{{ $errors->has('npcontact') ? ' has-error' : '' }}">
            <label>Nominee Details<sub> (optional)</sub></label>
            <input class="form-control input-lg" name="npcontact" placeholder="Email id / Mobile No" type="mobileno" value="{{ old('npcontact') }}"/>
              <span class="help-block" style="display:{{($errors->has('npcontact')) ? 'block;' : 'none;'}};">
                  {{ $errors->first('npcontact') }}
              </span>
          </div>

          <div class="checkbox icheck col-xs-12 col-md-6 col-lg-12{{ $errors->has('tnc') ? ' has-error' : '' }}">
            <label>By clicking Continue, you agree to our Terms and Conditions, including our Cookie Use.</label>
            <!--input type="checkbox" name="tnc" id="tnc">
            I agree to the <a href="#">Terms &amp; Conditions</a> </label>
              <span class="help-block" style="display:{{($errors->has('tnc')) ? 'block;' : 'none;'}};">
                  {{ $errors->first('tnc') }}
              </span-->            
          </div>
                    
          <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit"> Continue</button>
        </form> 

        </div> 

    </div>
  </div>
@endsection
