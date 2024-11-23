@extends('layouts.template')
@section('content')

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
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#propertybaru"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Property
                            Baru</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab">

                        <div class="input-group input-cari mb-3">
                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                Tipe Rumah</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                <li><a class="dropdown-item" href="#">Moderen</a></li>
                            </ul>

                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/Money-icon.png')}}" alt="">
                                Range Harga</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">IDR.1M - 1.5M</a></li>
                                <li><a class="dropdown-item" href="#">IDR.1.5M - 2M</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                placeholder="cari berdasarkan lokasi, ID, Property">
                            <button class="button-cari" type="button" id="button-addon2">Cari</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="input-group input-cari mb-3">
                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                Tipe Rumah</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                <li><a class="dropdown-item" href="#">Moderen</a></li>
                            </ul>

                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/Home Icon.png')}}" alt="">
                                Tipe Rumah</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Minimalist</a></li>
                                <li><a class="dropdown-item" href="#">Sederhana</a></li>
                                <li><a class="dropdown-item" href="#">Moderen</a></li>
                            </ul>

                            <button class="btn button-secondary-cari dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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

@endsection
