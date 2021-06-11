<body>
	<section class="body">
		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="<?php echo base_url(); ?>adminpanel/home" class="logo">
					<img src="<?php echo base_url(); ?>uploads/<?php echo $logo[0]->logo_name; ?>" height="35" alt="IB Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
			<!-- start: search & user box -->
			<div class="header-right">
				<span class="separator"></span>
				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="badge"><?php echo $numberUnMsg; ?></span>
						</a>
						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default"><?php echo $numberMsg; ?></span>
								Messages
							</div>
							<div class="content">
								<ul>
									<?php foreach ($unreadMessage as $rs) { ?>
										<li>
											<a href="<?php echo base_url(); ?>adminpanel/message/messageDetail/<?php echo $rs->id; ?>" class="clearfix">
												<span class="title"><?php echo $rs->subject; ?></span>
												<span class="message"><?php echo $rs->name; ?></span>
											</a>
										</li>
									<?php } ?>
								</ul>
								<hr />
								<div class="text-right">
									<a href="<?php echo base_url(); ?>adminpanel/message" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<span class="separator"></span>
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<div class="profile-info" data-lock-name="<?php echo $this->session->admin_session["username"]; ?>" data-lock-email="<?php echo $this->session->admin_session["email"]; ?>">
							<span class="name"><?php echo $this->session->admin_session["username"]; ?></span>
							<span class="role"><?php echo $this->session->admin_session["authority"]; ?></span>
						</div>
						<i class="fa custom-caret"></i>
					</a>
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>adminpanel/signin/logout"><i class="fa fa-power-off"></i>
									Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->