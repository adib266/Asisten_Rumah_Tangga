<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftran</title>
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
<section class="content" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card ">
          <div class="card-header">
            <h3 class="text-center ">Lengkapi Data Diri Anda</h3>
          </div>
         <!-- form start -->
          <form action="/action_pekerja" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="title">Nama Pekerja</label>
                <input type="text" class="form-control" value="{{ Auth::user()->username }}" placeholder="Masukan Nama Anda" required="required" name="nama">
              </div>
              <div class="form-group">
                <label for="jobs">No NIK</label>
                <input type="number" class="form-control"  placeholder="Silahkan Masukkan No NIK Anda" required="required" name="nik"  pattern="[0-9]{16}">
              </div>
              <div class="form-group">
                <label for="jobs">Tempat Tanggal Lahir</label>
                <input type="date" class="form-control"  placeholder="Contoh: Tegal,06 maret 2000" required="required" name="ttl">
              </div>
              <div class="form-group">
                <label for="jobs">Alamat</label>
                <input type="text" class="form-control"  placeholder="Silahkan Masukkan Alamat Jalan Anda" required="required" name="alamat">
              </div>
              <div class="form-group">
                <label for="jobs">Desa Tempat Tinggal</label>
                <input type="text" class="form-control"  placeholder="Isikan Nama Desa Tempat Tinggal Anda" required="required" name="desa">
              </div>
              <div class="form-group">
                <label for="jobs">Kecamatan Tempat Tinggal</label>
                <input type="text" class="form-control"  placeholder="Isikan Kecamatan Tempat Tinggal Anda" required="required" name="kecamatan">
              </div>
              <div class="form-group">
                <label for="jobs">Kode Pos</label>
                <input type="number" class="form-control"  placeholder="Silahkan Masukkan Kode Pos Anda" required="required" name="kode_pos">
              </div>
              <div class="form-group">
                <label for="description" class="form-label">Silahkan Pilih Pekerjaan Anda</label>
                <select class="form-select form-select" aria-label=".form-select-sm example" name="pekerjaan">
                    <option selected>Jenis Art</option>
                    <option value="Supir">Supir</option>
                    <option value="Tukang Kebun">Tukang Kebun</option>
                    <option value="Pembantu Rumah">Pembantu Rumah</option>
                    <option value="Satpam">Satpam</option>
                    <option value="Babysitter">Babysitter</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="jobs">Pengalman</label>
                <input type="text" class="form-control"  placeholder="Contoh : 1 Tahun" required="required" name="pengalaman">
              </div>
              <div class="form-group">
                <label for="jobs">No HP</label>
                <input type="number" class="form-control"  placeholder="Silahkan Masukkan No Heandphone" required="required" name="no_hp">
              </div>
              <div class="form-group">
                <label for="jobs">No WA</label>
                <input type="number" class="form-control"  placeholder="Silahkan Masukkan No Whatsapp" required="required" name="no_wa">
              </div>
              <div class="form-group">
                <label for="jobs">Deskripsi</label>
                <input type="text" class="form-control"  placeholder="Silahkan Masukkan Deskripsi Diri Anda" required="required" name="deskripsi">
              </div>
              <div class="form-group">
                <label for="nama">Foto Diri</label>
                <input type="file" class="form-control"  required="required"  name="foto" accept=".png, .jpg">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div>
              <div class="form-group">
                <label for="nama">Foto KTP</label>
                <input type="file" class="form-control"  required="required"  name="ktp" accept=".png, .jpg">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div>
              <div class="form-group">
                <label for="title">Jumlah Gaji Yang Anda Inginkan</label>
                <input type="number" class="form-control"  placeholder="Tawar Gaji Yang Anda Inginkan" required="required" name="gaji">
                <p class="fst-italic text-secondary">Penulisan Angka Tidak Disertai Tanda Titik ( . ),Contoh : 2000000</p>
              </div>

              <div class="col-md-6">
    <button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
    <a class="btn btn-secondary" style="margin-left: 20px" href="/pegawai">Cancel</a>
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
