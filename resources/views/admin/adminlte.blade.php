<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring | Polutan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/custom.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="/" class="logo">
        <span class="logo-mini"><b>M</b>PL</span>
        <span class="logo-lg"><b><h3>Monitoring</b> Polutan</h3></span>
      </a>
      <nav class="navbar navbar-static-top">
        <div class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="active treeview">
            <li><a href="/"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
            <li><a href="/statistik"><i class="fa fa-bar-chart"></i> <span>Chart</span></a></li>
            <li><a href="/table"><i class="fa fa-table"></i> <span>Table</span></a></li>
          </ul>
        </section>
      </aside>
      @yield('content')
      <div class="control-sidebar-bg"></div>
    </div>
    <script src="{{url('assets/adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="{{url('assets/adminlte/dist/js/chartJs/Chart.min.js')}}"></script>
    
    @yield('statistik')
    
    @yield('statistik2')

    <script src="{{url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{url('assets/adminlte/dist/js/adminlte.min.js')}}"></script>
    <script src="{{url('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{url('assets/adminlte/dist/js/demo.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>

    <script>
      $('#example1').DataTable( {
        language: {
          "sProcessing":   "Sedang memproses...",
          "sLengthMenu":   "Tampilkan _MENU_ Data",
          "sZeroRecords":  "Tidak ditemukan data yang sesuai",
          "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 data",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
          "sInfoPostFix":  "",
          "sSearch":       "Cari:",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "Sebelumnya",
            "sNext":     "Selanjutnya",
            "sLast":     "Terakhir"
          }
        }
      } );
    </script>
  </body>
  </html>
