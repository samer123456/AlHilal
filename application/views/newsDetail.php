<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>
<div class="wrapper light-wrapper">
	<div class="container inner">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="blog classic-view single">
					<div class="post">
						<figure><img src="<?php echo base_url(); ?>uploads/<?php echo $news[0]->img_name; ?>" alt=""/>
						</figure>
						<div class="post-content">
							<h1 class="post-title"><?php echo $news[0]->title; ?></h1>
							<div class="meta"><span class="date"><?php echo $news[0]->date; ?></span></div>
							<p><?php echo $news[0]->content; ?></p>
						</div>
						<hr/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
