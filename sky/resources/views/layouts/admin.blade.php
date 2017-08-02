<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Albumgift | Dashboard Page</title>
<link href="css/bootsrap-regis.css" rel="stylesheet">
<link href="css/sticky-footer.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div id="wrap">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="images/main-logo.jpg" class="img-responsive" /></a> </div>
                                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
