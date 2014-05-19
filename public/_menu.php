<?php

if (isset($menu) == false) {
    $menu = 'home';
}

?>

<div class="masthead">
	<div class="container">
		<div class="row">
			<div class="span2"><h1><a href="/"><img src="/images/logo.png" width="200px" /></a></h1></div>
			
			<div class="span10">
				<div class="row">
					<div class="span10">
						<ul class="nav nav-pills pull-right" style="margin-top: 20px;">
							<li class="social-icons"><a href="http://instagram.com/ginsjuicesc"><i class="icon-instagram"></i></a></li>
							<li class="social-icons"><a href="https://www.facebook.com/GinsJuiceSC"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="span10">
						<ul class="nav nav-pills pull-right" style="margin-top: 55px;">
							<li><a <?php if ($menu == 'mobile') : ?> class="active"<?php endif; ?> href="/mobile.php">Mobile Juice Bar</a></li>
        					<li><a <?php if ($menu == 'menu') : ?> class="active"<?php endif; ?> href="/menu.php">Menu</a></li>
        					<!--<li><a <?php if ($menu == 'packages') : ?> class="active"<?php endif; ?> href="/packages.php">Cleanses & Packages</a></li>-->
        					<!--<li><a <?php if ($menu == 'about') : ?> class="active"<?php endif; ?> href="/about.php">About</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>    
</div>