@extends('layouts.master')

@section('title')
Settings
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Settings </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-10 col-xs-10 col-md-10 general" >
          <!-- small box -->
          <div class="col-md-2 general">
            <ul class="nav nav-pills nav-stacked menu-level-2 active">
              <li><a href="#" data-target-id="general">General</a></li>
              <li><a href="#" data-target-id="privacy">Privacy</a></li>
              <li><a href="#" data-target-id="nominee">Nominee</a></li>
            </ul>
          </div>
          <div class="col-md-10 menu-level-2-content" id="general">
            <form class="form-horizontal form general">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Language</label>
                  <div class="col-sm-6">
                    <select class="form-control">
                      <option>English 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                   <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile No</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mobileno" placeholder="Mobile No" type="mobileno" />
                  </div>
                   <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email Id</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mobileno" placeholder="Email Id / Mobile No" type="mobileno" />
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Website</label>
                  <div class="col-sm-6">
                    <input type="form-control" class="form-control" id="inputPassword3" placeholder="www.skypaage">
                  </div>
                   <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Favorite Icon</label>
                  <div class="col-sm-6">
                    <select class="form-control">
                      <option>Flower/ Symbol</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                   <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Avatar</label>
                  <div class="col-sm-10">
                    <input type="file" id="exampleInputFile">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6 col-xs-offset-right-4">
                    <button type="update" class="btn btn-sm btn-block signup-btn">Update</button>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
          
          <div class="col-md-10 menu-level-2-content" id="privacy">
            <form class="form-horizontal form general">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email Id</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mobileno" placeholder="Email Id / Mobile No" type="mobileno" />
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile No</label>
                  <div class="col-sm-6">
                    <input class="form-control " name="mobileno" placeholder="Mobile No" type="mobileno" />
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Profile Display</label>
                  <div class="col-sm-6">
                    <select class="form-control">
                      <option>Only friends</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6 col-xs-offset-right-4">
                    <button type="update" class="btn btn-sm btn-block signup-btn">Update</button>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
          
          <div class="col-md-10 menu-level-2-content" id="nominee">
            <form class="form-horizontal form general">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email Id</label>
                  <div class="col-sm-6">
                    <input class="form-control " name="mobileno" placeholder="Email Id / Mobile No" type="mobileno" />
                  </div>
                  
                  <div class="col-sm-4">
                    <p><a href="#">Change </a></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Enter password">
                  </div>
                  <div class="col-sm-4"></div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile No</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mobileno" placeholder="Mobile No" type="mobileno" />
                  </div>
                   <div class="col-sm-4">
                    <p><a href="#">Change </a></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Can download</label>
                  <div class="col-sm-10 checkbox">
                    <label class="form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    Yes </label>
                    <label class="form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    No </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Can Share</label>
                  <div class="col-sm-10 checkbox">
                    <label class="form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    Yes </label>
                    <label class="form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    No </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6 col-xs-offset-right-4">
                    <button type="update" class="btn btn-sm btn-block signup-btn">Update</button>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6 col-xs-offset-right-4">
                  <h4>List of your Nominees </h4>
                  <p>Sandeep1</p>
                  <p>Sandeep2</p>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
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
