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
			<div class="col-lg-12">
				<div class="sec-title">
					<h2>Tentang PKK<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
					<p><?=$tentang->deskripsi?></p>
				</div>
			</div>
		</div>
<!-- 		<div class="row">
			<div class="col-lg-4">
				<div class="single-about-box">
					<i class="icofont icofont-ruler-pencil"></i>
					<h4>Responsive Design</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-about-box active">
					<i class="icofont icofont-computer"></i>
					<h4>Fast Performance</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-about-box">
					<i class="icofont icofont-headphone-alt"></i>
					<h4>Cross Platfrom</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!-- about section end -->

<!-- blog section start -->
<section class="blog-area ptb-90" id="Berita">
	<div class="container">
		<div class="row" id="blog">
			
<!-- 			<div class="col-lg-4 col-md-6">
				<div class="single-post">
					<div class="post-thumbnail">
						<a href="blog.html"><img src="assets/img/blog/blog2.jpg" alt="blog"></a>
					</div>
					<div class="post-details">
						<div class="post-author">
							<a href="blog.html"><i class="icofont icofont-user"></i>John</a>
							<a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
							<a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
						</div>
						<h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 d-md-none d-lg-block">
				<div class="single-post">
					<div class="post-thumbnail">
						<a href="blog.html"><img src="assets/img/blog/blog3.jpg" alt="blog"></a>
					</div>
					<div class="post-details">
						<div class="post-author">
							<a href="blog.html"><i class="icofont icofont-user"></i>John</a>
							<a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
							<a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
						</div>
						<h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-post">
					<div class="post-thumbnail">
						<a href="blog.html"><img src="assets/img/blog/blog1.jpg" alt="blog"></a>
					</div>
					<div class="post-details">
						<div class="post-author">
							<a href="blog.html"><i class="icofont icofont-user"></i>John</a>
							<a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
							<a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
						</div>
						<h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-post">
					<div class="post-thumbnail">
						<a href="blog.html"><img src="assets/img/blog/blog2.jpg" alt="blog"></a>
					</div>
					<div class="post-details">
						<div class="post-author">
							<a href="blog.html"><i class="icofont icofont-user"></i>John</a>
							<a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
							<a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
						</div>
						<h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 d-md-none d-lg-block">
				<div class="single-post">
					<div class="post-thumbnail">
						<a href="blog.html"><img src="assets/img/blog/blog3.jpg" alt="blog"></a>
					</div>
					<div class="post-details">
						<div class="post-author">
							<a href="blog.html"><i class="icofont icofont-user"></i>John</a>
							<a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
							<a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
						</div>
						<h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
					</div>
				</div>
			</div> -->
		</div>
		<div id='pagination'></div>
	</div>
</section><!-- blog section end -->
<!-- footer section start -->