<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    @include('layout.main-admin-css')
    
  </head>
  <body>
    <div class="container-scroller">
  
      @include('layout.nav_admin')

        @yield('content')
      
        <!-- main-panel ends -->
      </div>
    {{-- </div> --}}
    <!-- container-scroller -->
    
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
    @include('layout.main-admin-js')
    <!-- End custom js for this page -->
  </body>
</html>