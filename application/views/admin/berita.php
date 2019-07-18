<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=site_url('tambah_berita')?>" class="btn btn-primary">Tambah Berita</a>
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data Berita</h4>
						<p class="card-category"> Isi Berita</p>
					</div>
					<div class="card-content">
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
									<td><a href="<?=site_url('admincontroller/edit_berita/'.$key['idberita'])?>" class="btn btn-info">edit</a><a onclick="buttondeleteberita(<?=$key['idberita']?>)" class="btn btn-danger">delete</a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php foreach ($post as $modal): ?>
		<div class="modal fade" id="modaleditberita<?=$modal['idberita']?>" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Edit Berita</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= site_url('admincontroller/actEditBerita') ?>" enctype="multipart/form-data"  accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<label>Foto Berita</label>
									<div class="controls-skpd">
										<div class="forms-skpd row">
											<div class="entry-skpd">
												<div class="row">
													<div class="col-md-12">
														<div class="col-md-12">
															<div class="well">
																<input type="file" name="foto">
															</div>
														</div>  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group bmd-form-group">
										<label class="bmd-label-floating">Judul</label>
										<input type="text" class="form-control" name="judul" value="<?=$modal['judul']?>">
										<input type="hidden" class="form-control" name="idberita" value="<?=$modal['idberita']?>">
										<input type="hidden" class="form-control" name="oldFoto[]">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Isi Berita</label>
										<div class="form-group bmd-form-group">
											<textarea class="form-control" id="editor" name="berita" rows="5"><?=$modal['deskripsi']?></textarea>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Ubah</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php endforeach ?>
	</div>
</div>
</div>