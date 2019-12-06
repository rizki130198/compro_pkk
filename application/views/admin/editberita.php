<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title">Data Berita</h4>
					</div>
					<div class="card-body">
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
                                								<input type="hidden" value="<?=$post->gambar?>" class="form-control" name="oldFoto">
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
										<input type="text" class="form-control" name="judul" value="<?=$post->judul?>">
										<input type="hidden" class="form-control" name="oldFoto[]"><input type="hidden" class="form-control" name="idberita" value="<?=$post->idberita?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Isi Berita</label>
										<div class="form-group bmd-form-group">
											<textarea class="form-control" id="editor" name="berita" rows="5"><?=$post->deskripsi?></textarea>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<button type="submit" class="btn btn-primary pull-right">Update Berita</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>