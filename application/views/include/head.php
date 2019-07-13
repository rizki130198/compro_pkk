<!-- header section start -->
<header class="header">
	<div class="container">
		<div class="row flexbox-center">
			<div class="col-lg-2 col-md-3 col-6">
				<div class="logo">
					<a href="#home" style="color: #fff;font-size: 14px;">PKK COMPANY PROFILE</a>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-6">
				<div class="responsive-menu"></div>
				<div class="mainmenu">
					<ul id="primary-menu">
						<?php foreach ($menu as $key): ?>
							<li><a class="nav-link" href="#<?=$key->menu?>"><?=$key->menu?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header section end -->