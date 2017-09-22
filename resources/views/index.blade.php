@extends('layouts.master')

@section('init')
@include('partials.navbar')
<section id="hero" class="hero is-fullheight is-info is-bold bg">
	<div class="hero-body">
		<div class="container has-text-centered">
			<img src="{{ asset('img/logo.png') }}" width="500">
			<h1 class="title" style="text-shadow: 2px 2px #000;">
				INVFEST 2.0
			</h1>
			<h2 class="subtitle" style="text-shadow: 2px 2px #000;">
				Informatics Inovation Festival
			</h2>
		</div>
	</div>
</section>
<section id="about" class="hero is-medium is-info is-bold">
	<div class="hero-body">
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered title" style="text-shadow: 2px 2px #000;">About</h1>
				<p class="has-text-centered">
					Invfest merupakan event tahunan yang di adakan Himpunan Mahasiswa Informatika dan Informatics Research Club Institut Teknologi Telkom Purwokerto untuk memicu siswa SMA/SMK/MA sederajat di Pulau Jawa memunculkan inovasi yang diharapkan berdampak positif terhadap perkembangan teknologi di masyarakat luas, dan dapat menyongsong serta mempertahankan perkembangan teknologi kedepannya.
				</p>
			</div>
		</div>
	</div>
</section>
<section id="competition" class="hero is-medium is-primary is-bold">
	<div class="hero-body">
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered title" style="text-shadow: 2px 2px #000;">Competition</h1>
				<div class="columns">
					<div class="column">
						<a href="/capture-the-flag">
							<div class="card">
								<div class="card-content has-text-black">
									<h3 class="has-text-centered has-text-grey-dark">
										Capture The Flag
									</h3>
									<p class="subtitle has-text-grey-dark">
										
									</p>
								</div>
								<footer class="card-footer">
								    <p class="card-footer-item">
								      <a href="/register">Register</a>
									</p>
								</footer>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="/programming-contest-competition">
							<div class="card">
								<div class="card-content">
									<h3 class="has-text-grey-dark has-text-centered title">
										Programming Contest Competition
									</h3>
									<p class="subtitle has-text-grey-dark">
										
									</p>
								</div>
								 <footer class="card-footer">
								    <p class="card-footer-item">
								      <a href="/register">Register</a>
								    </p>
								  </footer>
							</div>
						</a>	
					</div>
					<div class="column">
						<a href="/android-application-competition">
							<div class="card">
								<div class="card-content">
									<h3 class="has-text-centered has-text-grey-dark">
										Android Application Competition
									</h3>
									<p class="subtitle has-text-grey-dark">
										
									</p>
								</div>
								<footer class="card-footer">
								    <p class="card-footer-item">
								      <a href="/register">Register</a>
									</p>
								</footer>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="/web-design-competition">
							<div class="card">
								<div class="card-content">
									<h3 class="has-text-centered has-text-grey-dark">
										Web Design Competition
									</h3>
									<p class="subtitle has-text-grey-dark">
										
									</p>
								</div>
								<footer class="card-footer">
								    <p class="card-footer-item">
								      <a href="/register">Register</a>
									</p>
								</footer>
						</div>
						</a>
					</div>
					<div class="column">
						<a href="/design-product-competition">
							<div class="card">
								<div class="card-content">
									<h3 class="has-text-centered has-text-grey-dark">
										Design Product Competition
									</h3>
									<p class="subtitle has-text-grey-dark">
										
									</p>
								</div>
								<footer class="card-footer">
								    <p class="card-footer-item">
								      <a href="/register">Register</a>
									</p>
								</footer>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="timeline" class="hero is-medium is-warning is-bold">
	<div class="hero-body">
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered title has-text-white" style="text-shadow: 2px 2px #000;">Timeline</h1>
				<p class="has-text-centered">
					Invfest merupakan event tahunan yang di adakan Himpunan Mahasiswa Informatika dan Informatics Research Club Institut Teknologi Telkom Purwokerto untuk memicu siswa SMA/SMK/MA sederajat di Pulau Jawa memunculkan inovasi yang diharapkan berdampak positif terhadap perkembangan teknologi di masyarakat luas, dan dapat menyongsong serta mempertahankan perkembangan teknologi kedepannya.
				</p>
			</div>
		</div>
	</div>
</section>
@include('partials.footer')
@endsection