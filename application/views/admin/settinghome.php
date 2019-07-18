<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=site_url('tambah_home')?>" class="btn btn-primary">Tambah Home</a>
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data Home</h4>
						<p class="card-category"> Isi Home</p>
					</div>
					<div class="card-content">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" style="width:100%" id="tablehome">
								<thead class="text-primary">
									<tr> 
										<th>
											deskripsi
										</th>
										<th>
										 	Gambar
										</th><th>
											Aksi
										</th>

									</tr></thead>
									<tbody>
										<?php foreach ($home as $beranda): ?>
											<tr>
												<td><?=substr($beranda->deskripsi, 0,100)?></td>
												<td><?=$beranda->gambar?></td>
												<td><a href="<?=site_url('admincontroller/edithome/'.$beranda->idhome)?>" class="btn btn-info">edit</a></td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-header" data-background-color="purple">
							<h4 class="card-title ">Tentang Koperasi</h4>
							<p class="card-category"></p>
						</div>
						<div class="card-content">
							<div class="table-responsive">
								<table class="table table-striped table-bordered" style="width:100%" id="tabletentang">
									<thead class="text-primary">
										<tr> 
											<th>
												deskripsi
											</th>
											<th>
												Aksi
											</th>

										</tr></thead>
										<tbody>
											<tr>
												<td><?=substr($tentang->deskripsi, 0,100)?></td>
												<td><a data-toggle="modal" data-target="#modaledittentang<?=$tentang->id_tentang?>" class="btn btn-info">edit</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="purple">
								<h4 class="card-title ">Data Kontak</h4>
								<p class="card-category"> Isi Kontak</p>
							</div>
							<div class="card-content">
								<div class="table-responsive">
									<table class="table table-striped table-bordered" style="width:100%" id="tablekontak">
										<thead class="text-primary">
											<tr> 
												<th>
													Nama
												</th>
												<th>
													Email
												</th>
												<th>
													Subjeck
												</th>
												<th>
													Pesan
												</th>
												<th>
													Tanggal Pesan
												</th>
											</tr></thead>
											<tbody>
												<?php foreach ($kontak as $key): ?>
													<tr>
														<td><?=$key->nama?></td>
														<td><?=$key->email?></td>
														<td><?=$key->subjek?></td>
														<td><?=$key->pesan?></td>
														<td><?= date('d F, Y',strtotime($key->created_at))?></td>
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
			<div class="modal fade" id="modaledittentang<?=$tentang->id_tentang?>" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Edit Tentang</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= site_url('admincontroller/acteditTentang') ?>" enctype="multipart/form-data"  accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Isi tentang</label>
										<div class="form-group bmd-form-group">
											<textarea class="form-control" name="tentang" rows="5"><?=$tentang->deskripsi?></textarea>
											<input type="hidden" name="idnya" value="<?=$tentang->id_tentang?>">
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
