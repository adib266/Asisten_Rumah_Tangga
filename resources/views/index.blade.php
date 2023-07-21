@extends('layouts.main')

@section('content')
   
   <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5"> 
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="col-md-6" src="img/animasi.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Asisten Rumah Tangga </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Selamat Datang Di Aplikasi Pencarian Asisten Rumah Tangga</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/rumah-4.png">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/rumah-1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">E-Asisten</p>
                    <h1 class="display-5 mb-4">Aplikasi Pencarian Asisten Rumah Tangga</h1>
                    <p class="mb-4">Aplikasi Pencarian Asisten Rumah Tangga ini di buat untuk mempermudah Seseorang mendapatkan Asisten Rumah Tangga yang
                         sesuai dengan kriteria anda, jadi anda tidak perlu kesana kemari untuk mencari nya, berikut adalah Profesi yang kami sediakan untuk anda :
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">5</h1>
                            <h5 class="text-white">Profesi</h5>
                            <h5 class="text-white">Yang Tersedia</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Supir</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Satpam</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Pembantu</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Baby Siste</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Tukang Kebun</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">lazwar443@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Kontak Kami</p>
                                    <h5 class="mb-0">085791154351</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @endsection