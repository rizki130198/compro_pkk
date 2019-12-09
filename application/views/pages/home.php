<div id="preloader"></div>
<!-- hero area start -->
<section class="hero-area" id="home">
	<div class="hero-area-slider">
		<?php foreach ($home as $beranda) { ?>
			<div class="hero-area-single-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-area-content">
								<img src="<?php echo base_url('assets/img/'.$beranda->gambar); ?>" style="height:400px;border-radius: 12px;">
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
		<div class="sec-title">
			<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Tentang</h2>
			<center><div class="double-line"></div></center>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-6 col-xs-6 col-tentang">
				<img src="<?php echo base_url('assets/img/back1.jpeg'); ?>" width="80%">
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="sec-title" style="text-align: left;">
					<h3 style="padding: 0;margin-bottom: 10px;letter-spacing: 2px;color: #666;font-weight: 100;">Koperasi PKK Melati Jaya</h3>
					<p><?=$tentang->deskripsi?></p>
					<br>
					<br>
					<a href="<?php echo site_url('tentang'); ?>"><button class="btn btn-subsribe">Selengkapnya</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about section end -->

<!-- blog section start -->
<!-- <div style="background: url(assets/img/footer.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div> -->
<section class="blog-area ptb-90" id="Berita" style="background-color: #f8f8f8;box-shadow: inset 0px 0px 12px 0px rgba(0, 0, 0, 0.1);">
	<div class="container">
		<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;text-align: center;">Berita</h2>
		<center><div class="double-line"></div></center>
		<div class="row" id="blog" style="margin: 3% auto;">

		</div>
		<div id='pagination'></div>
	</div>
</section>
<!-- blog section end -->

<!-- video section start -->
<section class="video-area" style="padding: 50px 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 style="color: #fff;">Ayo daftar menjadi anggota PKK Melati Jaya.</h3>
				<h4 style="color: #fff;margin-top: 20px;font-weight: 100;">Dan ada banyak keungtungannya, tunggu apa lagi?</h4>
				<a href=""><button class="btn btn-lg btn-ayo">Mulai Bergabung</button></a>
			</div>
		</div>
	</div>
</section>
<!-- video section end -->

<!-- team section start -->
<section class="team-area ptb-90" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Pengurus</h2>
					<center><div class="double-line"></div></center>
				</div>
			</div>
		</div>
		<div class="blog">
			<div id="blogCarousel" class="carousel slide" data-ride="carousel">

				<ol class="carousel-indicators">
					<li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#blogCarousel" data-slide-to="1"></li>
				</ol>

				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<?php foreach ($pengurus as $team) {?>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="our-team">
										<div class="pic">
											<img src="<?php echo base_url('assets/anggota/home/'.$team->foto); ?>">
										</div>
										<div class="team-content">
											<h3 class="title"><?=$team->nama?></h3>
											<span class="post"><?=$team->jabatan?></span>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<!--.row-->
					</div>
					<!--.item-->

<!-- 					<div class="carousel-item">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="<?php echo base_url('assets/anggota/home/Sri Irianti.jpg'); ?>">
									</div>
									<div class="team-content">
										<h3 class="title">Sri Irianti</h3>
										<span class="post">Bendahara</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="<?php echo base_url('assets/anggota/home/neni.jpg'); ?>">
									</div>
									<div class="team-content">
										<h3 class="title">Chairunnisa Nasution</h3>
										<span class="post">Wakil Sekretaris dan Unit Usaha</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="<?php echo base_url('assets/anggota/home/Erna M.jpg'); ?>">
									</div>
									<div class="team-content">
										<h3 class="title">Erna S. Maharanto</h3>
										<span class="post">Pengawas</span>
									</div>
								</div>
							</div>
						</div>
						<-- row-->
					</div>
					<!--.item-->
				</div>
				<!--.carousel-inner-->
			</div>
			<!--.Carousel-->
		</div>
	</section>

	<!-- counter section start -->
	<div style="background: url(assets/img/footer-grey.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div>
	<section style="padding-top: 20px;padding-bottom:50px;background-color: #dedfe1;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div style="text-align: left;padding-right: 25px;">
						<h2 style="margin-bottom: 20px;font-weight: 100;">Ayo mulai berlangganan dengan <br>Koperasi PKK Melati Jaya</h2>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<a href=""><button class="btn btn-subsribe btn-lg btn-block">Mulai Berlangganan</button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- counter section end -->

<!-- footer section start -->