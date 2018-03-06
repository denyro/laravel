<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{{ URL::asset('theadmin/dist/img/user2-160x160.jpg')}}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Tim Siber</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview {{ Request::is('sosmed/*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-comments-o"></i> <span>SosMed</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('sosmed/facebook') ? 'active' : '' }}"><a href="{{ url('sosmed/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
          </ul>
        </li>
        <li class="{{ Request::is('mainmedia') ? 'active' : '' }}"><a href="{{ url('mainmedia') }}"><i class="fa fa-newspaper-o"></i> <span>MainMed</span></a></li>
        <li class="{{ Request::is('analisis') ? 'active' : '' }}"><a href="{{ url('analisis') }}"><i class="fa fa-laptop"></i> <span>Analisis</span></a></li>
        <li><a href="#"><i class="fa fa-pencil-square-o"></i> <span>Rekomendasi</span></a></li>
        <li class="{{ Request::is('wilayah') ? 'active' : '' }}"><a href="{{ url('wilayah') }}"><i class="fa fa-map-o"></i> <span>Wilayah</span></a></li>
        <li><a href="#"><i class="fa fa-wifi"></i> <span>Wifi-X</span></a></li>
        <li><a href="#"><i class="fa fa-users"></i> <span>Survei</span></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i> <span>Agenda</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>