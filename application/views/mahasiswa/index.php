<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
	<div class="row mt-3">
		<div class="col-md-6">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	</div>
	</div>
	<?php endif; ?>	

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?=base_url();?>/mahasiswa/tambah" class="btn btn-primary"> Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<!-- search input -->
				<div class="input-group ">
				  <input type="text" class="form-control" placeholder="Cari data mahasiswa..." name="cari">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row-mt-3">	
		<div class="col-md-6">
			<h1>Daftar Mahasiswa</h1>	
				<!-- data mahasiwa tidak ada  -->
				<?php if (empty($mahasiswa)): ?>
					<div class="alert alert-danger" role="alert">
					  Data Mahasiswa tidak ditemukan
					</div>
				<?php endif; ?>
				<!-- data mahasiswa -->
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs): ?>
				  <li class="list-group-item"><?= $mhs['nama'] ?>
				  <a class="badge badge-danger float-right" href="<?=base_url();?>/mahasiswa/hapus/<?=$mhs['id'];?>" onclick="return confirm('anda yakin?');" >hapus</a>
				  <a class="badge badge-primary float-right" href="<?=base_url();?>/mahasiswa/detail/<?=$mhs['id'];?>" >Detail</a>
				  <a class="badge badge-success float-right" href="<?=base_url();?>/mahasiswa/ubah/<?=$mhs['id'];?>" >Ubah</a>
				  </li>
				<?php 	endforeach; ?>
			</ul>
		</div>	
	</div>	
</div>