@extends('layouts.template')
@section('content')
<section id="layanan" class="mb-xxl-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="card-register w-100">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h2>Silahkan Mendaftar</h2>
                        <div class="form-floating mb-3">
                            <input type="text" name="npm" class="form-control" id="floatingInput"
                                placeholder="npm">
                            <label for="1234567890" class="d-flex align-items-center">Masukkan NPM Anda</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingInput"
                                placeholder="Nyoman Agus">
                            <label for="floatingInput" class="d-flex align-items-center">Masukkan Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-items-center">Masukkan Email Anda</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nomer_hp" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="081234567890" class="d-flex align-items-center">Masukkan Nomer HP</label>
                        </div>
                        <fieldset class="form-floating mb-3">
                            <legend class="col-form-legend col-sm-4 form-label">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="radio_jenis_kelamin1" value="Laki Laki" required>
                                        Laki Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="radio_jenis_kelamin2" value="Perempuan" required>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-floating mb-3">
                            <input class="form-control datepicker" name="tanggal_lahir" type="text"
                            placeholder="Tanggal Lahir" required>
                            <label class="floatingInput" class="d-flex align-items-center">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="program_studi" class="form-control" aria-label="Program Studi">
                                <option value="Teknik Informatika" selected>Teknik Informatika</option>
                                <option value="Teknik Fisika">Teknik Fisika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Kimia">Teknik Kimia</option>
                            </select>
                            <label class="floatingInput" class="d-flex align-items-center">Program Studi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea id="floatingInput" class="textarea pt-4 px-3" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-items-center">Password Anda</label>
                        </div>

                        <button type="submit" class="button-kontak">Daftar</button>
                    </form>

                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

@endsection
