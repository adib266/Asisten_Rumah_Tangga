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
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama Majikan</th>
                                        <th>Nama Pekerja</th>
                                        <th>Jenis Art</th>
                                        <th>Tawar Gaji</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                    @foreach($boking as $p)
                                    <tr class="text-center text-break">
                                        <td>{{$p->nama_majikan}}</td>
                                        <td>{{$p->nama_pekerja}}</td>
                                        <td>{{$p->jenis_art}}</td>
                                        <td>{{$p->tawar_gaji}}</td>
                                      
                                        <!-- <td>
                                            @if($p->status == null)
                                            <span class="badge text-bg-warning">Belum Terverivikasi</span>
                                            @else
                                            <span class="badge text-bg-succes">Terverivikasi</span>
                                            @endif
                                           
                                        </td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            
                            </table>
                        </div>
</div>
</div>
</div>
</div>
</div>
                        @include('footerdash')