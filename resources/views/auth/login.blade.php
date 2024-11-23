@extends('layouts.template')
@section('content')
<section id="layanan">
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-kontak w-100">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2>Silahkan Login</h2>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-items-center">Masukkan Email Anda</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-items-center">Password Anda</label>
                        </div>

                        <button type="submit" class="button-kontak">Kirim</button>
                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>


@endsection
