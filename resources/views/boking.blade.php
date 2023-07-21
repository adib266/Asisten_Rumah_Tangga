<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boking</title>
  <!-- trixeditor -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<!-- jQuery -->
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card ">
          <div class="card-header">
            <h3 class="text-center ">Boking Asisten Rumah Tangga</h3>
          </div>
         <!-- form start -->
          <form action="/action_boking" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <input style="display:none;" name="id_pekerja" value="{{$detail->id}}">
              <div class="form-group">
                <label for="jobs">Nama Majikan</label>
                <input type="text" class="form-control" value="{{Auth::user()->username}}"  placeholder="Masukan Nama Anda" required="required" name="nama_majikan">
              </div>
              <div class="form-group">
                <label for="title">Nama Pekerja</label>
                <input type="text" class="form-control" value="{{$detail->nama}}"  placeholder="Masukan Nama Pekerja Yang Anda Pilih" required="required" name="nama_pekerja">
              </div>
              <div class="form-group">
                <label for="title">Tanggal Kotrak</label>
                <div class="row col-md-12">
                  <div class="col-md-6">
                  <input type="date" class="form-control"  placeholder="" required="required" name="awal_kontrak">
                  </div>
                  <div class="col-md-1">
                    s.d.
                  </div>
                  <div class="col-md-5">
                  <input type="date" class="form-control"  placeholder="" required="required" name="akhir_kontrak">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="description" class="form-label">Jenis Art Yang Anda Boking</label>
                <select class="form-control form-select form-select" aria-label=".form-select-sm example" name="jenis_art">
                    <option >---Jenis Art---</option>
                    <option value="Supir" <?php if ($detail->pekerjaan == "Supir"){ echo "selected";}; ?>>Supir</option>
                    <option value="Tukang Kebun"<?php if($detail->pekerjaan == "Tukang Kebun"){echo "selected";}; ?>>Tukang Kebun</option>
                    <option value="Pembantu Rumah"<?php if($detail->pekerjaan == "Pembantu Rumah"){echo "selected";}; ?>>Pembantu Rumah</option>
                    <option value="Satpam" <?php if($detail->pekerjaan == "Satpam" ){echo "selected";} ;?>>Satpam</option>
                    <option value="Babysitter" <?php if($detail->pekerjaan == "Babysitter"){ echo "selected";} ;?>>Babysitter</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="title">Tawar Gaji</label>
                <input type="text" class="form-control"  placeholder="Tawar Gaji Yang Anda Inginkan" required="required" name="tawar_gaji">
                <p class="fst-italic text-secondary">Penulisan Angka Tidak Disertai Tanda Titik ( . ),Contoh : 2000000</p>
              </div>
              <div class="row">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
                <a class="btn btn-secondary" style="margin-left: 20px;"  href="/majikan">Cancel</a>
              </div>
</div>

            </div>
          </form>
          <!-- Akhir form -->
        </div>
    </div>
  </div>
</section>
<!-- /Akhir main content -->

</div>