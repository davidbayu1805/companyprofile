@extends('layouts.template')
@section('content')

<section id="indexcrud">
    <div class="container-fluid">
        <div class="container mt-5">

            <!-- Vertically centered modal -->
            <button type="button" class="btn btn-primary btn-md mb-3" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <i class="fas fa-plus"></i> Create Data
            </button>
            <!-- <a href='add.php?npm=$user_data[npm]' class='btn btn-primary btn-md mb-3 '><i class='fa fa-plus'></i>Create
                Data</a> -->
            <table class="table table-striped table-hover table-bordered " style="height: 1vh; margin-bottom: 485px">

                <thead class="table-dark">
                    <th>NPM</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>NO HP</th>
                    <th>ACTION</th>
                </thead>

                @foreach( $data as $d )
                <tr>
                    <td>{{ $d->npm }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->jenis_kelamin }}</td>
                    <td>{{ $d->nomer_hp }}</td>
                    <td>
                        <button type="button" value="{{ $d->id }}" class="btn btn-sm btn-warning edit">
                            <i class="fas fa-edit"></i> Update
                        </button>
                        <!-- <a href="{{ url('edit/'.$d->id) }}" class="btn btn-sm btn-warning"><i
                                class="fa fa-edit"></i>Update</a> -->
                        <a href="{{ url('delete/'.$d->id) }}" class="btn btn-sm btn-danger"><i
                                class="fa fa-trash"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <label>NPM</label>
                    <input type="text" name="npm" required class="form-control" required>

                    <label>NAMA</label>
                    <input type="text" name="name" required class="form-control" required>

                    <label>EMAIL</label>
                    <input type="text" name="email" required class="form-control" required>


                    <label>NOMER HP</label>
                    <input type="text" name="nomer_hp" required class="form-control" required>

                    <label>TANGGAL LAHIR</label>
                    <input class="form-control datepicker" name="tanggal_lahir" type="text" placeholder="Tanggal Lahir"
                        required>

                    <label>PROGRAM STUDI</label>
                    <select name="program_studi" class="form-control" aria-label="Program Studi">
                        <option value="Teknik Informatika" selected>Teknik Informatika</option>
                        <option value="Teknik Fisika">Teknik Fisika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                    </select>

                    <label>JENIS KELAMIN</label>
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

                    <label>ALAMAT</label>
                    <textarea id="floatingInput" class="textarea pt-4 px-3" name="alamat"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit" name="Submit" value="Tambah Data">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <form action="{{ url('update') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="id" name="id" type="text"
                                    class="form-control form-control-sm id" value="" required>
                    <label>NPM</label>
                    <input type="text" name="npm" required class="form-control npm" readonly>

                    <label>NAMA</label>
                    <input type="text" name="name" required class="form-control name" required>

                    <label>EMAIL</label>
                    <input type="text" name="email" required class="form-control email" required>


                    <label>NOMER HP</label>
                    <input type="text" name="nomer_hp" required class="form-control nomer_hp" required>

                    <label>TANGGAL LAHIR</label>
                    <input class="form-control datepicker tanggal_lahir" name="tanggal_lahir" type="text" placeholder="Tanggal Lahir"
                        required>

                    <label>PROGRAM STUDI</label>
                    <select name="program_studi" class="form-control program_studi" aria-label="Program Studi">
                        <option value="Teknik Informatika" selected>Teknik Informatika</option>
                        <option value="Teknik Fisika">Teknik Fisika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                    </select>

                    <label>JENIS KELAMIN</label>
                    <select name="jenis_kelamin" class="form-control jenis_kelamin" aria-label="Jenis Kelamin">
                        <option value="Laki Laki" selected>Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label>ALAMAT</label>
                    <textarea id="floatingInput" class="textarea pt-4 px-3 alamat" name="alamat"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit" name="Submit" value="Tambah Data">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('js')
<script>
    $(document).ready(function () {
        $(document).on('click', '.btnClose', function () {
            $('#edit').modal('hide');
        });
        $(document).on('click', '.edit', function () {
            var id = $(this).val();
            // alert(id);
            $('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: base_url + "edit/" + id,
                success: function (response) {
                    console.log(response);
                    $('.id').val(id);
                    $('.npm').val(response.data.npm);
                    $('.name').val(response.data.name);
                    $('.email').val(response.data.email);
                    $('.nomer_hp').val(response.data.nomer_hp);
                    $('.jenis_kelamin').val(response.data.jenis_kelamin);
                    $('.tanggal_lahir').val(response.data.tanggal_lahir);
                    $('.program_studi').val(response.data.program_studi);
                    $('.alamat').val(response.data.alamat);
                }
            });
        });
    });

</script>
@endsection
