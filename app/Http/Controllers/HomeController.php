<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('welcome');
    }
    public function crud() {
        $data = User::all();
        return view('pages/indexcrud', compact('data'));
    }
    public function add(Request $request) {
        $count = DB::table('users')->where('npm', $request->npm)->count();

        if($count > 0) {
            Alert::toast('Gagal Tambah Mahasiswa! NPM Sudah Terdaftar', 'error');
            return redirect()->back();
        }

        $password = Hash::make('12345678');
        User::insert([
            'npm'           => $request->npm,
            'name'          => $request->name,
            'email'         => $request->email,
            'nomer_hp'      => $request->nomer_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'program_studi' => $request->program_studi,
            'alamat'        => $request->alamat,
            'password'      => $password,
        ]);
        Alert::toast('Berhasil Tambah Mahasiswa!', 'success');
        return redirect()->back();
    }

    public function show($id) {
        $data = User::findOrFail($id);

        return response()->json([
            "status"=>200,
            "data"=>$data
        ]);
    }

    // Edit Data Siswa by id
    public function update(Request $request) {
        User::where('id', $request->id)
        ->update([
            'npm'           => $request->npm,
            'name'          => $request->name,
            'email'         => $request->email,
            'nomer_hp'      => $request->nomer_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'program_studi' => $request->program_studi,
            'alamat'        => $request->alamat,
        ]);
        Alert::toast('Berhasil Update Mahasiswa!', 'success');
        return redirect()->back();
    }

    public function delete($id) {
        User::where('id', $id)->delete();
        Alert::toast('Berhasil Delete Mahasiswa!', 'success');
        return redirect()->back();
    }
}
