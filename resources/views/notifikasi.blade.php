@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if($message = Session::get('gagal'))
                    <div class="alert alert-danger alert-block">
                        <button class="close" data-dismiss="alert" type="button">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if($message = Session::get('peringatan'))
                    <div class="alert alert-warning alert-block">
                        <button class="close" data-dismiss="alert" type="button">x</button>
                        <strong> {{ $message }}</strong>
                    </div>
                @endif

                <center>
                    <a href="/pesan/sukses" class="btn btn-success">Notifikasi Sukses</a>
                    <a href="/pesan/gagal" class="btn btn-danger">Notifikasi Gagal</a>
                    <a href="/pesan/peringatan" class="btn btn-warning">Notifikasi Peringatan</a>
                </center>


            </div>
        </div>
    </div>
@endsection