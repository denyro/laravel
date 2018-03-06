<!DOCTYPE html>

<html>
@include('component._head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  @include('component._header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('component._sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('component._pageheader')

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @yield('content') 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('component._footer')
  <!-- Control Sidebar -->
  @include('component._controlsb') 
</div>
<!-- ./wrapper -->
@include('component._javascript')
@yield('appjs')
</body>
</html>