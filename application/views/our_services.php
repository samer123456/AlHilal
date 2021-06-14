<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>



<div class="parallax inverse-text"
	 data-parallax-img="<?php echo base_url(); ?>uploads/parallax3.jpg"
	 data-parallax-img-width="1920" data-parallax-img-height="1223">
	<div class="container inner pt-120 pb-120 text-center">
		<h1 class="section-title"><?php echo $home[0]->tab_3; ?></h1>
		<p class="lead text-center mb-0"><?php echo $description_slider; ?>
		<p>
	</div>
</div>
<?php
if($home[0]->tab_7=="Ar"){
	$cls = "dir='rtl'";
	$cls_nav_ar = "nav nav-tabs nav-tabs-lined-ar nav-tabs-lined-ar-bottom ";
}else{
	$cls ="";
	$cls_nav_ar = "nav nav-tabs nav-tabs-lined nav-tabs-lined-bottom ";
}
?>





<!-- begin samer -->


<div class="content-wrapper">
      <h2 class="section-title mb-40 text-center"><?=$this->lang->line('our_services')?></h2>
     <div class="row" <?php echo $cls;?>>
      <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" >
          <ul class="<?php echo $cls_nav_ar?>">
<?php
			$counter = 0;
			foreach ($service as $rs) {
				
				if ($counter == 0) {
					$cls_is_active = "active";
				} else {
					$cls_is_active = " ";
				}
				++$counter;
				?>
            <li class= "<?php echo $cls_is_active; ?>"><a href="#<?php echo str_replace(' ', '-', $rs->title); ?>" data-toggle="tab"><?php echo $rs->title; ?></a></li>

            <?php } ?>
          </ul>
	
		  <div class="tab-content mr-20 mt-10" >
		   <?php		    
			$counter = 0;
			foreach ($service as $rs) {
				
				if ($counter == 0) {
					$cls_in_active = "in active";
				} else {
					$cls_in_active = " ";
				}
				++$counter;
				?>   
               <div class="tab-pane fade <?php echo $cls_in_active; ?>" id="<?php echo str_replace(' ', '-', $rs->title); ?>">
                <p> <?php echo $rs->info; ?></p>
            </div>
                      <!-- /.tab-content -->             
    <!-- /.row --> 
      <!-- /.container --> 		
 <?php } ?> 
 </div>
<!-- end samer -->
</div>


</div>
<div class="wrapper light-wrapper">
	<div class="container inner">
		<h2 class="section-title text-center"><?php echo $s_slider[0]->section_title; ?></h2>
		<p class="lead text-center"><?php echo $s_slider[0]->section_info; ?></p>
		<div class="space30"></div>
		<div class="tiles">
			<div class="items row">
				<?php foreach ($s_slider as $rs) { ?>
					<div class="item col-xs-6 col-sm-6 col-md-4">
						<figure class="overlay overlay6 color"><img
									src="<?php echo base_url(); ?>uploads/<?php echo $rs->image_name; ?>"
									alt=""/>
							<figcaption>
								<h4 class="mb-5"><?php echo $rs->image_title; ?></h4>
							</figcaption>
						</figure>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
