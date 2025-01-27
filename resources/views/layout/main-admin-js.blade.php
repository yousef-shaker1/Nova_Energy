<script src="{{ URL::asset('assets/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ URL::asset('assets/js/chart.umd.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ URL::asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ URL::asset('assets/js/misc.js') }}"></script>
<script src="{{ URL::asset('assets/js/settings.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.cookie.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ URL::asset('assets/js/dashboard.js') }}"></script>

@yield('js')