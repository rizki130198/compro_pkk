<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data Pengurus</h4>
						<p class="card-category"> Edit Pengurus</p>
					</div>
					<div class="card-content">
						<form method="post" action="<?= site_url('admincontroller/actEditPengurus') ?>" enctype="multipart/form-data"  accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<label>Foto Pengurus</label>
									<div class="controls-skpd">
										<div class="forms-skpd row">
											<div class="entry-skpd">
												<div class="row">
													<div class="col-md-12">
														<div class="col-md-12">
															<div class="well">
																<input type="file" name="gambar">
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
										<label class="bmd-label-floating">Nama</label>
										<input type="text" class="form-control" name="nama" value="<?=$post->nama?>">
										<input type="hidden" class="form-control" name="oldFoto" value="<?=$post->foto?>">
										<input type="hidden" class="form-control" name="idPengurus" value="<?=$post->id_pengurus?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Posisi Pengurus</label>
										<div class="form-group bmd-form-group">
											<textarea class="form-control" name="posisi" rows="5"><?=$post->deskripsi?></textarea>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<button type="submit" class="btn btn-primary pull-right">Update Pengurus</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>