<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base_url" content="{{ url('') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f60be2d419.js" crossorigin="anonymous"></script>

    <!-- Plugin Datepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="icon" href="{{ asset('assets/Logo Icon.png') }}" type="image/x-icon">

    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />

    <title>Rumah Impian</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/Logo Icon.png') }}" alt="" width="30"
                    class="d-inline-block align-text-top me-3">
                Rumah Impian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="{{ url('layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="{{ url('fitur') }}">Fitur</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="{{ url('kontak') }}">Kontak</a>
                    </li>
                    @if( Auth::check() )
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tugas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-bg-transparent"
                            aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('modul4') }}">Modul 4 (Register)</a></li>

                            @if( Auth::user()->roleuser == "Admin")
                            <li><a class="dropdown-item" href="{{ url('index') }}">Modul 7 (CRUD)</a></li>
                            @else
                            @endif
                        </ul>
                    </li>
                    @endif
                </ul>

                <div>
                    @if( Auth::user() )
                    <button class="button-secondary"><a class="button-secondary text-success"
                            href="{{ route('logout') }}">KELUAR</a></button>
                    @else
                    <button class="button-primary"><a class="text-white"
                            href="{{ url('register') }}">DAFTAR</a></button>
                    <button class="button-secondary"><a class="button-secondary text-success"
                            href="{{ url('login') }}">MASUK</a></button>
                </div>
                @endif

            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Temukan
                        Rumah Iimpian</h1>
                    <p> <span class="fw-bold">Rumah Impian</span> hadir untuk temukan rumah terbaik
                        untukmu, untuk di jual ataupun di sewa dengan sumber
                        terpecaya.</p>

                    <button class="button-lg-primary">Temukan Rumah</button>
                    <a href="{{ url('search') }}"> <img src="{{ asset('assets/Right Arrow.png')}}" alt=""></a>
                </div>
            </div>
            <img src="{{ asset('assets/Hero Banner.png')}}" alt="" class="position-absolute end-0 bottom-0 img-hero">
            <img src="{{ asset('assets/Accsent 1.png')}}" alt=""
                class=" accsent-img h-100 position-absolute top-0 start-0">
        </div>
    </section>

    <!-- Layanan -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Rumah impian hadir menjadi solusi bagi kamu</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/Icon-propertybaru.png')}}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Property Baru</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli
                            rumah baru dengan fasilitas terbaik
                            dengan lingkungan yang nyaman</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/Icon Sewa.png')}}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Sewa Rumah</h3>
                        <p class="mt-3">Sewa rumah yang indah untuk keluarga anda, pilihan terbaik untuk tinggal
                            keluargamu.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/Icon Beli.png')}}" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beli Rumah</h3>
                        <p class="mt-3">Beli rumah sempurna dengan harga terbaik kualitas terjamin dari sumber
                            terpercaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search -->
    <section id="search" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Temukan Rumah Impianmu</h2>

                    <p>sekarang anda dapat menghemat semua hal stres, waktu, dan biaya tersembunyi, dengan ratusan rumah
                        untuk
                        anda</p>
                </div>

                <div class="col-10 mx-auto mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jual"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Jual</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sewa"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Sewa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#propertybaru" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Property Baru</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab">

                            <div class="input-group input-cari mb-3">
                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                    Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                    <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                    <li><a class="dropdown-item" href="#">Moderen</a></li>
                                </ul>

                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Money-icon.png')}}" alt="">
                                    Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">IDR.1M - 1.5M</a></li>
                                    <li><a class="dropdown-item" href="#">IDR.1.5M - 2M</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="cari berdasarkan lokasi, ID, Property">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="input-group input-cari mb-3">
                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                    Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                    <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                    <li><a class="dropdown-item" href="#">Moderen</a></li>
                                </ul>

                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Money-icon.png')}}" alt="">
                                    Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">IDR.200.000.000</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="cari berdasarkan lokasi, ID, Property">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="propertybaru" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="input-group input-cari mb-3">
                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                    Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                    <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                    <li><a class="dropdown-item" href="#">Moderen</a></li>
                                </ul>

                                <button class="btn button-secondary-cari dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/Money-icon.png')}}" alt="">
                                    Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">IDR.500JT - 1M</a></li>
                                    <li><a class="dropdown-item" href="#">IDR.1M - 1.5M</a></li>
                                    <li><a class="dropdown-item" href="#">IDR.1.5M - 2M</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="cari berdasarkan lokasi, ID, Property">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <br>
    <br>

    <!-- Rekomendasi -->
    <section id="rekomendasi">
        <div class="container">
            <div class="row mb-xxl-5">
                <div class="col-12 text-center">
                    <h2>Rekomendasi Rumah Untukmu</h2>
                </div>
            </div>

            <br>
            <br>

            <div class="row ">
                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi1.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.200.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">Sewa</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 3
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 4
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 400M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi2.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.1.800.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">Jual</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 3
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 5
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 500M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi3.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.700.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">Property
                                    Baru</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 3
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 4
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 400M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi4.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.200.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">Sewa</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 3
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 3
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 400M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi5.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.900.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">property
                                    Baru</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 3
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 4
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 400M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-2" style="width: 22rem">
                        <img src="{{ asset('assets/Rekomendasi6.png')}}" alt="">
                        <div class="card-body">
                            <h4>IDR.200.000.000</h4>
                            <p class="mb-4 lh-sm">Jl. soekarno Hatta No.1 <br><span class="text-danger">Sewa</span></p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-4">
                            <span>
                                <img src="{{ asset('assets/bed.png')}}" alt=""> 4
                                <p>Kamar Tidur</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/bath.png')}}" alt=""> 6
                                <p>Kamar Mandi</p>
                            </span>

                            <span>
                                <img src="{{ asset('assets/luas.png')}}" alt=""> 600M
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Feature -->
    <section id="fitur" class="mt-5 overflow-hidden">
        <div class="container position-relative">
            <div class="row mb-4">
                <div class="col-9">
                    <h2>Fitur Rumah</h2>

                </div>
            </div>

            <div class="your-class">
                <div class="card-fitur me-3 position-relative">
                    <img src="{{ asset('assets/Fitur Rumah 1.png') }}" alt="">
                    <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <h5>Ruang Keluarga</h5>
                            <span>Rumah Minimalist Type-A2</span>
                            <h6>IDR.200JT</h6>
                            <button>Lihat Rumah</button>
                        </div>
                    </div>
                </div>
                <div class="card-fitur me-3 position-relative">
                    <img src="{{ asset('assets/Fitur Rumah 2.png') }}" alt="">
                    <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <h5>Ruang Tamu</h5>
                            <span>Rumah Minimalist Type-A2</span>
                            <h6>IDR.200JT</h6>
                            <button>Lihat Rumah</button>
                        </div>
                    </div>
                </div>
                <div class="card-fitur me-3 position-relative">
                    <img src="{{ asset('assets/Fitur Rumah 3.png') }}" alt="">
                    <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <h5>Kamar Tidur</h5>
                            <span>Rumah Minimalist Type-A2</span>
                            <h6>IDR.200JT</h6>
                            <button>Lihat Rumah</button>
                        </div>
                    </div>
                </div>
                <div class="card-fitur me-3 position-relative">
                    <img src="{{ asset('assets/Fitur Rumah 4.png') }}" alt="">
                    <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <h5>Kitchen</h5>
                            <span>Rumah Minimalist Type-A2</span>
                            <h6>IDR.200JT</h6>
                            <button>Lihat Rumah</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container position relative mt-5">
                <div class="row">
                    <div class="col-12 d-flex justify content-start">
                        <div class="card-fitur me-3 position-relative">
                            <img src="{{ asset('assets/Fitur Rumah 1.png')}}" alt="">
                            <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Ruang Keluarga</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR.200JT</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="{{ asset('assets/Fitur Rumah 2.png')}}" alt="">
                            <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Ruang Tamu</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR.200JT</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="{{ asset('assets/Fitur Rumah 3.png')}}" alt="">
                            <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Kamar Tidur</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR.200JT</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="{{ asset('assets/Fitur Rumah 4.png')}}" alt="">
                            <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Kitchen</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR.200JT</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="{{ asset('assets/Fitur Rumah 1.png')}}" alt="">
                            <div class="overlay position-absolute top-0 bootom-0 start-0 end-0 w-10 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Ruang Kelluarga</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR.200JT</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>


            </div> -->
            <button class="left position-absolute start-0 top-50  prev">
                <img src="{{ asset('assets/Vector.png')}}" alt="">
            </button>
            <button class="right position-absolute end-0 top-50  next"><img
                    src="{{ asset('assets/Vector1.png')}}" alt=""></button>
        </div>
    </section>

    <!-- Contact -->
    <section id="kontak1">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Butuh Konsultasi..?
                            Silahkan kontak kami
                            Kami Siap Membantu</h3>
                        <div class="kontak">
                            <h6>Kontak</h6>

                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <img src="{{ asset('assets/alamat2.png')}}" alt="">
                                </div>
                                <a href="#"> Jl. Basuki Rachmat Tuban Jawa Timur
                                    Indonesia</a>
                            </div>

                            <div class="mb-3 d-flex align-items-center"><img src="{{ asset('assets/telepon.png')}}"
                                    alt="">
                                <a href="#">0812-2175-8586</a>
                            </div>

                            <div class="mb-3 d-flex align-items-center"><img src="{{ asset('assets/Email.png')}}"
                                    alt="">
                                <a href="#">rumahimpian@gmail.com</a>
                            </div>
                        </div>
                        <h6>Sosial Media</h6>
                        <a href="#" class="me-2"><img src="{{ asset('assets/Facebook.png')}}" alt=""></a>
                        <a href="#" class="me-2"><img src="{{ asset('assets/Twiter.png')}}" alt=""></a>
                        <a href="" class="me-2"><img src="{{ asset('assets/Instagram.png')}}" alt=""></a>
                        <a href="" class="linkrumah">Rumah Impian</a>
                    </div>
                    <div class="col-md-6">
                        <div class="card-kontak w-100">
                            <form>
                                <h2>ada pertanyaan..?</h2>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Masukkan Email
                                        Anda</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda</label>
                                </div>

                                <button type="submit" class="button-kontak">Kirim</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class=" d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center"><img src="{{ asset('assets/Logo Icon.png')}}"
                            alt="">
                        <a href="#" class="ms-3">Rumah Impian</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="{{ url('/') }}">Beranda</a>
                        <a href="{{ url('layanan') }}">Layanan</a>
                        <a href="{{ url('fitur') }}">Fitur</a>
                        <a href="{{ url('kontak') }}">kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Slick -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js')}}"></script>

    <!-- Plugin Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        crossorigin="anonymous" referrerpolic
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        y="no-referrer"></script>

    <!-- Base Url -->
    <script>
        var base_url = document.querySelector('meta[name="base_url"]').getAttribute('content') + '/';

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.your-class').slick({
                infinite: true,
                variableWidth: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
            });
        });

    </script>
</body>

</html>
