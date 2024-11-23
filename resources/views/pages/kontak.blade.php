@extends('layouts.template')
@section('content')

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
                                <img src="Assets/alamat2.png" alt="">
                            </div>
                            <a href="#"> Jl. Basuki Rachmat Tuban Jawa Timur
                                Indonesia</a>
                        </div>

                        <div class="mb-3 d-flex align-items-center"><img src="Assets/telepon.png" alt="">
                            <a href="#">0812-2175-8586</a>
                        </div>

                        <div class="mb-3 d-flex align-items-center"><img src="Assets/Email.png" alt="">
                            <a href="#">rumahimpian@gmail.com</a>
                        </div>
                    </div>
                    <h6>Sosial Media</h6>
                    <a href="#" class="me-2"><img src="Assets/Facebook.png" alt=""></a>
                    <a href="#" class="me-2"><img src="Assets/Twiter.png" alt=""></a>
                    <a href="" class="me-2"><img src="Assets/Instagram.png" alt=""></a>
                    <a href="" class="linkrumah">Rumah Impian</a>
                </div>
                <div class="col-md-6">
                    <div class="card-kontak w-100">
                        <form>
                            <h2>ada pertanyaan..?</h2>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput" class="d-flex align-items-center">Masukkan Email Anda</label>
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

@endsection
