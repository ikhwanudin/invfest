{{-- 
	*email tidak bisa di edit, modelnya konfirmasi email saat pendaftaran dan tidak ambil source dari database, tidak bisa di update 
	*input validation aplha / alpha_num yang mengandung space
 --}}
<div class="content">
	<div class="hero is-info is-medium is-bold">
		<div class="container">
			<div class="hero-body">
				<div class="level">
					<div class="level-left">
						<div class="level-item">
							<h1 class="has-text-white" style="text-shadow: 2px 2px #000;">Task's</h1>
						</div>
					</div>
					<div class="has-text-center is-text-white">
						<h1 class="has-text-white" style="text-shadow: 2px 2px #000;">
							@if($data->kategori == 'ctf')
								Capture The Flag
							@elseif($data->kategori == 'prog' )
								Programming Contest Comptetition
							@elseif($data->kategori == 'web' )
								Web Design Competition
							@elseif($data->kategori == 'andro' )
								Android Application Competition
							@elseif($data->kategori == 'design' )
								Design Product Competition
							@endif
						</h1>
					</div>
					<div class="level-right">
						<div class="level-item">
							<div class="field is-grouped is-grouped-multiline">
							  <div class="control">
							    <div class="tags has-addons">
							      <span class="tag is-medium is-dark">Status</span>
							      <span class="tag is-medium 
							      	@if($data->status == 'unknown') 
							      		is-danger 
							      	@elseif($data->status == 'pending') 
							      		is-primary 
							      	@elseif($data->status == 'verified') 
							      		is-success
							      	@endif">
							      		{{ $data->status }}
							      </span>
							    </div>
							  </div>
							 </div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
	<div class="container">
		<b-tabs type="is-boxed">
		<span style="margin-top:2em;"></span>
			<section>
				<b-tab-item label="Biodata" style="margin-bottom: 19em;">
					@include('partials.errors')
					@if($data->kategori != 'design')
						<h2 class="title">Biodata Team</h2>
					@endif
	            	<form action="{{ route('store') }}" method="POST">
	    				{{ method_field('PUT') }}
	                	{{ csrf_field() }}
	                	@if($data->kategori == 'design')
	                		<div class="columns">
	                			<div class="column is-3">
	                				<h2 class="title">Biodata</h2>
	                			</div>
								<div class="column is-3">
									<b-field label="Nama">
									    <b-input text="text" name="ketua_tim" value="{{ $data->ketua_tim }}"></b-input>
									</b-field>
									<b-field label="Tanggal lahir">
									    <b-input type="text" name="tanggal_lahir" value="{{ $tanggal_lahir }}"></b-input>
									</b-field>
									<b-field label="Email">
									    <b-input text="email" name="email" value="{{ $data->email }}"></b-input>
									</b-field>
									<b-field label="Asal Sekolah">
									    <b-input text="text" name="asal_sekolah" value="{{ $data->asal_sekolah }}"></b-input>
									</b-field>
									<b-field label="Pendamping">
									    <b-input text="text" name="pendamping" value="{{ $data->pendamping }}"></b-input>
									</b-field>
									<button type="submit" class="button is-primary">Simpan</button>
								</div>	
							</div>
	                	@else
	                		<div class="columns">
	                			<div class="column is-3"><h3 class="subtitle">Team</h3></div>
								<div class="column is-3">
									<b-field label="Nama Tim">
									    <b-input text="text" name="nama_tim" value="{{ $data->nama_tim }}"></b-input>
									</b-field>
									<b-field label="Email Ketua">
									    <b-input text="email" name="email" value="{{ $data->email }}"></b-input>
									</b-field>
									<b-field label="Asal Sekolah">
									    <b-input text="text" name="asal_sekolah" value="{{ $data->asal_sekolah }}"></b-input>
									</b-field>
									<b-field label="Pendamping">
									    <b-input text="text" name="pendamping" value="{{ $data->pendamping }}"></b-input>
									</b-field>
									<Datepicker :value="{{$data->tanggal_lahir}}"></Datepicker>
								</div>	
							</div>
							<hr>
	                		<div class="columns">
								<div class="column is-3"><h3 class="subtitle">Bio. Ketua</h3></div>
								<div class="column is-3">
									<b-field label="Nama">
									    <b-input type="text" name="ketua_tim" value="{{ $data->ketua_tim }}"></b-input>
									</b-field>
									<b-field label="Select a date">
									    <b-datepicker
									        icon="today" name="tanggal_lahir" @if($data->tanggal_lahir == null) value="" @else value="{{ $data->tanggal_lahir }}" @endif>
									    </b-datepicker>
									</b-field>
								</div>	
							</div>
							<hr>
							<div class="columns">
								<div class="column is-3"><h3 class="subtitle">Bio. Anggota 1</h3></div>
								<div class="column is-3">
									<b-field label="Nama">
									    <b-input name="anggota_1" value="{{ $data->anggota_1 }}"></b-input>
									</b-field>
									<b-field label="Select a date">
									    <b-datepicker
									        icon="today" name="tanggal_lahir_1" @if($data->tanggal_lahir_1 == null) value="" @else value="{{ $data->tanggal_lahir_1 }}" @endif>
									    </b-datepicker>
									</b-field>
								</div>	
							</div>
							<hr>
							<div class="columns">
								<div class="column is-3"><h3 class="subtitle">Bio. Anggota 2</h3></div>
								<div class="column is-3">
									<b-field label="Nama">
									    <b-input name="anggota_2" value="{{ $data->anggota_2 }}"></b-input>
									</b-field>
									<b-field label="Select a date">
									    <b-datepicker
									        icon="today" name="tanggal_lahir_2" @if($data->tanggal_lahir_2 == null) value="" @else value="{{ $data->tanggal_lahir_2 }}" @endif>
									    </b-datepicker>
									</b-field>
								</div>	
							</div>
							<div class="columns">
								<div class="column is-3 is-offset-3">
									<button type="submit" class="button is-primary">Simpan</button>
								</div>
							</div>
	                	@endif
					</form>
	        	</b-tab-item>
			</section>
        	<section>
				@include('dashboard.persyaratan')
	        </section>
		</b-tabs>
	</div>