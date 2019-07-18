<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Data Home</h4>
						<p class="card-category"> Edit Home</p>
					</div>
					<div class="card-content">
						<form method="post" action="<?= site_url('admincontroller/acteditHome') ?>" enctype="multipart/form-data"  accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<label>Foto Home</label>
									<div class="controls-skpd">
										<div class="forms-skpd row">
											<div class="entry-skpd">
												<div class="row">
													<div class="col-md-12">
														<div class="col-md-12">
															<div class="well">
																<input type="file" name="foto">
															</div>
																<input type="hidden" name="oldFoto[]">
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
									<div class="form-group">
										<label>Isi home</label>
										<div class="form-group bmd-form-group">
											<textarea class="form-control" id="editor" name="deskprisi" rows="5"><?=$post->deskripsi?></textarea>
											<input type="hidden" name="idnya" value="<?=$post->idhome?>">
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