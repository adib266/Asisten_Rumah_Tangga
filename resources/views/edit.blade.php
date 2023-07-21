@include('headerdash') 
@include('navbardash')
@include('sidebar') 

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <span class="m-0 ">Edit Data Pekerjaan</span>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/update') }}"><- Kembali</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /Akhir content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card ">
          <div class="card-header">
            <h3 class="text-center ">Edit Data Pekerjaan</h3>
          </div>
         <!-- form start -->
          <form action="/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$pekerja->id}}">
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Foto</label>
                <input type="file" class="form-control"   name="image"  accept=".png, .jpg">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div> 
              <div class="form-group">
                <label for="nama">KTP</label>
                <input type="file" class="form-control"  name="image"  accept=".png, .jpg">
                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
              </div>
              <div class="form-group">
                <label for="jobs">Nama</label>
                <input type="text" class="form-control"  placeholder="Masukan Nama" required="required" name="nama" value="{{$pekerja->nama}}">
              </div>
              <div class="form-group">
                <label for="title">Pekerjaan</label>
                <input type="text" class="form-control"  placeholder="Masukan Jabatan" required="required" name="pekerjaan" value="{{$pekerja->pekerjaan}}">
              </div>
              <div class="form-group">
                <label for="description" class="form-label">Riwayat bekerja</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{$pekerja->riwayat}}</textarea>
              </div>
              <div class="form-group">
                <label for="description" class="form-label">Harga</label>
                <input class="form-control" name="salary" value="{{$pekerja->salary}}" type="nummber">
              </div>
              <div class=" mx-auto">
                <button type="submit" class="btn btn-success " value="Simpan Data">update</button>
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