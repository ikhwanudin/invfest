<b-tab-item label="Persyaratan" style="margin-bottom: 19em;">
	<div class="content">		
		<h3>Kartu Pelajar / Surat Pernyataan</h3>
		<small>Upload scan kartu pelajar dalam bentuk png, dengan format file <code>KS_nama</code> dan di satukan dalam archive berekstensi <code>.zip</code> </small>
		{{-- <upload></upload> --}}
		<hr>
		<h3>Pas Foto</h3>
		<small>Upload pas foto anggota terbaru ukuran 3x4 berwarna, dengan format file png dan penamaan file <code>foto_nama </code>, di satukan dalam archive berekstensi <code>.zip</code></small>
		{{-- <b-field>
		    <b-upload v-model="files">
		        <a class="button is-primary">
		            <b-icon icon="file_upload"></b-icon>
		            <span>Click to upload</span>
		        </a>
		    </b-upload>
		    <div v-if="files && files.length">
		        <span class="file-name">
		            @{{ files[0].name }}
		        </span>
		    </div>
		</b-field> --}}
		<hr>
		<h3>Bukti Pembayaran</h3>
		<small>Upload scan bukti pembayaran dalam bentuk <code>pdf</code></small>
		{{-- <b-field>
		    <b-upload v-model="files">
		        <a class="button is-primary">
		            <b-icon icon="file_upload"></b-icon>
		            <span>Click to upload</span>
		        </a>
		    </b-upload>
		    <div v-if="files && files.length">
		        <span class="file-name">
		            @{{ files[0].name }}
		        </span>
		    </div>
		</b-field> --}}
	</div>
</b-tab-item>