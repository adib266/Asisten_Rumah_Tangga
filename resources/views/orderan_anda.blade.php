@extends('pegawai.main')
@section('content')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase">Data Orderan Anda</h3>
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama Majikan</th>
                                        <th>Nama Pekerja</th>
                                        <th>Jenis Art</th>
                                        <th>Tawaran Gaji</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                    @foreach($boking as $p)
                                    <?php if  (Auth::user()->username  == $p->nama_pekerja){ ?>
                                    <tr class="text-center text-break">
                                        <td>{{$p->nama_majikan}}</td>
                                        <td>{{$p->nama_pekerja}}</td>
                                        <td>{{$p->jenis_art}}</td>
                                        <td>Rp.{{$p->tawar_gaji}}</td>
                                        <td>
                                            @if($p->acc == null)
                                            <span class="badge badge-secondary">Belum Terkonfrimasi</span>
                                            @else
                                            <span class="badge badge-secondary">Terkonfrimasi</span>
                                            @endif
                                           
                                        </td>
                                      
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="/acc/{{$p->id}}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                    <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="/hapus_boking/{id}"
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
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
@endsection