<div class="container mt-3">
	<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		    Tambah Data Mahasiswa
		  </div>
		  <div class="card-body">
		    <form action="" method="POST">
				<div class="form-group">
		    		<label for="nama">Nama</label>
		    		<input type="text" class="form-control" id="nama" autocomplete="off" name="nama">
		    		<small class="form-text text-danger"><?= form_error('nama'); ?></small>
		  		</div>

		  		<div class="form-group">
		    		<label for="nis">NIS</label>
		    		<input type="text" class="form-control" id="nis" autocomplete="off" name="nis">
		    		<small class="form-text text-danger"><?= form_error('nis'); ?></small>
		  		</div>
		  		
		  		<div class="form-group">
		    		<label for="email">Email</label>
		    		<input type="text" class="form-control" id="email" autocomplete="off" name="email">
		    		<small class="form-text text-danger"><?= form_error('email'); ?></small>
		  		</div>
		  		
		  		<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Program Aplikasi">Program Aplikasi</option>
				      <option value="Jaringan">Jaringan</option>
				      <option value="Desain">Desain</option>
				    </select>
				    <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				</div>

				<button type="submit" name="simpan" class="btn btn-primary float-right">
					Tambah
				</button>
			</form>
		  </div>
		</div>
	</div>
</div>