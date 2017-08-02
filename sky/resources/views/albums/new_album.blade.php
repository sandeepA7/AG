@extends('layouts.master')

@section('title')
Settings
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Create New Album </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-10 col-xs-10 col-md-10 general" >
          <!-- small box -->

          <div class="col-md-10 menu-level-2-content" >
            <form action="{{ url('album/save_album') }}" method="POST" class="form-horizontal form general" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Album Name</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="name" placeholder="Album Name" type="name" />
                  </div>
                   <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-6">
                    <textarea class="form-control" name="description" placeholder="Album Description"></textarea>
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6 col-xs-offset-right-4">
                    <button type="create" class="btn btn-sm btn-block signup-btn">Create Album</button>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
          

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
