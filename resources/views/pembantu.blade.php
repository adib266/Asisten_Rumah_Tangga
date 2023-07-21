@extends('landing.main')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Pembantu Rumah Tangga</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pembantu Rumah Tangga</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
            <div class="row gy-5 gx-4">
            @foreach($pembantu as $pk)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('storage/image/foto/'.$pk->foto)}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('storage/image/foto/'.$pk->foto)}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">{{ $pk->nama }}</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white "> {{ $pk->ttl }} <h3 class="text-white">|| Rp.{{ $pk->gaji }}</h3></p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="/{{$pk->id}}">Read More</a>
                    </div>
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">Client Kami Yang Terhormat</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/ramang.jpeg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Aplikasi Ini Sangat Membantu Saya Untuk Mencari Asisten Rumah Tangga, Saya tidak perlu kesana kemari untuk mencarinya.</p>
                        <h5 class="mb-1">Ramang</h5>
                        <span class="fst-italic">Pengusaha</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/ramang.jpeg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Aplikasi Ini Sangat Membantu Saya Untuk Mencari Asisten Rumah Tangga, Saya tidak perlu kesana kemari untuk mencarinya.</p>
                        <h5 class="mb-1">Ramang</h5>
                        <span class="fst-italic">Pengusaha</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/ramang.jpeg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Aplikasi Ini Sangat Membantu Saya Untuk Mencari Asisten Rumah Tangga, Saya tidak perlu kesana kemari untuk mencarinya.</p>
                        <h5 class="mb-1">Ramang</h5>
                        <span class="fst-italic">Pengusaha</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @endsection