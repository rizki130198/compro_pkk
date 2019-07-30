<!-- header section start -->
<style type="text/css">
ul li.drop {
	position: relative;
}

ul li a:hover {
	color: #eee;
}

.dropOut .triangle {
	width: 0;
	height: 0;
	position: absolute;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
	border-bottom: 8px solid white;
	top: -8px;
	left: 50%;
	margin-left: -8px;
}
.dropdownContain {
	width: 160px;
	position: absolute;
	z-index: 2;
	left: 50%;
	margin-left: -80px; /* half of width */
	top: -400px;
	margin-top: -35px;
}
.dropOut {
	width: 160px;
	background: white;
	float: left;
	position: relative;
	margin-top: 0px;
	opacity: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-moz-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-webkit-transition: all .1s ease-out;
	-moz-transition: all .1s ease-out;
	-ms-transition: all .1s ease-out;
	-o-transition: all .1s ease-out;
	transition: all .1s ease-out;
}

.dropOut ul {
	float: left;
	padding: 10px 0;
}
.dropOut ul li {
	text-align: left;
	float: left;
	width: 135px;
	padding: 5px;
	margin: 0px 10px;
	color: #777;
	cursor: pointer;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background .1s ease-out;
	-moz-transition: background .1s ease-out;
	-ms-transition: background .1s ease-out;
	-o-transition: background .1s ease-out;
	transition: background .1s ease-out;
}

.dropOut ul li:hover {
	background: #f6f6f6;
}

ul li:hover a { color: white; }
ul li:hover .dropdownContain { top: 65px; }
ul li:hover .underline { border-bottom-color: #777; }
ul li:hover .dropOut { opacity: 1; margin-top: 8px; }</style>
<header class="header">
	<div class="container">
		<div class="row flexbox-center">
			<div class="col-lg-3 col-md-3 col-6">
				<div class="logo">
					<a href="#home" style="color: #fff;font-size: 14px;"><img src="<?php echo base_url('assets/img/logo.png'); ?>" style="margin-right: 10px;width: 45px;">Koperasi PKK Melati Jaya</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-6">
				<div class="responsive-menu"></div>
				<div class="mainmenu">
					<ul id="primary-menu" class="Navigation">
						<?php if ($this->uri->segment(1) == "") { ?>
							<li><a class="nav-link active" href="#home">Beranda</a></li>
							<li><a class="nav-link" href="#Tentang">Tentang</a></li>
							<li><a class="nav-link" href="#team">Pengurus</a></li>
							<li><a class="nav-link" href="#Berita">Berita</a></li>
							<li><a class="nav-link" href="#Hubungi Kami">Hubungi Kami</a></li>
						<?php }else{ ?>
							<li><a class="nav-link active" href="<?php echo site_url(''); ?>">Beranda</a></li>
							<li><a class="nav-link" href="<?php echo site_url(''); ?>">Tentang</a></li>
							<li><a class="nav-link" href="<?php echo site_url(''); ?>">Pengurus</a></li>
							<li><a class="nav-link" href="berita">Berita</a></li>
							<li><a class="nav-link" href="#Hubungi Kami">Hubungi Kami</a></li>
						<?php } ?>
						<li class="drop">
							<a href="#produk">Produk <i class="caret"></i></a>
							<div class="dropdownContain">
								<div class="dropOut">
									<div class="triangle"></div>
									<ul>
										<li>PKK Mark</li>
										<li>Simpan Pinjam</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header section end -->