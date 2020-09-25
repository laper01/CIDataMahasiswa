<div class="container">
<h3 class="mt-3">List Of People </h3>
<!-- kolom pencarian -->
	<div class="row">
		<div class="col-md-6">
			<form action="<?=base_url('people');?>" method="post">
				<!-- bootstrap input -->
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Cari...." name="cari" autofocus>
				  <div class="input-group-append">
				  	<input class="btn btn-primary" type="submit" name="submit" >
				  </div>
				</div>

			</form>
		</div>
	</div>
	<!-- tabel  -->
	<div class="row">
		<div class="col-md-10">
			<h5> hasil : <?=$total_rows?></h5>
			<table class="table">
				<thead>
					<tr>
						<th>no</th>
						<th>Name</th>
						<th>email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- klo ndak ada data -->
					<?php if (empty($people)): ?>
						<tr >
							<td colspan="4"><div class="alert alert-danger" role="alert"> data tidak ditemukan</div></td>
						</tr>
					<?php endif; ?>
					<!-- loop -->
					<?php foreach($people as $p): ?>
						
					<tr>
						<th><?= $start+=1;?></th>
						<td><?= $p['name']; ?></td>
						<td><?=$p['email'] ?></td>
						<td>
							 <a class="badge badge-danger" onclick="return confirm('anda yakin?');" >hapus</a>
							  <a class="badge badge-primary" >Detail</a>
							  <a class="badge badge-success">Ubah</a>
						</td>
					</tr>
				<?php endforeach; ?>
				<!-- endloop -->
				</tbody>
			</table>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>