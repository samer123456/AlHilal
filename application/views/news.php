<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>
<div class="wrapper light-wrapper">
	<div class="container inner">
		<div class="row">
			<?php foreach ($news as $rs) { ?>
				<div class="col-md-8 col-md-offset-2">
					<div class="blog classic-view">
						<div class="post">
							<figure class="overlay overlay1"><a
										href="<?php echo base_url(); ?>news/getNews/<?php echo $rs->id; ?>"></a><img
										src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>" alt=""/>
								<figcaption>
										<h5 class="from-top mb-0">Read More</h5>
								</figcaption>
							</figure>
							<div class="post-content">
								<h2 class="post-title"><a
											href="<?php echo base_url(); ?>news/getNews/<?php echo $rs->id; ?>"><?php echo $rs->title; ?></a>
								</h2>
								<div class="meta"><span class="date"><?php echo $rs->date; ?></span></div>
								<a href="<?php echo base_url(); ?>news/getNews/<?php echo $rs->id; ?>" class="more">Continue
									reading</a></div>
						</div>
						<hr/>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
