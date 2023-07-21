<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('AdminLTE')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://twitter.com/DaWenK22"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/dahwenk/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Kontak:</span>
                    <span class="fs-5 fw-bold">085791154351</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{ url('/majikan') }}" class="navbar-brand ps-5 me-0">
            <img  style="max-height: 70px;" src="img/asisten.png" alt="Image">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/supir') }}" class="nav-item nav-link">Supir</a>
                <a href="{{ url('/satpam') }}" class="nav-item nav-link">Satpam</a>
                <a href="{{ url('/pembantu') }}" class="nav-item nav-link">Pembantu</a>
                <a href="{{ url('/baby') }}" class="nav-item nav-link">Baby Siter</a>
                <a href="{{ url('/kebun') }}" class="nav-item nav-link">Tukang Kebun</a>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->username }}</a>
                    <div class="dropdown-menu bg-light m-0">
                    <a href="#" class="dropdown-item">Profil</a>
                    <a href="{{ url('/data_boking') }}" class="dropdown-item">Data Boking</a>
                    <a href="{{ url('/logout') }}" class="dropdown-item">Log Out</a>
                    </div>
    </nav>
    <!-- Navbar End -->
<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase">Data Boking</h3>
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama Majikan</th>
                                        <th>Nama Pekerja</th>
                                        <th>Jenis Art</th>
                                        <th>Tawar Gaji</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                    @foreach($boking as $p)
                                    
                                    <tr class="text-center text-break">
                                        <td>{{$p->nama_majikan}}</td>
                                        <td>{{$p->nama_pekerja}}</td>
                                        <td>{{$p->jenis_art}}</td>
                                        <td>{{$p->tawar_gaji}}</td>
                                        <td>
                                        @if($p->acc == null)
                                            <span class="badge badge-secondary">Belum Terkonfrimasi</span>
                                            @else
                                            <span class="badge badge-secondary">Terkonfrimasi</span>
                                            @endif
                                        </td>
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
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Tentang Kami</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Slawi, Tegal, JAWA Tengah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>085791154351</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>lazwar443@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Link</h5>
                    <a class="btn btn-link" href="{{ url('/supir') }}">Supir</a>
                    <a class="btn btn-link" href="{{ url('/satpam') }}">Satpam</a>
                    <a class="btn btn-link" href="{{ url('/pembantu') }}">Pembantu Rumah</a>
                    <a class="btn btn-link" href="{{ url('/baby') }}">Baby Sister</a>
                    <a class="btn btn-link" href="{{ url('/kebun') }}">Tukang Kebun</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Hari Dan Jam Operasi</h5>
                    <p class="mb-1">Senin - Jum'at</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Sabtu</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Minggu</p>
                    <h6 class="text-light">Closed</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Moh Adib Lazwar Irkhami</a>, 2023.
            </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>