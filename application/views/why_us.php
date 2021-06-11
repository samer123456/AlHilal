<div class="wrapper light-wrapper">
	<div class="container inner">
		<h2 class="section-title text-center"><?php echo $whyus[0]->section_title ?></h2>
		<p class="lead text-center"><?php echo $whyus[0]->section_info ?></p>
		<div class="space30"></div>
		<div class="row text-center">
			<?php foreach ($whyus as $rs) { ?>
				<div class="col-sm-4"><span class="icon icon-m icon-color color-blue mb-20"><img
								src="<?php echo base_url(); ?>uploads/<?php echo $rs->icon_name ?>"></span>
					<h5><?php echo $rs->icon_title ?></h5>
					<br>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
