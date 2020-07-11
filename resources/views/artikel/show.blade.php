@extends('layouts.app')

@section('title', 'Daftar Pegawai')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3>Data Artikel</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Judul Artikel</th>
                    <th>Tag</th>
                    <th>Jumlah Tag</th>
                </tr>
                @foreach($artikel as $a)
                <tr>
                    <td>{{ $a->judul }}</td>
                    <td>
                        @foreach ($a->tags as $t)
                            {{ $t->tag }},
                        @endforeach
                    </td>
                    <td class="text-center">
                        {{ $a->tags->count() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection