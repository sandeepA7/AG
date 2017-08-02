    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> <img src="{{ URL::asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fname }} <a href="#"> <i class="fa fa-fw fa-caret-down"> </i> </a> <br/>
            <span class="textinfo">{{ Auth::user()->email }}</span>
            <br/>
            <span class="textinfo"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></span> 
            </p>

        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">
          <a href="{{ url('/album/create-album') }}" ><input type="button"  value="New Album" class="btn btn-primary"></a>
        </li>
        <li class="active treeview"> <a href="{{ url('/album') }}"> <i class="glyphicon glyphicon-book"></i> <span>My Albums</span> </a> </li>
        <li class="treeview"> <!--a href="{{ url('/album/shared-album') }}"--><a href="#"> <i class="glyphicon glyphicon-picture"></i> <span>Shared Albums</span> </a> </li>
        <li> <!--a href="{{ url('/album/fav-album') }}"--> <a href="#"><i class="glyphicon glyphicon-heart"></i> <span>Favourites</span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="glyphicon glyphicon-time"></i> <span>Recent</span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="glyphicon glyphicon-trash"></i> <span>Trash</span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>My Dairy</span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span> Reminders</span> </a> </li>
        <li> <a href="#"> <i class="fa fa-users"></i> <span>People</span> </a> </li>
        <li> <a href="#"> <i class="glyphicon glyphicon-comment"></i> <span>Messages</span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="glyphicon glyphicon-bell"></i> <span>Notifications</span> </a> </li>
        <li class="treeview"> <a href="#"> <!--a href="{{ url('/album/settings') }}"--> <i class="glyphicon glyphicon-cog"></i> <span>Settings</span> </a> </li>
      </ul>
    </section>
    <!-- /.sidebar -->