
<!-- jQuery 3 -->
<script src="{{ asset('dashboard/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('dashboard/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('dashboard/js/adminlte.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- <script src="{{ asset('dashboard/js/Chart.js')}}"></script> -->

<script src="{{ asset('dashboard/js/jquery.flot.js')}}"></script>
<script src="{{ asset('dashboard/js/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('dashboard/js/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('dashboard/js/jquery.flot.categories.js')}}"></script>

<!--ck editor-->
<script src="{{asset('dashboard/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('dashboard/ckeditor/styles.js')}}"></script>
<script src="{{asset('dashboard/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('dashboard/ckeditor/ckeditor.Custom.js')}}"></script>
<!--ck editor-->

<!-- DataTables -->
<script src="{{asset('dashboard/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/js/dataTables.bootstrap.min.js')}}"></script>
<!-- DataTables -->

<script src="{{ asset('dashboard/js/index.js')}}"></script>

@yield('Custom-scripts')
@yield('Custom-ckeditor')
@yield('data-tables')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
   Both of these plugins are recommended to enhance the
   user experience. -->
