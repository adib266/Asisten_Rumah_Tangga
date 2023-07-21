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
                                    <a href="{{ url('/admin') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-success flex"
                                            value="Submit"
                                        >
                                            View Pekerjaan
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
                                        <th>KTP</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        
                                        <th>Riwayat</th>
                                        <th>Harga</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="images/cv/person1.png"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                        <td>
                                            <img
                                                src="images/cv/web1.png"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                       
                                        <td>Nama</td>
                                        <td>Pekerjaan</td>
                                        <td>Riwayat</td>
                                        <td>Harga</td>
                                      
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="{{ url('/edit') }}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                        <i
                                                            class="fa-solid fa-pen-to-square"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="#"
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
                                                    href="{{ url('/admin') }}"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
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