@extends('layouts.master')

@section('title')
My Album
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> My Album </h1>
    <ol class="breadcrumb">
      <li> <a href="#" > <i class="fa" style="position:relative; bottom:2px;"><img src="{{ URL::asset('dist/img/images/view-icon.png') }}"/> </i> </li>
      <li><a href="#" ><i class="fa  fa-user-plus"></i> </a> </li>
      <li><a href="#"><i class="fa fa-image"></i> </a></li>
      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" > <i class="glyphicon glyphicon-option-vertical"></i>
        <div class="dropdown-menu">
        <ul class="circle">
          <li><a href="#"><i class="glyphicon glyphicon-heart"></i> Add to Favourites</a></li>
          <li><a href="#"><i class="fa fa-download"></i>Download</a></li>
          <li><a href="#" class="bootmline"><i class="fa fa-calendar-plus-o"></i>Create Separate Album</a></li>
          <li><a href="#"><i class="fa fa-info-circle"></i>Details</a></li>
          <li><a href="#"><i class="fa fa-pencil-square-o "></i>Rename</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-trash"></i>Delete</a></li>
        </ul>
        </a>      </div> </li>
      
      <li><a href="#"><i class="fa fa-list-ul"></i> </a></li>
      
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" > <i class="fa fa-sort-alpha-asc"></i>
        <div class="dropdown-menu">
          <ul class="circle">
            <li> <a href="#"> Name</a> </li>
            <li><a href="#">Date Modified</a> </li>
            <li><a href="#">Date Created</a> </li>
            <li><a href="#">Size</a> </li>
          </ul>
          </div></a>      </li> 
      <li><a href="#"><i class="fa fa-info-circle"> </i></a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-10 col-xs-10 col-md-10 " >
        @if(Session::has('success'))
          <div class="alert-box success">
            <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <!-- small box -->
        <div class="col-lg-3 col-xs-6 col-md-3 ">
          <div class="small-box">
            <div class="inner"> <img src="{{ URL::asset('dist/img/upload.png') }}"> </div>
            <div class="icon"> </div>
          </div>
          <!-- <p>Create New Album</p> -->
          {!! Form::open(array('url'=>'/album/multiple_upload','method'=>'POST', 'files'=>true)) !!} 
          {!! Form::file('images[]', array('multiple'=>true,'id'=>"exampleInputFile")) !!}
          <input type="hidden" name="album_id" id="album_id" value="{{ $album_id }}"> 
            <p >{!!$errors->first('images')!!}</p>
            @if(Session::has('error'))
            <p >{!! Session::get('error') !!}</p>
            @endif 
          {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
          {!! Form::close() !!}
        </div>
        <div class="col-lg-3 col-xs-6 col-md-3 ">
          
        </div>
        <div class="col-lg-3 col-xs-6 col-md-3 ">
          
        </div>
        <div class="col-lg-3 col-xs-6 col-md-3 ">
          
        </div>
        @if ( !empty($photo))
    @if ( !$photo->count() )
    @else
        <!-- small box -->
          @foreach( $photo as $index => $photodata )
          <?php  $i=$index+1; ?>
          <div class="col-lg-3 col-xs-6 col-md-3 ">
            <div class="small-box">
              <div class="inner"> <img src="{{ URL::asset('uploads/'.$photodata->name) }}"> </div>
              <div class="icon"> </div>
            </div>
            <p>{{ $photodata->name }}</p>
          </div>
          @endforeach
      @endif 
    @endif          
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
@endsection
