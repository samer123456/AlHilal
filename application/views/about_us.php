<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>

<div class="wrapper light-wrapper">
	<?php if ($home[0]->tab_7 == 'Ar') { ?>
	<div class="container inner" dir="rtl">
		<h2 class="section-title mb-40 text-center"><?php echo $about[0]->section_title; ?></h2>
		<div class="row">
			<div class="col-md-6">
				<figure><img src="<?php echo base_url(); ?>uploads/about.png" alt=""></figure>
			</div>
			<div class="space30 hidden-xs hidden-md hidden-lg"></div>
			<div class="col-md-6">
				<h3><?php echo $about[0]->title; ?></h3>
				<p><?php echo $about[0]->info; ?></p>

				<ul class="social social-color social-s">
					<li><a href="<?php echo $footer[0]->twitter; ?>" target="_blank"><i class="et-twitter"></i></a></li>
					<li><a href="<?php echo $footer[0]->facebook; ?>" target="_blank"><i class="et-facebook"></i></a>
					</li>
					<li><a href="<?php echo $footer[0]->instagram; ?>" target="_blank"><i class="et-instagram"></i></a>
					</li>
					<li><a href="<?php echo $footer[0]->linkedin; ?>" target="_blank"><i class="et-linkedin"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="space70"></div>
		<div class="row text-center">
			<div class="col-sm-6 col-md-4">
				<div class="box box-bg bg-green inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
								src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_vision; ?>"></span>
					<h5><?php echo $about[0]->title_vision; ?></h5>
					<p><?php echo $about[0]->vision; ?></p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="box box-bg bg-blue inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
								src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_mission; ?>"></span>
					<h5><?php echo $about[0]->title_mission; ?></h5>
					<p><?php echo $about[0]->mission; ?></p>
				</div>
			</div>
			<div class="space10 visible-sm clearfix"></div>
			<div class="col-sm-6 col-md-4">
				<div class="box box-bg bg-pink inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
								src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_aim; ?>"></span>
					<h5><?php echo $about[0]->title_aim; ?></h5>
					<p><?php echo $about[0]->aim; ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php }else{ ?>
		<div class="container inner">
			<h2 class="section-title mb-40 text-center"><?php echo $about[0]->section_title; ?></h2>
			<div class="row">
				<div class="col-md-6">
					<figure><img src="<?php echo base_url(); ?>uploads/about.png" alt=""></figure>
				</div>
				<div class="space30 hidden-xs hidden-md hidden-lg"></div>
				<div class="col-md-6">
					<h3><?php echo $about[0]->title; ?></h3>
					<p><?php echo $about[0]->info; ?></p>
					<h3>Elsewhere</h3>
					<ul class="social social-color social-s">
						<li><a href="#"><i class="et-twitter"></i></a></li>
						<li><a href="#"><i class="et-facebook"></i></a></li>
						<li><a href="#"><i class="et-pinterest"></i></a></li>
						<li><a href="#"><i class="et-vimeo"></i></a></li>
						<li><a href="#"><i class="et-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="space70"></div>
			<div class="row text-center">
				<div class="col-sm-6 col-md-4">
					<div class="box box-bg bg-green inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
									src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_vision; ?>"></span>
						<h5><?php echo $about[0]->title_vision; ?></h5>
						<p><?php echo $about[0]->vision; ?></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box box-bg bg-blue inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
									src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_mission; ?>"></span>
						<h5><?php echo $about[0]->title_mission; ?></h5>
						<p><?php echo $about[0]->mission; ?></p>
					</div>
				</div>
				<div class="space10 visible-sm clearfix"></div>
				<div class="col-sm-6 col-md-4">
					<div class="box box-bg bg-pink inverse-text" style="height:325px;width:100%;"><span class="icon icon-m mb-20"><img
									src="<?php echo base_url(); ?>uploads/<?php echo $about[0]->icon_aim; ?>"></span>
						<h5><?php echo $about[0]->title_aim; ?></h5>
						<p><?php echo $about[0]->aim; ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
