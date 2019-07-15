<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title ">Pengguna</h4>
						<p class="card-category"> Tambah Login Pengguna</p>
					</div>
					<div class="card-content">
						<form action="<?=site_url('adminController/proses_regis')?>" method="post" accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Nama</label>
										<input type="text" name="nama" class="form-control">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">No Handphone</label>
										<input type="number" name="nohp" class="form-control">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Email</label>
										<input type="email" name="email" class="form-control">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Password</label>
										<input type="password" name="password" class="form-control">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group is-empty">
										<label class="control-label">Role</label>
										<select class="form-control" name="role">
											<option value="" disabled=""></option>
											<option value="admin">admin</option>
											<option value="member">Member</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group pull-right" align="right" style="padding-right:15px;">
										<button class="btn btn-primary" type="submit">Simpan</button>
									</div>
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>