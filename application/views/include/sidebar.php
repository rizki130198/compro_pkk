   
<div class="sidebar" data-color="purple" data-background-color="white"> 
	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="nav-item <?=($this->uri->segment(2)=='')?'active':'' ?>  ">
				<a class="nav-link" href="<?=site_url('admincontroller')?>">
					<i class="material-icons">dashboard</i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="nav-item <?=($this->uri->segment(2)=='menu')?'active':'' ?>">
				<a class="nav-link " href="<?=site_url('admincontroller/menu')?>">
					<i class="material-icons">person</i>
					<p>Pengaturan Menu</p>
				</a>
			</li>
			<li class="nav-item <?=($this->uri->segment(2)=='berita')?'active':'' ?>">
				<a class="nav-link" href="<?= site_url('admincontroller/berita') ?>">
					<i class="material-icons">content_paste</i>
					<p>Pengaturan Berita</p>
				</a>
			</li>
			<li class="nav-item <?=($this->uri->segment(2)=='settinghome')?'active':'' ?>">
				<a class="nav-link" href="<?= site_url('admincontroller/settinghome') ?>">
					<i class="material-icons">content_paste</i>
					<p>Pengaturan Halaman</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="<?= site_url('admincontroller/keluar') ?>">
					<i class="material-icons">content_paste</i>
					<p>Keluar</p>
				</a>
			</li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
<div class="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<a class="navbar-brand" href="#pablo">Dashboard</a>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggler" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
<!-- 			<div class="collapse navbar-collapse justify-content-end">
				<form class="navbar-form">
					<div class="input-group no-border">
						<input type="text" value="" class="form-control" placeholder="Search...">
						<button type="submit" class="btn btn-white btn-round btn-just-icon">
							<i class="material-icons">search</i>
							<div class="ripple-container"></div>
						</button>
					</div>
				</form>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#pablo">
							<i class="material-icons">dashboard</i>
							<p class="d-lg-none d-md-block">
								Stats
							</p>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">notifications</i>
							<span class="notification">5</span>
							<p class="d-lg-none d-md-block">
								Some Actions
							</p>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Mike John responded to your email</a>
							<a class="dropdown-item" href="#">You have 5 new tasks</a>
							<a class="dropdown-item" href="#">You're now friend with Andrew</a>
							<a class="dropdown-item" href="#">Another Notification</a>
							<a class="dropdown-item" href="#">Another One</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#pablo">
							<i class="material-icons">person</i>
							<p class="d-lg-none d-md-block">
								Account
							</p>
						</a>
					</li>
				</ul>
			</div> -->
		</div>
	</nav>