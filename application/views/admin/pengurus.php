<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=site_url('admincontroller/tambah_pengurus')?>" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Pengurus</a>
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data Pengurus</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" style="width:100%" id="tableberita">
								<thead>
									<tr> <th>
										No
									</th>
									<th>
										Nama
									</th>
									<th>
										Posisi
									</th>
									<th>
										Aksi
									</th>

								</tr>
							</thead>
							<tbody>
								<?php $no=1; 
								foreach ($pengurus as $key): ?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$key->nama;?></td>
									<td><?=$key->jabatan;?></td>
									<td>
										<a href="<?=site_url('admincontroller/edit_pengurus/'.$key->id_pengurus)?>" class="btn btn-primary">Ubah</a>
										<a onclick="buttondeletepengurus(<?=$key->id_pengurus?>)"><button class="btn btn-danger">Hapus</button></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div>