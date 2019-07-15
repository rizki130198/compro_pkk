<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=site_url('tambah_menu')?>" class="btn btn-primary">Tambah Menu</a>
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data menu</h4>
						<p class="card-category"> Isi dari menu Company Profile</p>
					</div>
					<div class="card-content">
						<div class="table-responsive">
							<table class="table">
								<thead class=" text-primary">
									<tr>
										<th>
											No
										</th>
										<th>
											Nama Menu
										</th>
										<th>
											Aksi
										</th>

									</tr></thead>
									<tbody>
										<?php $no=1; foreach ($menu as $key): ?>
											
											<tr>
												<td><?=$no++?></td>
												<td><?=$key->menu?></td>
												<td><button class="btn btn-info" id="">Edit</button><button class="btn btn-danger">Delete</button></td>
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