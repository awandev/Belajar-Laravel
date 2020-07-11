<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// panggil model Pegawai
use App\Pegawai;


class PegawaiController extends Controller
{

    public function index() {
        // mengambil data dari tabel pegawai
        // $pegawai = DB::table('pegawai')->get();

        // untuk menggunakan pagination gunakan paginate
        // $pegawai = DB::table('pegawai')->paginate(10);


        // mengambil data pegawai dengan model Pegawai dan method paginate(10) untuk paging
    	$pegawai = Pegawai::paginate(10);

        // mengirim data pegawai ke view index
        return view('pegawai.show', ['pegawai' => $pegawai]);    
    }

    public function tambah() {
        // memanggil view tambah
        return view('pegawai.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request) {


        // lakukan validasi terlebih dahulu
        $this->validate($request, [
            'nama'  => 'required|min:5|max:20',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);

        // insert data ke table pegawai
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur'  => $request->umur,
        //     'pegawai_alamat'  => $request->alamat
        // ]);


        // menggunakan model Pegawai
        Pegawai::create([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur'  => $request->umur,
            'pegawai_alamat'  => $request->alamat
        ]);


        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
    
    // method untuk edit data pegawai
    public function edit($id) {
        // mengambil data pegawai berdasarkan id yang dipilih
        // $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // cari datanya dengan menggunakan model Pegawai
        $pegawai = Pegawai::find($id);
        
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    // method untuk update data pegawai
    public function update(Request $request) {
        // update data pegawai
        // DB::table('pegawai')->where('pegawai_id', $request->id)->update([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => $request->alamat
        // ]);

        // gunakan model Pegawai untuk melakukan proses update data
        $pegawai = Pegawai::find($request->id);
        $pegawai->pegawai_nama = $request->nama;
        $pegawai->pegawai_jabatan = $request->jabatan;
        $pegawai->pegawai_umur = $request->umur;
        $pegawai->pegawai_alamat = $request->alamat;
        $pegawai->save();


        // alihkan ke halaman pegawai
        return redirect('/pegawai');
    }


    // method untuk hapus data pegawai
    public function hapus($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
        // DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // menggunakan model pegawai
        $pegawai = Pegawai::find($id);
        $pegawai->delete();


        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


    // method untuk melakukan pencarian
    public function cari(Request $request) {
        // menangkan data pencarian
        $cari = $request->cari;

        // mengambil data dari tabel pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
                        ->where('pegawai_nama','like',"%".$cari."%")
                        ->paginate();

        // mengirim data pegawai ke view index
        return view('pegawai.show',['pegawai' => $pegawai]);
    }



    // untuk soft delete
    // menampilkan data pegawai yang sudah dihapus 
    public function trash() {
        // menambil data pegawai yang sudah dihapus
        $pegawai = Pegawai::onlyTrashed()->get();
        return view('pegawai.trash', ['pegawai' => $pegawai]);
    }

    // untuk restore 1 data
    public function restore($id) {
        $pegawai = Pegawai::onlyTrashed()->where('pegawai_id', $id);
        $pegawai->restore();
        return redirect('/pegawai/trash');
    }

    // restore semua data
    public function restore_all() {
        $pegawai = Pegawai::onlyTrashed();
        $pegawai->restore();
        return redirect('/pegawai/trash');
    }

    // delete permanent
    public  function delete_permanent($id) {
        $pegawai = Pegawai::onlyTrashed()->where('pegawai_id', $id);
        $pegawai->forceDelete();

        return redirect('/pegawai/trash');
    }

    // delete permanent ALL
    public function delete_permanent_all() {
        $pegawai = Pegawai::onlyTrashed();
        $pegawai->forceDelete();

        return redirect('/pegawai/trash');
    }

}
