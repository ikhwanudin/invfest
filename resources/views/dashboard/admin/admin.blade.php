@extends('layouts.dashboard')

@section('content')
<div class="container">
	<table border="1px">
		<tr>
			<th>Kategori</th>
			<th>Nama Tim</th>
			<th>Asal Sekolah</th>
			<th>Ketua Tim</th>
			<th>Status</th>
		</tr>
		@foreach($data as $peserta)
			<tr>
				<td>{{ $peserta->kategori }}</td>
				<td>{{ $peserta->nama_tim }}</td>
				<td>{{ $peserta->asal_sekolah }}</td>
				<td>{{ $peserta->ketua_tim }}</td>
				<td>{{ $peserta->status }}</td>
			</tr>
		@endforeach
	</table>
</div>
@endsection