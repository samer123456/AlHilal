<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>

<div class="parallax inverse-text" data-parallax-img="<?php echo base_url(); ?>uploads/parallax3.jpg" data-parallax-img-width="1920" data-parallax-img-height="1223">
	<div class="container inner pt-120 pb-120 text-center">
		<h1 class="section-title"><?php echo $home[0]->tab_5; ?></h1>
		<p class="lead text-center mb-0"><?php echo $description_slider; ?>
		<p>
	</div>
</div>


<div class="wrapper light-wrapper">
	<?php
	if ($home[0]->tab_7 == "Ar") {
		$cls = "dir='rtl'";
	} else {
		$cls = "";
	}
	?>
	<div class="container inner">
		<h2 class="section-title text-center"><?php echo $buyFromTurkey[0]->header; ?></h2>
		<div class="space10"></div>
		<div class="row <?php echo $cls; ?>">
			<?php
			$counter = 0;
			foreach ($buyFromTurkey as $rs) {
				$counter++;
				if ($counter % 2 !== 0) {
					$cls_img = "col-sm-push-6";
					$cls_txt = "col-sm-pull-6";
				} else {
					$cls_img = "";
					$cls_txt = "";
				}
			?>
				<div class="space20 visible-xs clearfix"></div>
				<div class="col-md-10 col-md-offset-1">
					<div class="row flex-middle">
						<div class="col-sm-6 <?php echo $cls_img; ?>">
							<div class="icon-img icon-svg icon-l"><img src="<?php echo base_url(); ?>uploads/<?php echo $rs->image; ?>" alt="" /></div>
						</div>
						<div class="space20 visible-xs clearfix"></div>
						<div class="col-sm-6 <?php echo $cls_txt; ?>" <?php echo $cls; ?>>
							<h2><?php echo $rs->title; ?></h2>
							<p class="lead2 mb-0"><?php echo $rs->info; ?></p><br>
						</div>
					</div>
					<div class="space70"></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>


</div>
</div>

<h2 class="section-title mb-20 text-center"><?php echo $buyFromTurkey1[0]->header; ?></h2>
<h4 class=" mb-20 text-center"><?php echo $buyFromTurkey1[0]->title; ?></h4>


<div class="wrapper light-wrapper">
	<div class="container inner">
		<div class="row">
			<?php
			$counter = 0;
			foreach ($buyFromTurkey1 as $rs1) {
				$counter++;
				if ($counter % 2 !== 0) {
					$cls_img = "col-sm-push-6";
					$cls_txt = "col-sm-pull-6";
				} else {
					$cls_img = "";
					$cls_txt = "";
				}
			?>
				<div class="space20 visible-xs clearfix"></div>
				<div class="col-md-10 col-md-offset-1">
					<div class="row flex-middle">
						<div class="col-sm-6 <?php echo $cls_img; ?>">
							<div class="icon-img icon-svg icon-l" style="height:50%;width:50%;"><img src="<?php echo base_url(); ?>uploads/<?php echo $rs1->image; ?>" alt="" /></div>
						</div>
						<div class="space20 visible-xs clearfix"></div>
						<div class="col-sm-6 <?php echo $cls_txt; ?>" <?php echo $cls; ?>>
							<p class="lead2 mb-0"><?php echo $rs1->info; ?></p><br>
						</div>
					</div>
					<div class="space70"></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
</div>
</div>

<!-- <div class="wrapper light-wrapper">
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

 -->

<!-- Processes -->



<h2 id=buy_from_turkey class="section-title mb-20 text-center"><?php echo $translation[0]->header; ?></h2>
<div class="row" <?php echo $cls ?>>
	<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
		<ul class="nav nav-tabs nav-tabs-lined nav-tabs-lined-bottom">
			<li class="active"><a href="#tab1-1" data-toggle="tab"><?php echo $translation[0]->shipForMe; ?></a></li>
			<li><a href="#tab1-2" data-toggle="tab"><?php echo $translation[0]->eForm; ?></a></li>
		</ul>
		<div class="space20"></div>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="tab1-1">
				<div class="wrapper light-wrapper">
					<div class="container inner">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="form-container">
									<form action="BuyFromTurkey/sendOrderDetails" method="post" class="vanilla vanilla-form" novalidate>
										<div class="row">
											<div class="col-sm-6 pr-10">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="<?php echo $translation[0]->name; ?>" required="required">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-6 pl-10">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="<?php echo $translation[0]->email; ?>" required="required">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-6 pr-10">
												<div class="form-group">
													<input type="tel" class="form-control" name="phone" placeholder="<?php echo $translation[0]->phone; ?>">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-6 pl-10">
												<div class="form-group">
													<input type="text" class="form-control" name="orderNo" placeholder="<?php echo $translation[0]->orderNo; ?>" required="required">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-12 text-center">
												<textarea name="productLink" class="form-control" rows="3" placeholder="<?php echo $translation[0]->productLink; ?>" required></textarea>
												<div class="space20"></div>
											</div>

											<div class="col-sm-12 text-center">
												<textarea name="detailedCustomerAddress" class="form-control" rows="3" placeholder="<?php echo $translation[0]->detailedCustomerAddress; ?>" required></textarea>
												<div class="radio-set radio">
													<label><?php echo $translation[0]->shipping; ?></label>
													<label>
														<input type="radio" name="shippingType" value="Air">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->air; ?></label>
													<label>
														<input type="radio" name="shippingType" value="Sea">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->sea; ?></label>
													<label>
														<input type="radio" name="shippingType" value="Land">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->land; ?></label>
												</div>
												<!--/.radio-set -->
												<button type="submit" class="btn btn-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!"><?php echo $translation[0]->submit; ?>
												</button>
												<!-- <footer class="notification-box"></footer> -->
											</div>
											<!--/column -->
										</div>
										<!--/.row -->
									</form>
									<!--/.vanilla-form -->
								</div>
								<!--/.form-container -->
							</div>
							<!-- /column -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
			</div>
			<!-- /.tab-pane -->
			<div class="tab-pane fade" id="tab1-2">
				<div class="wrapper light-wrapper">
					<div class="container inner">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="form-container">
									<form action="BuyFromTurkey/sendOrderDetails" method="post" class="vanilla vanilla-form" novalidate>
										<div class="row">
											<div class="col-sm-6 pr-10">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="<?php echo $translation[0]->name; ?>" required="required" required="required">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-6 pl-10">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="<?php echo $translation[0]->email; ?>" required="required">
												</div>
												<!--/.form-group -->
											</div>
											<!--/column -->
											<div class="col-sm-6 pr-10">
												<div class="form-group">
													<input type="tel" class="form-control" name="tel" placeholder="<?php echo $translation[0]->phone; ?>">
												</div>
												<!--/.form-group -->
											</div>

											<div class="col-sm-12 text-center">
												<textarea name="link" class="form-control" rows="3" placeholder="<?php echo $translation[0]->productLink; ?>" required></textarea>
												<div class="space20"></div>
											</div>

											<div class="col-sm-12 text-center">
												<textarea name="address" class="form-control" rows="3" placeholder="<?php echo $translation[0]->detailedCustomerAddress; ?>" required></textarea>
												<div class="radio-set radio">
													<label><?php echo $translation[0]->shipping; ?></label>
													<label>
														<input type="radio" name="subject" value="Air">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->air; ?></label>
													<label>
														<input type="radio" name="subject" value="Sea">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->sea; ?></label>
													<label>
														<input type="radio" name="subject" value="Land">
														<span>
															<!-- fake radio -->
														</span> <?php echo $translation[0]->land; ?></label>
												</div>
												<!--/.radio-set -->
												<button type="submit" class="btn btn-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!"><?php echo $translation[0]->submit; ?>
												</button>
												<!-- <footer class="notification-box"></footer> -->
											</div>
											<!--/column -->
										</div>
										<!--/.row -->
									</form>
									<!--/.vanilla-form -->
								</div>
								<!--/.form-container -->
							</div>
							<!-- /column -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
			</div>
			<!-- /.tab-pane -->
		</div>
		<!-- /.tab-content -->
	</div>
	<!-- /column -->
</div>
</div>
<!-- /.row -->

<?php
if ($home[0]->tab_7 == "Ar") {
	$cls = "dir='rtl'";
?>
	<div class="space20"></div>
	<h2 class="section-title section-title-upper section-title-line text-center"><?php echo $buyFromTurkey2[0]->title; ?></h2>
	<div class="space30"></div>
	<div class="row" <?php echo $cls; ?>>
		<div class="space20 visible-sm clearfix"></div>
		<div class="col-sm-6 col-md-4 ">
			<div style="text-align:center">
				<span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[0]->image; ?>" alt="" /></span>
				<p><?php echo $buyFromTurkey2[0]->info; ?></p>
			</div>
			<!--/.feature -->
		</div>
		<!--/column -->

		<div class="col-sm-6 col-md-4">
			<div style="text-align:center">
				<span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[1]->image; ?>" alt="" /></span>
				<p><?php echo $buyFromTurkey2[1]->info; ?></p>
			</div>
			<!--/.feature -->
		</div>
		<!--/column -->
		<div class="col-sm-6 col-md-4 ">
			<div style="text-align:center">
				<span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[2]->image; ?>" alt="" /></span>
				<p><?php echo $buyFromTurkey2[2]->info; ?></p>
			</div>
			<!--/.feature -->
		</div>
		<!--/column -->
	</div>
	<!--/.row -->



<?php } else {
	$cls = "";
?>
	<div class="space20"></div>
	<h2 class="section-title section-title-upper section-title-line text-center"><?php echo $buyFromTurkey2[0]->title; ?></h2>
	<div class="space30"></div>
	<div class="row" <?php echo $cls; ?>>
		<div class="col-sm-6 col-md-4">
			<div style="text-align:center"> <span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[2]->image; ?>" alt="" /></span>
				<p><?php echo $buyFromTurkey2[2]->info; ?></p>
			</div>

			<!--/.feature -->
		</div>
		<!--/column -->
		<div class="col-sm-6 col-md-4">
			<div style="text-align:center"> <span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[1]->image; ?>" alt="" /></span>
				<p><?php echo $buyFromTurkey2[1]->info; ?></p>
			</div>
			<!--/.feature -->
		</div>
		<!--/column -->
		<div class="space20 visible-sm clearfix"></div>
		<div class="col-sm-6 col-md-4">
			<div style="text-align:center"> <span><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $buyFromTurkey2[0]->image; ?>" alt="" /></span>

				<p><?php echo $buyFromTurkey2[0]->info; ?></p>
			</div>
			<!--/.feature -->
		</div>
		<!--/column -->
	</div>
	<!--/.row -->



<?php } ?>

<!-- form start -->
<!-- /.light-wrapper -->
</div><!-- content-wrapper -->
</div>

<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>