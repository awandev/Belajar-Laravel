@extends('layouts.app')
@section('title', 'Daftar Pegawai')
@section('content')

<div class="container">
 
    <div class="card mt-5">
        <div class="card-body">

            <a href="/pegawai">Data Pegawai</a>
            |
            <a href="/pegawai/trash" class="btn btn-sm btn-primary">Tong Sampah</a>

            <br/>
            <br/>

            <a href="/pegawai/restore_all">Kembalikan Semua</a>
            |
            <a href="/pegawai/delete_permanent_all">Hapus Permanen Semua</a>
            <br/>
            <br/>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th width="30%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>
                            <a href="/pegawai/restore/{{ $p->pegawai_id }}" class="btn btn-success btn-sm">Restore</a>
                            <a href="/pegawai/delete_permanent/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                        </td>
                    </tr>
                    @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection