@extends('layouts.app')

@section('title', 'Daftar Pegawai')
@section('content')
    <div class="container">
    <h1>Tambah Pegawai</h1><br>
    
    
    @if(count($errors) > 0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>   
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" name="umur" id="umur" class="form-control">
        </div>
        <div class="form-group">
            <label for="usia">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Proses" class="btn btn-primary">
        </div>
        
       
    </form>
</div>
@endsection