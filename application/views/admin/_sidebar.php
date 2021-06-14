<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">
		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
		<?php
		$yetki = $this->session->admin_session["authority"];
		if ($yetki == 'Admin') { ?>
			<div class="nano">
				<div class="nano-content">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-main">
							<!-- <li class="nav-active">
							<a href="<?php echo base_url(); ?>unread-messages">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Home</span>
							</a>
						</li> -->
							<li>
								<a href="<?php echo base_url(); ?>messages">
									<span class="pull-right label label-primary"><?php echo $numberMsg; ?></span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<span>Mailbox</span>
								</a>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-header" aria-hidden="true"></i>
									<span>Header</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url(); ?>logo-update">
											Logo
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>menu-update">
											Menu
										</a>
									</li>
								</ul>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/slider">
									<i class="fa fa-image" aria-hidden="true"></i>
									<span>Image Slider</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/whyus">
									<i class="fa fa-list-alt" aria-hidden="true"></i>
									<span>Why Us</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>about">
									<i class="fa fa-building" aria-hidden="true"></i>
									<span>About Us</span>
								</a>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-columns" aria-hidden="true"></i>
									<span>Our Services</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url(); ?>our-services/services">
											Services
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>our-services/products">
											Products
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-dollar" aria-hidden="true"></i>
									<span>Buy from turkey</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url(); ?>buy-from-turkey/service1">
											Services 1
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>buy-from-turkey/service2">
											Services 2
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>buy-from-turkey/eform">
											eform
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>buy-from-turkey/advantages">
											advantages
										</a>
									</li>
								</ul>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/news">
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<span>Our News</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>contact-information">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<span>Contact</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>footer">
									<i class="fa fa-align-left" aria-hidden="true"></i>
									<span>Footer</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>users">
									<i class="fa fa-users" aria-hidden="true"></i>
									<span>Users</span>
								</a>
							</li>
							<!-- <li class="nav">
								<a>
									<i class="fa fa-cogs" aria-hidden="true"></i>
									<span>Settings</span>
								</a>
							</li> -->
						</ul>
					</nav>
				</div>
			</div>
		<?php } elseif ($yetki == 'Editor') { ?>
			<div class="nano">
				<div class="nano-content">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-main">
							<li class="nav-parent">
								<a>
									<i class="fa fa-header" aria-hidden="true"></i>
									<span>Header</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url(); ?>logo-update">
											Logo
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>menu-update">
											Menu
										</a>
									</li>
								</ul>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/slider">
									<i class="fa fa-image" aria-hidden="true"></i>
									<span>Image Slider</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/whyus">
									<i class="fa fa-list-alt" aria-hidden="true"></i>
									<span>Why Us</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>about">
									<i class="fa fa-building" aria-hidden="true"></i>
									<span>About Us</span>
								</a>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-columns" aria-hidden="true"></i>
									<span>Our Services</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url(); ?>our-services/services">
											Services
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>our-services/products">
											Products
										</a>
									</li>
								</ul>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/news">
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<span>Our News</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>contact">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<span>Contact</span>
								</a>
							</li>
							<li class="nav">
								<a href="<?php echo base_url(); ?>footer">
									<i class="fa fa-align-left" aria-hidden="true"></i>
									<span>Footer</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		<?php } else { ?>
			<div class="nano">
				<div class="nano-content">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-main">
							<li class="nav">
								<a href="<?php echo base_url(); ?>adminpanel/news">
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<span>Our News</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		<?php } ?>

	</aside>
	<!-- end: sidebar -->