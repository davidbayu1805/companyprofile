<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base_url" content="{{ url('') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/Logo Icon.png') }}" type="image/x-icon">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />

    <title>Rumah Impian</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg nav-coloring navbar-dark nav-color  w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/Logo Icon.png')}}" alt="" width="30"
                    class="d-inline-block align-text-top me-3">

                Rumah Impian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="{{ url('layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="{{ url('fitur') }}">Fitur</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="{{ url('kontak') }}">Kontak</a>
                    </li>

                    <!-- Harus Login -->
                    @if(Auth::check())
                    @if(Auth::user()->roleuser && Auth::user()->roleuser == "Admin")
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tugas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-bg-transparent"
                            aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('register') }}">Modul 4</a></li>
                            <li><a class="dropdown-item" href="{{ url('indexcrud') }}">Modul 7</a></li>
                        </ul>
                    </li>
                    @else
                    @endif
                    @endif
                </ul>
                <div>
                    <button class="button-primary"><a class="text-white"
                            href="{{ url('register') }}">DAFTAR</a></button>
                    <button class="button-secondary"><a class="button-secondary text-success"
                            href="{{ url('login') }}">MASUK</a></button>
                </div>
            </div>
        </div>
    </nav>

    @section('content')
    @show

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });

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
    @include('sweetalert::alert')
    
    @yield('js')
</body>

</html>
