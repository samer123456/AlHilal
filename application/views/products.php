<div class="wrapper light-wrapper">
	<div class="container inner">
		<h2 class="section-title text-center"><?php echo $s_slider[0]->section_title; ?></h2>
		<p class="lead text-center"><?php echo $s_slider[0]->section_info; ?></p>
		<div class="space15"></div>
		<div class="slick-wrapper">
			<div class="slick"
				 data-slick='{"slidesToShow": 3, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}},{"breakpoint":768,"settings":{"slidesToShow": 1}}]}'>
				<?php foreach ($s_slider as $rs) { ?>
					<div class="item post mr-10 ml-10">
						<figure class="overlay overlay1"><img
									src="<?php echo base_url(); ?>uploads/<?php echo $rs->image_name; ?>"
									alt=""/>
							<figcaption></figcaption>
						</figure>
						<div class="post-content text-center mt-20">
							<h3 class="post-title"><?php echo $rs->image_title; ?></h3>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="space20"></div>
			<div class="slick-nav-container">
				<div class="slick-nav"></div>
			</div>
		</div>
	</div>
</div>
