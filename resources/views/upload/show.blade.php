@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
        
        <div class="col-lg-8 mx-auto my-5">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br />
                @endforeach
            </div>
            @endif

            <form action="/upload/proses" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <b>File Gambar</b><br />
                    <input type="file" name="file" id="file">
                </div>

                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" value="Upload" class="btn-btn-primary">
            </form>

        </div>
        
    </div>
@endsection