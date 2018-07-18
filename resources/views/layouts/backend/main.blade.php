<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | {{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/dataTables.bootstrap.min.css') }}">
  <!-- jvectormap -->
  {{-- <link rel="stylesheet" href="{{ asset('backend-assets/css/jquery-jvectormap.css') }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('backend-assets/css/_all-skins.min.css') }}">
  {{-- Bootstrap DatePicker --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
  {{-- Bootstrap jansy thumnail show --}}  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
  
  @yield('style')
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  @include('layouts.backend.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.backend.sidebar')
  <!-- Content Wrapper. Contains page content -->
  
  @section('title','MyBlog | Dashboard')
  
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://mbtech.info">Mbtech - Build with <i class="fa fa-heart"></i></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- jQuery 3 -->
<script src="{{ asset('backend-assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('backend-assets/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('backend-assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/dataTables.bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('backend-assets/js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend-assets/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend-assets/js/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
{{-- <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> --}}
{{-- <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> --}}
<!-- SlimScroll -->
<script src="{{ asset('backend-assets/js/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
{{-- <script src="{{ asset('backend-assets/js/Chart.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment-with-locales.min.js"></script>
{{-- Bootstrap DatePicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
{{-- Bootstrap Jansy Show Thumbnail --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend-assets/js/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend-assets/js/demo.js') }}"></script>
<!-- page script -->
<!-- ./wrapper -->
@yield('scripts')
<script>
        var oTable = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('datatable/getdata') }}',
            data: function (d) {
                d.status = $('select[name=status]').val();
            }
        },
        columns: [
            {data: 'action', name: 'action', orderable: false, searchable: false},
            {data: 'title', name: 'title'},
            {data: 'author.name', name: 'author.name', orderable: false},
            {data: 'category.title', name: 'category.title', orderable: false},
            {data: 'created_at', name: 'created_at'},
            {data: 'status', name: 'status'}
        ]
    });
    $('select').on('change', function(e) {
        // alert(this.value);
        oTable.draw();
        e.preventDefault();
    });
</script>
</body>
</html>
