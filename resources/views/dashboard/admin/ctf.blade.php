@extends('layouts.dashboard')

@section('content')
<div class="container">
	<table border="1px">
		<tr>
			<th>Nama Tim</th>
			<th>Tanggal Lahir</th>
			<th>Nama</th>
			<th>Asal Sekolah</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		@foreach($data as $peserta)
			<tr>
				<td>{{ $peserta->nama_tim }}</td>
				<td>{{ $peserta->tanggal_lahir }}</td>
				<td>{{ $peserta->ketua_tim }}</td>
				<td>{{ $peserta->asal_sekolah }}</td>
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