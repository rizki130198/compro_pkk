<div id="preloader"></div>
<!-- hero area start -->
<section class="hero-area" id="home">
	<div class="hero-area-slider">
		<?php foreach ($home as $beranda) { ?>
			<div class="hero-area-single-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="hero-area-content">
								<h1>Selamat Datang !</h1>
								<p><?=$beranda->deskripsi?></p>
								<a href="#" class="appao-btn">Google Play</a>
								<a href="#" class="appao-btn">App Store</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<!-- hero area end -->

<!-- about section start -->
<section class="about-area ptb-90" id="Tentang">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img src="<?php echo base_url('assets/img/back1.jpeg'); ?>" width="80%">
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="sec-title" style="text-align: left;">
					<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Tentang PKK</h2>
					<div class="double-line"></div>
					<p><?=$tentang->deskripsi?></p>
					<br>
					<br>
					<a href="<?php echo site_url('tentang'); ?>"><button class="btn btn-primary">Selengkapnya</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about section end -->
<!-- counter section start -->
<div style="background: url(assets/img/footer-grey.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div>
<section style="padding-top: 20px;padding-bottom:50px;background-color: #dedfe1;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6">
				<div style="text-align: left;padding-right: 25px;">
					<h2 style="margin-bottom: 20px;">Koperasi PKK Melati Jaya</h2>
					<p>Kami memiliki visi dan misi Badan usaha yang berlandaskan Pancasila dan Undang-Undang Dasar 1945 serta azas-azas kekeluargaan, Membangun dan mengembangkan potensi dan kemampuan ekonomi masyarakat untuk meningkatkan kesejahteraan ekonomi dan sosialnya.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<button class="btn btn-primary btn-lg btn-block" style="margin-top: 15px;margin-bottom: 15px;font-size: 16px;font-weight: bold;padding: 10px;">Tanya Kami</button>
				<button class="btn btn-default btn-lg btn-block" style="background-color: #fff;margin-bottom: 10px;font-size: 16px;font-weight: bold;padding: 10px;">Ayo Bergabung</button>
			</div>
		</div>
	</div>
</section>
<!-- counter section end -->
<!-- team section start -->
<section class="team-area ptb-90" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Pengurus</h2>
					<center><div class="double-line"></div></center>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="assets/img/team/icon.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#"><h4>HJ. Rusmiati Saefullah</h4></a>
						<p>Ketua</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="assets/img/team/icon.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#"><h4>Dra. Arijaty Azhari, Apt</h4></a>
						<p>Wakil Ketua</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="assets/img/team/icon.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#"><h4>Dr. Erna K. Sprapto, M.Pd</h4></a>
						<p>Sekretaris</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="assets/img/team/icon.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#"><h4>Sri Irianti</h4></a>
						<p>Bendahara</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- team section end -->
<!-- blog section start -->
<div style="background: url(assets/img/footer.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div>
<section class="blog-area ptb-90" id="Berita">
	<div class="container">
		<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;text-align: center;">Berita</h2>
		<center><div class="double-line"></div></center>
		<div class="row" id="blog" style="margin: 3% auto;">

		</div>
		<div id='pagination'></div>
	</div>
</section><!-- blog section end -->
<!-- footer section start -->