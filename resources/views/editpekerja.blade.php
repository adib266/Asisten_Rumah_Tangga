@include('headerdash') 
@include('navbardash')
@include('sidebar') 

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <span class="m-0 ">Edit Pekerja </span>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/verifikasi') }}"><- Kembali</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /Akhir content-header -->

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
         
          <form action="/edit-pekerja/{{$pekerja->id}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="title">Nama Pekerja</label>
                <input type="text" class="form-control" value="{{ $pekerja->nama }}" placeholder="Masukan Nama Anda" required="required" name="nama">
              </div>
              <div class="form-group">
                <label for="jobs">No NIK</label>
                <input type="number" class="form-control" value="{{ $pekerja->nik }}"  placeholder="Silahkan Masukkan No NIK Anda" required="required" name="nik">
              </div>
              <div class="form-group">
                <label for="jobs">Tempat Tanggal Lahir</label>
                <input type="date" class="form-control" value="{{ $pekerja->ttl }}" placeholder="Contoh: Tegal,06 maret 2000" required="required" name="ttl">
              </div>
              <div class="form-group">
                <label for="jobs">Alamat</label>
                <input type="text" class="form-control" value="{{ $pekerja->alamat }}" placeholder="Silahkan Masukkan Alamat Jalan Anda" required="required" name="alamat">
              </div>
              <div class="form-group">
                <label for="jobs">Desa Tempat Tinggal</label>
                <input type="text" class="form-control" value="{{ $pekerja->desa }}" placeholder="Isikan Nama Desa Tempat Tinggal Anda" required="required" name="desa">
              </div>
              <div class="form-group">
                <label for="jobs">Kecamatan Tempat Tinggal</label>
                <input type="text" class="form-control" value="{{ $pekerja->kecamatan }}"  placeholder="Isikan Kecamatan Tempat Tinggal Anda" required="required" name="kecamatan">
              </div>
              <div class="form-group">
                <label for="jobs">Kode Pos</label>
                <input type="number" class="form-control" value="{{ $pekerja->kode_pos }}" placeholder="Silahkan Masukkan Kode Pos Anda" required="required" name="kode_pos">
              </div>
              <div class="form-group">
                <label for="description" class="form-label">Silahkan Pilih Pekerjaan Anda</label></br>
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
                <input type="text" class="form-control" value="{{ $pekerja->pengalaman }}"  placeholder="Contoh : 1 Tahun" required="required" name="pengalaman">
              </div>
              <div class="form-group">
                <label for="jobs">No HP</label>
                <input type="number" class="form-control" value="{{ $pekerja->no_hp }}" placeholder="Silahkan Masukkan No Heandphone" required="required" name="no_hp">
              </div>
              <div class="form-group">
                <label for="jobs">No WA</label>
                <input type="number" class="form-control" value="{{ $pekerja->no_wa }}"  placeholder="Silahkan Masukkan No Whatsapp" required="required" name="no_wa">
              </div>
              <div class="form-group">
                <label for="jobs">Deskripsi</label>
                <input type="text" class="form-control" value="{{ $pekerja->deskripsi }}" placeholder="Silahkan Masukkan Deskripsi Diri Anda" required="required" name="deskripsi">
              </div>
              <div class="form-group">
                <label for="jobs">Deskripsi</label>
                <input type="text" class="form-control" value="{{ $pekerja->deskripsi }}" placeholder="Silahkan Masukkan Deskripsi Diri Anda" required="required" name="status">
              </div>
              <div class="form-group">
                <label for="nama">Foto Diri</label>
                <input type="file" class="form-control" value="{{ $pekerja->foto }}" name="foto">
                <img src="{{ asset('storage/image/foto/'.$pekerja->foto)}}" alt="" width="400px" height="300px" style="margin-top: 4px;">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div>
              <div class="form-group">
                <label for="nama">Foto KTP</label>
                <input type="file" class="form-control" value="{{ $pekerja->ktp }}" name="ktp">
                <img src="{{ asset('storage/image/ktp/'.$pekerja->ktp)}}" alt="" width="400px" height="300px" style="margin-top: 4px;">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div>
              <div class="form-group">
                <label for="title">Jumlah Gaji Yang Anda Inginkan</label>
                <input type="text" class="form-control" value="{{ $pekerja->gaji }}" placeholder="Tawar Gaji Yang Anda Inginkan" required="required" name="gaji">
                <p class="fst-italic text-secondary">Penulisan Angka Tidak Disertai Tanda Titik ( . ),Contoh : 2000000</p>
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-success" >Simpan</button>
                <a class="btn btn-secondary" style="margin-left: 20px" href="/verifikasi">Cancel</a>
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

@include('footerdash')