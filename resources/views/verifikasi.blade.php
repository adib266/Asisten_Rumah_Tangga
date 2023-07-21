@include('headerdash') 
@include('navbardash')
@include('sidebar') 


<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase">Data Pekerjaan</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="{{ url('/tambah') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-success flex"
                                            value="Submit"
                                        >
                                            Tambah Pekerjaan
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                    {{--
                                    <a href="{{ url('/tambah') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-success flex"
                                            value="Submit"
                                        >
                                            View CV
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </a>
                                    --}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Foto</th>
                                        <th>Ktp</th>
                                        <th>Nama Pekerja</th>
                                        <th>TTL</th>
                                        <th>Pekerjaan</th>
                                        <th>Kecamatan</th>
                                        <th>Kode Pos</th>
                                        <th>Pengalamana</th>
                                        <th>Nomor HP</th>
                                        <th>Nomor Whatsapp</th>
                                        <th>Deskripsi</th>
                                        <th>Gaji</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                    @foreach($verifikasi as $p)
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="{{ asset('storage/image/foto/'.$p->foto)}}"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                        <td>
                                            <img
                                            src="{{ asset('storage/image/ktp/'.$p->ktp)}}"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                       
                                        <td>{{$p->nama}}</td>
                                        <td>{{$p->ttl}}</td>
                                        <td>{{$p->pekerjaan}}</td>
                                        <td>{{$p->kecamatan}}</td>
                                        <td>{{$p->kode_pos}}</td>
                                        <td>{{$p->pengalaman}}</td>
                                        <td>{{$p->no_hp}}</td>
                                        <td>{{$p->no_wa}}</td>
                                        <td>{{$p->deskripsi}}</td>
                                        <td>{{$p->gaji}}</td>
                                        <td>
                                            @if($p->status == null)
                                            <span class="badge text-bg-warning">Belum Terverivikasi</span>
                                            @else
                                            <span class="badge text-bg-succes">Terverivikasi</span>
                                            @endif
                                           
                                        </td>
                                      
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="/upprove/{{$p->id}}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                    <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="/hapus/{{$p->id}}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i
                                                            class="fa-solid fa-trash-can"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="/edit/{{$p->id}}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning"
                                                    >
                                                    <i class="bi bi-brush"></i>
                                                    </button>
                                                </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            
                            </table>
                            <div class="pt-3">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Akhir content wrapper -->

@include('footerdash')
