<footer class="footer" id="Hubungi Kami">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form" style="max-height: 75%;">
					<h4>Hubungi Kami</h4>
					<p class="form-message"></p>
					<form id="contact-form" action="<?= site_url('main/sendmessage') ?>" method="POST">
						<input type="text" name="name" placeholder="Masukan Nama Anda">
						<input type="email" name="email" placeholder="Masukan Email Anda">
						<input type="text" name="subject" placeholder="Subjek Kamu">
						<textarea placeholder="pesan" name="message"></textarea>
						<button type="submit" name="submit">Kirim Pesan</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact-address" style="max-height: 75%;">
					<h4>Alamat</h4>
					<p><?=$alamat->alamat?></p>
					<ul>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-headphone-alt"></i>
							</div>
							<div class="contact-address-info">
								<a href="callto:#"><?=$alamat->nohp?></a>
								<a href="callto:#"><?=$alamat->nohp2?></a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-envelope"></i>
							</div>
							<div class="contact-address-info">
								<a href="">Fax : 021-788-34623</a>
								<a href="mailto:#">support@koperasipkkmelatijaya.co.id</a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-web"></i>
							</div>
							<div class="contact-address-info">
								<a href="www.jsoftbd.com">www.koperasipkkmelatijaya.co.id</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!-- 		<div class="row">
			<div class="col-lg-12">
				<div class="subscribe-form">
					<form action="#">
						<input type="text" placeholder="Your email address here">
						<button type="submit">Subcribe</button>
					</form>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright-area">
					<ul>
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
					</ul>
					<p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer section end -->
	<a href="#" class="scrollToTop">
		<i class="icofont icofont-arrow-up"></i>
	</a>