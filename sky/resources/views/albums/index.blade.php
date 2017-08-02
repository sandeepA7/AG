 
@extends('layouts.master')

@section('title')
My album
@endsection

@section('content')
<script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <section class="content-header">
      <h1> My Albums </h1>
      <ol class="breadcrumb">
        <li><a href="#"> <i class="fa" style="position:relative; bottom:2px;"><img src="{{URL::asset('dist/img/images/view-icon.png')}}"/> </i></a> </li>
        <li><a href="#" ><i class="fa  fa-user-plus"></i> </a> </li>
        <li><a href="#"><i class="fa fa-image"></i> </a></li>
        
        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded ="true"> <i class="glyphicon glyphicon-option-vertical"> </i>
        </a>
          <div class="dropdown-menu">
            <ul class="circle">
              <li><a href="#"> <i class="glyphicon glyphicon-heart"> </i> Add to Favourites </a> </li>
              <li><a href="#"> <i class="fa fa-download"></i>Download</a></li>
              <li><a href="#" class="bootmline"> <i class="fa fa-calendar-plus-o"></i>Create Separate Album</a></li>
              <li><a href="#"> <i class="fa fa-info-circle"></i>Details</a></li>
              <li><a href="#"> <i class="fa fa-pencil-square-o "></i>Rename</a></li>
              <li><a href="#"> <i class="glyphicon glyphicon-trash"></i>Delete</a></li>
            </ul>
             </div>
        </li>
        <li><a href="#"><i class="fa fa-list-ul"></i> </a></li>
        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-sort-alpha-asc"></i></a>
          <div class="dropdown-menu contextmenu" >
            <ul class="circle">
              <li><a href="#" > Name </a> </li>
              <li><a href="#">Date Modified</a> </li>
              <li><a href="#">Date Created</a> </li>
              <li><a href="#">Size</a> </li>
            </ul>
          </div>
        </li>
       </a>
        <li><a href="#"><i class="fa fa-info-circle"> </i></a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-10 col-xs-10 col-md-10 " >
          <!-- small box -->
          <div class="col-lg-3 col-xs-6 col-md-3 ">
           <div class="small-box">
              <div class="inner"> <img src="{{url::asset('dist/img/images/create-newalbum_bg.png')}}"> </div>
              <div class="icon"> </div>
            </div>
            <p class="createtitle"> Create new album</p>
            <form enctype="multipart/form-data" id="upload_form" file="true" name="album_form" role="form" method="POST">
            <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
            <span class="btn btn-default btn-file col-lg-7 col-md-3 col-sm-3"> <span>Choose photo</span>
            <input type="file" multiple id="images" name="images[]" /></span>
            <input type="hidden" name="images[]" id="images[]">
            <input class="btn btn-primary col-lg-4 col-md-3 col-sm-3 col-lg-offset-1 col-sm-offset-1 col-md-offset-1"  id="album_save" value="Save">
            </form>   
           @foreach( $albums as $albumdata )
           <div class="col-lg-3 col-xs-6 col-md-3">
            <div class="small-box">
              <div class="inner"> <a href=""><img src="{{url::asset('uploads/'.$albumdata->name)}}"> </a></div>
              <div class="icon"> </div>
            </div>
            <p>{{ $albumdata->name }}</p>
          </div>
          @endforeach 
           </div>


          <div class="col-lg-3 col-xs-6 col-md-3 "> 
          <div class="small-box"> 
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 col-md-3 "> </div>
          <div class="col-lg-3 col-xs-6 col-md-3 "> </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-2 col-md-2 adds">
          <!-- Adds box -->
          <div class="adds">
            <h3>Share your movements here at AlbumGift</h3>
          </div>
          <div class="adds">
            <h3>Store your data we give secure</h3>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal create new album -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Create New Album</h4>
        </div>
        <div class="modal-body">
          <form class="form" role="form">
            <div class="form-group">
              <label class="">Untitled folder</label>
              <input type="text" class="form-control" id="albumname" />
              <label>Discription</label>
              <textarea class="form-control" id="inputComment" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- /.content-wrapper -->  
@include('albums.album_js')

@endsection