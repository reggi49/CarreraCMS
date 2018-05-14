  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Auth::user()->avatar()}}" class="img-circle" alt="{{ Auth::user()->name}}">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="{{url('backend/home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Pots</span>
            <span class="pull-right-container">
              {{-- <span class="label label-primary pull-right">4</span> --}}
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('backend.blog.index')}}"><i class="fa fa-circle-o"></i> Semua Posts</a></li>
            <li><a href="{{ route('backend.blog.create')}}"><i class="fa fa-circle-o"></i> Tambah Baru</a></li>
            {{-- <li><a href="{{ route('categories.index')}}"><i class="fa fa-circle-o"></i> Kategori</a></li> --}}
          </ul>
        </li>
        @if (check_user_permissions(request(), "Categories@index"))
        <li>
          <a href="{{ route('backend.categories.index')}}">
            <i class="fa fa-server"></i> <span>Kategori</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endif
        <li>
          <a href="{{ route('backend.tags.index')}}">
            <i class="ion ion-ios-pricetag-outline"></i> <span>Tag</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        <li>
          <a href="{{ url('backend/media')}}">
            <i class="fa fa-folder-open"></i>
            <span>Media</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laman</span>
          </a>
        </li>
        <li>
          <a href="{{ route('backend.comments.index')}}">
            <i class="fa fa-comments"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">3</small>
            </span>
          </a>
        </li>
        @if(check_user_permissions(request(),"Users@index"))
        <li>
          <a href="{{ route('backend.users.index')}}">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">3</small> --}}
            </span>
          </a>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>