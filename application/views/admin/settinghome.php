<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
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
												<td><a onclick="buttonedithome(<?=$beranda->id_menu?>)" class="btn btn-info">edit</a></td>
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
												<td><a onclick="buttonedittentang(<?=$tentang->id_tentang?>)" class="btn btn-info">edit</a></td>
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
												<th>
													Aksi
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
														<td><a onclick="buttondeletekontak(<?=$key->idkontak?>)" class="btn btn-danger">delete</a></td>
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