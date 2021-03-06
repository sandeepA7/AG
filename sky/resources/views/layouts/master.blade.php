<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Albumgift</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/flat/blue.css') }}">
<!-- Morris chart -->
<link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

<!-- <link rel="stylesheet" href="{{ URL::asset('dist/css/custom.css') }}"> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LBG</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Album</b>gift</span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-bell"></i> <span class="label label-success">4</span> </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 Notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <!-- start message -->
                    <a href="#">
                    <div class="pull-left"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <!-- end message -->
                  <li> <a href="#">
                    <div class="pull-left"> <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> AdminLTE Design Team <small><i class="fa fa-clock-o"></i> 2 hours</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Developers <small><i class="fa fa-clock-o"></i> Today</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Sales Department <small><i class="fa fa-clock-o"></i> Yesterday</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Reviewers <small><i class="fa fa-clock-o"></i> 2 days</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-comment"></i> <span class="label label-warning">10</span> </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 Messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li> <a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today </a> </li>
                  <li> <a href="#"> <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                    page and may cause design problems </a> </li>
                  <li> <a href="#"> <i class="fa fa-users text-red"></i> 5 new members joined </a> </li>
                  <li> <a href="#"> <i class="fa fa-shopping-cart text-green"></i> 25 sales made </a> </li>
                  <li> <a href="#"> <i class="fa fa-user text-red"></i> You changed your username </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu" style="display:none;"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Sachin Tendulkar</span> </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p> Sachin Tendulkar - Cricket <small>Member Month 1986</small> </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
                  <div class="col-xs-4 text-center" > <a href="#">Nominee's</a> </div>
                  <div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
                <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
        </ul>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form searchbar">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
          </span> </div>
      </form>
      <!-- /.search form -->
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  @include('layouts.sidebar')
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 @yield('content')
  </div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs"> Privacy | Terms | Help | Feedback </div>
  <p> You have used 10.3GB storage 
    Copyright &copy;2016 All rights reserved.</p>
</footer>
<!-- Control Sidebar -->

 <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-stats-tab" data-toggle="tab"></i></a> </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Share</h3>
        <ul class="control-sidebar-menu">
          <li> <a href="javascript:void(0)"> </a></li>
        </ul>
        <!-- /.control-sidebar-menu -->
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">
        <h3 class="control-sidebar-heading">Share</h3>
        <form class="form" role="form">
          <div class="form-group">
            <label>Invite friends</label>
            <textarea class="form-control" id="inputComment" rows="2"  placeholder="invite by names/Email id"  type="text" ></textarea>
          </div>
          
          <div class="form-group">
                <select class="form-control">
                  <option selected="selected">View</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
          
          
          
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Already shared with</h3>
              <div class="box-tools pull-right">
                <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-plus"></i> </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <!---Schdule already shared users open--->
              <div class="user-panel sharedwith">
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
                <div class="pull-left image schdule"> <img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"> </div>
              </div>
              <!--Schdule already shared users close--->
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Schedule your sharing</h3>
              <div class="box-tools pull-right">
                <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-plus"></i> </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="form-group">
                <!-- Date and time range -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"> <i class="fa fa-clock-o"></i> </div>
                    <input type="text" class="form-control pull-right" id="reservationtime">
                  </div>
                  
                  <!-- /.input group -->
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" id="inputComment" rows="2"  placeholder="Say something"  type="text" ></textarea>
                  </div>
                <!-- /.form group -->
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <button type="button" class="btn btn-primary">Done</button>
        </form>
      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <!-- /.tab-pane -->
    </div>
  </aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div> 
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
 
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ URL::asset('plugins/select2/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{ URL::asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ URL::asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE for demo purposes -->
 
</body>
</html>
