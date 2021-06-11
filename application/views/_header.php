<body>

<div class="content-wrapper">

	<nav class="navbar">

		<?php if ($home[0]->tab_7 == 'En') { ?>

			<div class="container">

				<div class="flex-it">

					<div class="navbar-header">

						<div class="navbar-brand"><a href="<?php echo base_url(); ?>">

								<img src="#"

									 srcset="<?php echo base_url(); ?>uploads/<?php echo $logo[0]->logo_name; ?> 1x, <?php echo base_url(); ?>uploads/<?php echo $logo[1]->logo_name; ?> 2x"

									 alt=""/></a></div>

						<div class="nav-bars-wrapper">

							<div class="nav-bars-inner">

								<div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse">

									<span></span>

								</div>

							</div>

						</div>

					</div>

					<div class="navbar-collapse collapse">

						<ul class="nav navbar-nav">

							<li class="mega-menu"><a href="<?php echo base_url(); ?>"><?php echo $home[0]->tab_1; ?></a>

							</li>

							<li><a href="<?php echo base_url(); ?>about-us"><?php echo $home[0]->tab_2; ?></a></li>

							<li><a href="<?php echo base_url(); ?>our-services"><?php echo $home[0]->tab_3; ?></a></li>

							<li><a href="<?php echo base_url(); ?>news"><?php echo $home[0]->tab_4; ?></a></li>

							<li><a href="<?php echo base_url(); ?>buy-from-turkey"><?php echo $home[0]->tab_5; ?></a></li>

							<li><a href="<?php echo base_url(); ?>contact-us"><?php echo $home[0]->tab_6; ?></a></li>

							<li><a><?php echo $home[0]->tab_7; ?><span

											class="caret"></span></a>

								<ul class="dropdown-menu">

									<li><a href="<?php echo base_url(); ?>ar/home"><?php echo $home[0]->tab_8; ?></a>

									</li>

									<li><a href="<?php echo base_url(); ?>tr/anasayfa"><?php echo $home[0]->tab_9; ?></a>

									</li>

								</ul>

							</li>

						</ul>

					</div>

				</div>

			</div>

		<?php } elseif ($home[0]->tab_7 == 'Tr') { ?>

			<div class="container">

				<div class="flex-it">

					<div class="navbar-header">

						<div class="navbar-brand"><a href="<?php echo base_url(); ?>tr/anasayfa">

								<img src="#"

									 srcset="<?php echo base_url(); ?>uploads/<?php echo $logo[0]->logo_name; ?> 1x, <?php echo base_url(); ?>uploads/<?php echo $logo[1]->logo_name; ?> 2x"

									 alt=""/></a></div>

						<div class="nav-bars-wrapper">

							<div class="nav-bars-inner">

								<div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse">

									<span></span>

								</div>

							</div>

						</div>

					</div>

					<div class="navbar-collapse collapse">

						<ul class="nav navbar-nav">

							<li class="mega-menu"><a

										href="<?php echo base_url(); ?>tr/anasayfa"><?php echo $home[0]->tab_1; ?></a>

							</li>

							<li><a href="<?php echo base_url(); ?>tr/hakkimizda"><?php echo $home[0]->tab_2; ?></a></li>

							<li><a href="<?php echo base_url(); ?>tr/servislerimiz"><?php echo $home[0]->tab_3; ?></a></li>

							<li><a href="<?php echo base_url(); ?>news/tr"><?php echo $home[0]->tab_4; ?></a></li>

							<li><a href="<?php echo base_url(); ?>tr/buy-from-turkey"><?php echo $home[0]->tab_5; ?></a></li>

							<li><a href="<?php echo base_url(); ?>tr/iletisim"><?php echo $home[0]->tab_6; ?></a></li>

							<li><a><?php echo $home[0]->tab_7; ?><span

											class="caret"></span></a>

								<ul class="dropdown-menu">

									<li><a href="<?php echo base_url(); ?>ar/home"><?php echo $home[0]->tab_8; ?></a>

									</li>

									<li><a href="<?php echo base_url(); ?>"><?php echo $home[0]->tab_9; ?></a></li>

								</ul>

							</li>

						</ul>

					</div>

				</div>

			</div>

		<?php } else { ?>

				<style>

					@media (min-width: 992px) {

						.navbar .navbar-collapse {

							float: left!important;

							left: 0!important;

						}



						.navbar:not(.center):not(.extended) .navbar-nav {

							float: left!important;

						}

					}

				</style>

			<div class="container menuMobile1" dir="rtl">

				<div class="flex-it">

					<div class="navbar-header">

						<div class="navbar-brand"><a href="<?php echo base_url(); ?>ar/home">

								<img src="#"

									 srcset="<?php echo base_url(); ?>uploads/<?php echo $logo[0]->logo_name; ?> 1x, <?php echo base_url(); ?>uploads/<?php echo $logo[1]->logo_name; ?> 2x"

									 alt=""/></a></div>

						<div class="nav-bars-wrapper">

							<div class="nav-bars-inner">

								<div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse">

									<span></span>

								</div>

							</div>

						</div>

					</div>

					<div class="navbar-collapse collapse" >

						<ul class="nav navbar-nav">

							<li><a><?php echo $home[0]->tab_7; ?><span

											class="caret"></span></a>

								<ul class="dropdown-menu">

									<li><a href="<?php echo base_url(); ?>tr/anasayfa"><?php echo $home[0]->tab_8; ?></a>

									</li>

									<li><a href="<?php echo base_url(); ?>"><?php echo $home[0]->tab_9; ?></a></li>

								</ul>

							</li>

							<li><a href="<?php echo base_url(); ?>ar/contact-us"><?php echo $home[0]->tab_6; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/buy-from-turkey"><?php echo $home[0]->tab_5; ?></a></li>

							<li><a href="<?php echo base_url(); ?>news/ar"><?php echo $home[0]->tab_4; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/our-services"><?php echo $home[0]->tab_3; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/about-us"><?php echo $home[0]->tab_2; ?></a></li>

							<li class="mega-menu"><a

										href="<?php echo base_url(); ?>ar/home"><?php echo $home[0]->tab_1; ?></a>

							</li>

						</ul>

					</div>

				</div>

			</div>

			<div class="container menuMobile2" dir="rtl">

				<div class="flex-it">

					<div class="navbar-header">

						<div class="navbar-brand"><a href="<?php echo base_url(); ?>ar/home">

								<img src="#"

									 srcset="<?php echo base_url(); ?>uploads/<?php echo $logo[0]->logo_name; ?> 1x, <?php echo base_url(); ?>uploads/<?php echo $logo[1]->logo_name; ?> 2x"

									 alt=""/></a></div>

						<div class="nav-bars-wrapper">

							<div class="nav-bars-inner">

								<div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse">

									<span></span>

								</div>

							</div>

						</div>

					</div>

					<div class="navbar-collapse collapse">

						<ul class="nav navbar-nav">

							<li class="mega-menu"><a

										href="<?php echo base_url(); ?>ar/home"><?php echo $home[0]->tab_1; ?></a>

							</li>

							<li><a href="<?php echo base_url(); ?>ar/about-us"><?php echo $home[0]->tab_2; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/our-services"><?php echo $home[0]->tab_3; ?></a></li>

							<li><a href="<?php echo base_url(); ?>news/ar"><?php echo $home[0]->tab_4; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/buy-from-turkey"><?php echo $home[0]->tab_5; ?></a></li>

							<li><a href="<?php echo base_url(); ?>ar/contact-us"><?php echo $home[0]->tab_6; ?></a></li>

							<li><a><?php echo $home[0]->tab_7; ?><span

											class="caret"></span></a>

								<ul class="dropdown-menu">

									<li><a href="<?php echo base_url(); ?>tr/anasayfa"><?php echo $home[0]->tab_8; ?></a>

									</li>

									<li><a href="<?php echo base_url(); ?>"><?php echo $home[0]->tab_9; ?></a></li>

								</ul>

							</li>

						</ul>

					</div>

				</div>

			</div>

		<?php } ?>

	</nav>

