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
								<img src="<?php echo base_url('assets/img/berita/'.$beranda->gambar); ?>" style="height:400px;border-radius: 12px;">
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
				<a href="http://simpanpinjam.koperasipkkmelatijaya.co.id/register" target="_blank"><button class="btn btn-lg btn-ayo">Mulai Bergabung</button></a>
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
				<div class="owl-carousel owl-theme">
					<?php foreach ($pengurus as $team) {?>
						<div class="item">
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
			</div>
		</div>
		<!--.Carousel-->
		</div>
	</section>

	<!-- counter section start -->
	<div style="background: url(assets/img/footer-grey.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div>
	<section style="padding-top: 20px;padding-bottom:50px;background-color: #dedfe1;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-title">
						<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Kalender Acara</h2>
						<center><div class="double-line"></div></center>
					</div>
				</div>
				<div id="calendar"></div>
				<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalTitle"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" id="modalBody">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- counter section end -->

<!-- footer section start -->