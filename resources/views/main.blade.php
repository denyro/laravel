<!DOCTYPE html>
<html lang="en">
  @include('element._head')
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('element._nav')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      @include('element._breadcrumb')
      @yield('content')    
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('element._footer')
    @include('element._logoutmodal')
    @include('element._javascript')
  </div>
</body>
</html>
