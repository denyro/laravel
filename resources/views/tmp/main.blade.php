<!doctype html>
<html lang="en">
    @include('partials._head')
  <body>
    @include('partials._nav')   
    <div class="container">
      @yield('content')
    </div>
    @include('partials._javascript')
  </body>
</html>