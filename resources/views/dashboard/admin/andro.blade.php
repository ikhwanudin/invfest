@extends('layouts.dashboard')

@section('content')
<div class="container">
	<table border="1px">
		<tr>
			<th>Nama Tim</th>
			<th>Asal Sekolah</th>
			<th>Ketua Tim</th>
			<th>Anggota 1</th>
			<th>Anggota 2</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		@foreach($data as $peserta)
			<tr>
				<td>{{ $peserta->nama_tim }}</td>
				<td>{{ $peserta->asal_sekolah }}</td>
				<td>{{ $peserta->ketua_tim }}</td>
				<td>{{ $peserta->tanggal_lahir }}</td>
				<td>{{ $peserta->anggota_1 }}</td>
				<td>{{ $peserta->tanggal_lahir_1 }}</td>
				<td>{{ $peserta->anggota_2 }}</td>
				<td>{{ $peserta->tanggal_lahir_2 }}</td>
				<td>{{ $peserta->status }}</td>
				<td>
					<select>
						<option>Pending</option>
						<option>Verifikasi</option>
					</select>
				</td>
			</tr>
		@endforeach
	</table>
</div>
@endsection