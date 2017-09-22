@extends('layouts.master')

@section('init')
	@include('partials/navbar')
	<div class="container">
		<div class="columns">
			<div class="column">
				<ul>
					<li>
						<a href="{{ url('/dashboard/admin') }}">Beranda</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/admin/ctf') }}">Ctf</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/admin/prog') }}">Programming</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/admin/web') }}">Web Design</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/admin/andro') }}">Android</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/admin/design') }}">Design</a>
					</li>
				</ul>
			</div>
			<div class="column">
				@yield('content')	
			</div>
		</div>	
	</div>

@endsection