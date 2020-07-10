@extends('layouts.app')

@section('title', 'Daftar Pegawai')
@section('content')
    <div class="container">
        <h1>Edit Pegawai</h1>
        
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pegawai->pegawai_nama }}">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $pegawai->pegawai_jabatan }}">
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control" value="{{ $pegawai->pegawai_umur }}">
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $pegawai->pegawai_alamat }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Ubah Data" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection