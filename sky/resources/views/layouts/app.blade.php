<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Albumgift | Registration Page</title>
<link href="{{ asset('css/bootsrap-regis.css') }}" rel="stylesheet">
<link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>
<body>
<div id="wrap">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="{{ asset('images/main-logo.jpg') }}" class="img-responsive" /></a> </div>
      <div class="collapse navbar-collapse">
      <form class="navbar-form navbar-right" id="header-form"  role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}
          
          @if (Request::segment(1) != 'register-nominee')
          <div class="lt-left">
            <div class="form-group">
              <!--input type="text" id="login_username" class="form-control input-sm" placeholder="Username/mobile" name="login_username" value="{{ urldecode(Request::segment(2)) }}"-->
              @if (Request::segment(1) == 'nominee')
              <input type="text" id="login_username" class="form-control input-sm" placeholder="Username/mobile" name="login_username" value="{{ urldecode(Request::segment(2)) }}">
              @else
              <input type="text" id="login_username" class="form-control input-sm" placeholder="Username/mobile" name="login_username" value="">              
              @endif
            </div>
            <div class="form-group">
              <input type="password" id="login_password" name="login_password" class="form-control input-sm" placeholder="Password">
            </div>
            <!--div class="checkbox" style="display:none;">
              <label>
              <input type="checkbox" name="remember">
              Remember me </label>
            </div-->
          </div>
          <div class="lt-right">
            <button type="submit" class="btn-default login-btn">Sign In</button>
          </div>
          @endif
          <div id="msg" class="{{ ($message = Session::get('success')) ? 'alert alert-success' : 'help-block' }}" style="display:{{($errors->has('login_username') || $errors->has('login_password') || $message = Session::get('warning') || $message = Session::get('success')) ? 'block;' : 'none;'}}">
              <p>
                @if ($errors->has('login_username'))
                  {{ $errors->first('login_username') }}
                @endif
                @if ($errors->has('login_password') && !$errors->has('login_username'))
                  {{ $errors->first('login_password') }}
                @endif
                @if ($message = Session::get('warning'))
                  {{ $message }}
                @endif
                @if ($message = Session::get('success'))
                    {{ $message }}
                @endif                
              </p>
          </div>
          
          {{--@if ($errors->has('login_username'))
                <div class="alert alert-warning">
                    <p>{{ $errors->first('login_username') }}</p>
                </div>
          @endif
          @if ($errors->has('login_password'))
                <div class="alert alert-warning">
                    <p>{{ $errors->first('login_password') }}</p>
                </div>
          @endif

          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif

          @if ($message = Session::get('warning'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif

          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif--}}          

        </form>
      </div>
    </div>
    
  </div>
  @yield('content')  
    
</div>



<div  class="col-lg-12 homefooter">
  <ul>
    <li><a href="#">Video </a>  </li>
    <li> <a href="#">Feedback  </a></li>
    <li><a href="#"> Cookies  </a></li>
    <li> <a href="#"> Careers </a> </li>
    <li> <a href="#"> Contact Us </a> </li>
    </ul> </div>

</body>
</html>