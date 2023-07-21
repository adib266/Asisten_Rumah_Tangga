@extends('landing.main')

@section('content')

<title>dt Profil</title>

</head>

<body>
    <section class="section about-section gray-bg" id="about">
        @foreach($detail as $dt)
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">{{$dt->nama}}</h3>
                        <h6 class="theme-color lead">{{$dt->pekerjaan}} Berpengalaman {{$dt->pengalaman}}</h6>
                        <p>{{$dt->deskripsi}}.</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Birthday</label>
                                    <p>{{$dt->ttl}}</p>
                                </div>
                                <div class="media">
                                    <label>Kecamata</label>
                                    <p>{{$dt->kecamatan}}</p>
                                </div>
                                @if ($dt->acc === null)
                                <div class="media">
                                    <label>Tanggal Kontrak</label>
                                    <p>Available</p>
                                </div>
                                @elseif($dt->acc === '0')
                                <div class="media">
                                    <label>Tanggal Kontrak</label>
                                    <p>Booked</p>
                                </div>
                                @else
                                <div class="media">
                                    <label>Tanggal Kontrak</label>
                                    <p>{{$dt->awal_kontrak}} - {{$dt->akhir_kontrak}}</p>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>No Wa</label>
                                    <p>{{$dt->no_wa}}</p>
                                </div>
                                <div class="media">
                                    <label>No Heandphone</label>
                                    <p>{{$dt->no_hp}}</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    @if($dt->acc === '0')
                                    <button disabled class="btn btn-primary btn-mg" href="/boking/{{$dt->id}}">Sedang Menunggu Konfrimasi Boking</button>
                                    @elseif($dt->acc === '1')
                                    <button disabled class="btn btn-primary btn-mg" href="/boking/{{$dt->id}}">Mulai Bekerja</button>
                                    @else
                                    <a class="btn btn-primary btn-mg" href="/boking/{{$dt->id}}">Pesan Sekarang</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <img src="{{ asset('storage/image/foto/'.$dt->foto)}}" title alt>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>
        </div>
    </section>
    </script>
</body>

</html>
@endsection