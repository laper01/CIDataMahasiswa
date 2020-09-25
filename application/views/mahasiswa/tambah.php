<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
					<form>
					  <div class="form-group">
					    <label for="nama"> Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama" >
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('nama');?></small>
					  </div>

					  <div class="form-group">
					    <label for="nrp"> NRP</label>
					    <input type="text" name="nrp"  class="form-control" id="nrp" >
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('nrp');?></small>
					  </div>

					  <div class ="form-group">
					    <label for="email">E-mail</label>
					    <input type="text" name="email" class="form-control" id="email" >
					    <!-- falidasi error -->
					    <small class="form-text text-danger"><?=form_error('email');?></small>
					  </div>

					<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Teknik Informatika" >Teknik Informatika</option>
				      <option value="Teknik Elektro">Teknik Elektro</option>
				      <option value="Teknik Industri">Teknik Industri</option>
				      <option value="Teknik Mesin">Teknik Mesin</option>
				    </select>
					    <!-- falidasi error -->
				    <small class="form-text text-danger"><?=form_error('jurusan');?></small>
				  </div>
				  <button  type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			    
			  </div>
			</div>
			
		</div>
	</div>
</div>