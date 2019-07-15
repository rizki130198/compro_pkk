<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=site_url('tambah_menu')?>" class="btn btn-primary">Tambah Berita</a>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Data Berita</h4>
						<p class="card-category"> Isi Berita</p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" style="width:100%" id="tableberita">
								<thead class="text-primary">
									<tr> <th>
										No
									</th>
									<th>
										Judul
									</th>
									<th>
										deskripsi
									</th>
									<th>
										Tanggal
									</th><th>
										Aksi
									</th>

								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($post as $key): ?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$key['judul']?></td>
									<td><?=substr($key['deskripsi'], 0,100)?></td>
									<td><?=$key['created_at']?></td>
									<td><a onclick="buttonedit(<?=$key['idberita']?>)" class="btn btn-info">edit</a><a onclick="buttondelete(<?=$key['idberita']?>)" class="btn btn-danger">delete</a></td>
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