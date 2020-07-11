@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <div class="container">
        <div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
				<h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Pengguna</th>
							<th>Hadiah</th>
							<th width="1%">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($anggota as $a)
						<tr>
							<td>{{ $a->nama }}</td>
							<td>
								<ul>
									@foreach($a->hadiah as $h)
									<li> {{ $h->nama_hadiah }} </li>
									@endforeach
								</ul>
							</td>
							<td class="text-center">{{ $a->hadiah->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
    </div>
@endsection