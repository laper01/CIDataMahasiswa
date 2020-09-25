<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Mahasiswa
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
				 	<input type="hidden" name="id" value="<?=$mahasiswa['id']?>">
					<form>
					  <div class="form-group">
					    <label for="nama"> Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama" value="<?=$mahasiswa['nama'];?>" >
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('nama');?></small>
					  </div>

					  <div class="form-group">
					    <label for="nrp"> NRP</label>
					    <input type="text" name="nrp"  class="form-control" id="nrp" value="<?=$mahasiswa['nrp'];?>">
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('nrp');?></small>
					  </div>

					  <div class ="form-group">
					    <label for="email">E-mail</label>
					    <input type="text" name="email" class="form-control" id="email" value="<?=$mahasiswa['email'];?>">
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('email');?></small>
					  </div>

					<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				    <?php foreach($jurusan as $j): ?>
				    	<?php if ($j == $mahasiswa['jurusan']): ?>
				    		<option value="<?= $j;?>" selected ><?= $j;?></option>
				    		<?php else : ?>
				    		<option value="<?= $j;?>"><?= $j;?></option>
				    	<?php endif ?>
				      
				     <?php endforeach; ?>
				    </select>
					    <!-- falidasi error -->
				    <small class="form-text text-danger"><?=form_error('jurusan');?></small>
				  </div>
				  <button  type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
				</form>
			    
			  </div>
			</div>
			
		</div>
	</div>
</div>