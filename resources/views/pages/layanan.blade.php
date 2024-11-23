@extends('layouts.template')
@section('content')

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

@endsection
