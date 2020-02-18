<div class="container mt-3">
	<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		   Ubah Data Mahasiswa
		  </div>
		  <div class="card-body">
		    <form action="" method="POST">
		    	<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
				<div class="form-group">
		    		<label for="nama">Nama</label>
		    		<input type="text" class="form-control" id="nama" autocomplete="off" name="nama" value="<?= $mahasiswa['nama']; ?>">
		    		<small class="form-text text-danger"><?= form_error('nama'); ?></small>
		  		</div>

		  		<div class="form-group">
		    		<label for="nis">NIS</label>
		    		<input type="text" class="form-control" id="nis" autocomplete="off" name="nis" value="<?= $mahasiswa['nis']; ?>">
		    		<small class="form-text text-danger"><?= form_error('nis'); ?></small>
		  		</div>
		  		
		  		<div class="form-group">
		    		<label for="email">Email</label>
		    		<input type="text" class="form-control" id="email" autocomplete="off" name="email" value="<?= $mahasiswa['email']; ?>">
		    		<small class="form-text text-danger"><?= form_error('email'); ?></small>
		  		</div>
		  		
		  		<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <?php foreach ( $jurusan as $jur) : ?>
				      	<?php if ( $jur == $mahasiswa['jurusan']) : ?>
				      		<option value="<?= $jur; ?>" selected><?= $jur; ?></option>
				      	<?php else : ?>
				      		<option value="<?= $jur; ?>"><?= $jur; ?></option>
				      	<?php endif; ?>
				      <?php endforeach; ?>
				    </select>
				    <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				</div>

				<button type="submit" name="simpan" class="btn btn-primary float-right">
					Ubah
				</button>
			</form>
		  </div>
		</div>
	</div>
</div>