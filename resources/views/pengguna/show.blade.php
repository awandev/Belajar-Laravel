@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="card-mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">Eloquent One to One Relationship</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->telepon->nomor_telepon }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection