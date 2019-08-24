<div id="preloader"></div>
<!-- hero area start -->
<section class="hero-area" id="home" style="padding-top: 90px !important;">
	<!-- <div class="hero-area-slider">
		<?php foreach ($home as $beranda) { ?>
			<div class="hero-area-single-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="hero-area-content">
								<h1>Selamat Datang !</h1>
								<p><?=$beranda->deskripsi?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div> -->
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
					<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;">Koperasi PKK Melati Jaya</h2>
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

<!-- team section start -->
<section class="team-area ptb-90" id="team" style="background-color: #f5f8fd;">
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
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Dana ROBINSON</h3>
										<span class="post">Marketing Consultant</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Dr. Bernard COVA</h3>
										<span class="post">Marketing - Auteur</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Dr. Francis Guilbert</h3>
										<span class="post">Docteur - Chercheur</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Dr. Georges WANET</h3>
										<span class="post">Docteur</span>
									</div>
								</div>
							</div>
						</div>
						<!--.row-->
					</div>
					<!--.item-->

					<div class="carousel-item">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Ted SICHELMAN</h3>
										<span class="post">Law expert</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Dr. Noël ALBERT</h3>
										<span class="post">Marketing Consultant</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="our-team">
									<div class="pic">
										<img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
									</div>
									<div class="team-content">
										<h3 class="title">Ray BENEDICKTUS</h3>
										<span class="post">Experienced Marketing Consultant</span>
									</div>
								</div>
							</div>
						</div>
						<!--.row-->
					</div>
					<!--.item-->
				</div>
				<!--.carousel-inner-->
			</div>
			<!--.Carousel-->
		</div>
	</div>
</section>

<!-- blog section start -->
<!-- <div style="background: url(assets/img/footer.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div> -->
<section class="blog-area ptb-90" id="Berita">
	<div class="container">
		<h2 style="padding: 0;margin-bottom: 5px;letter-spacing: 2px;text-align: center;">Berita</h2>
		<center><div class="double-line"></div></center>
		<div class="row" id="blog" style="margin: 3% auto;">

		</div>
		<div id='pagination'></div>
	</div>
</section>
<!-- blog section end -->

<!-- counter section start -->
<div style="background: url(assets/img/footer-grey.PNG) center center no-repeat;background-size: cover;width: 100%;height:64px;line-height: 0;"></div>
<section style="padding-top: 20px;padding-bottom:50px;background-color: #dedfe1;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6">
				<div style="text-align: left;padding-right: 25px;">
					<h2 style="margin-bottom: 20px;font-weight: 100;">Ayo mulai berlangganan dengan <br>Koperasi PKK Melati Jaya</h2>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<button class="btn btn-primary btn-lg btn-block" style="margin-top: 15px;font-size: 16px;font-weight: bold;padding: 10px;">Mulai Berlangganan</button>
			</div>
		</div>
	</div>
</section>
<!-- counter section end -->

<!-- footer section start -->