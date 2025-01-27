<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    @include('layout.main-admin-css')
    
  </head>
  <body>
    <div class="container-scroller">
  
      @include('layout.nav_admin')

        @yield('content')
      
        <!-- main-panel ends -->
      </div>
    </div>
    <!-- container-scroller -->
    @include('layout.main-admin-js')
    <!-- End custom js for this page -->
  </body>
</html>