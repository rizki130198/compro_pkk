<section class="hero-area breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="hero-area-content">
					<h1><?=$row->judul?></h1>
					<ul>
						<li><a href="<?=site_url('/')?>">Beranda</a></li>
						<li><a href="<?=site_url('/')?>">Berita</a></li>
						<li><a href="#"><?=$row->judul?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- blog section start -->
<section class="blog-detail" id="">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog-details">
					<h2 style="margin-bottom: 15px;"><?=$row->judul?></h2>
					<img src="<?=base_url('assets/img/berita/'.$row->gambar)?>" alt="blog-details">
					<div class="post-author" style="background-color: #fff;padding-left: 0;">
						<a href="#"><i class="icofont icofont-user"></i>Admin</a>
						<a href="#"><i class="icofont icofont-calendar"></i><?=$row->created_at?></a>
					</div>
					<p><?=$row->deskripsi?></p>
				</div>
<!-- 				<div class="blog-reply">
					<h4>Leave a Reply</h4>
					<form action="#" method="POST">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" name="replyname" placeholder="Enter Your Name">
							</div>
							<div class="col-lg-6">
								<input type="email" name="replyemail" placeholder="Enter Your Email">
							</div>
							<div class="col-lg-12">
								<textarea placeholder="Messege" name="message"></textarea>
								<button type="submit" name="replysubmit">Post Comment</button>
							</div>
						</div>
					</form>
				</div> -->
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget">
						<form action="#">
							<input type="text" name="search" placeholder="Search here">
							<button type="submit">Go</button>
						</form>
					</div>
					<div class="widget">
						<h4>Latest posts</h4>
						<ul>
							<li><a href="#">Savings now offers checking account</a></li>
							<li><a href="#">Facebook begins Stories on desktop</a></li>
							<li><a href="#">Nintendo compatible NES30 Arcade now</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- blog section end -->