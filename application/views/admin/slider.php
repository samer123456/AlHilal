<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Add - Update - Delete Image Slides</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					Değiştirmek istediğiniz görüntüyü seçip açılan formdan yenisini yükleyebilirsiniz. Önerilen görüntü
					boyutu: <strong>1920x1078</strong>
				</div>
				<div class="panel-body">
					<a class="modal-with-form btn btn-primary" href="#modalForm">Add a new image</a>
					<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
						<form action="<?php echo base_url(); ?>adminpanel/slider/addSlider/" id="demo-form" class="form-horizontal mb-lg" enctype="multipart/form-data" method="POST">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Registration Form</h2>
								</header>
								<div class="panel-body">
									<div class="form-group mt-lg">
										<label class="col-sm-3 control-label">Choose image</label>
										<div class="col-sm-9">
											<input type="file" name="image" class="form-control text-semibold mt-none"><br>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<div class="row">
										<div class="col-md-12 text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button class="btn btn-default modal-dismiss">Cancel</button>
										</div>
									</div>
								</footer>
							</section>
						</form>
					</div>
				</div>
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#turkish" data-toggle="tab" class="text-center">
								Turkish</a>
						</li>
						<li>
							<a href="#english" data-toggle="tab" class="text-center">English</a>
						</li>
						<li>
							<a href="#arabic" data-toggle="tab" class="text-center">Arabic</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="turkish" class="tab-pane active">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
											<th scope="col-3">Text</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($slider_tr as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImage/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->title; ?>"></td>
													<td><input type="text" name="info" class="form-control" value="<?php echo $rs->info; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>
														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteBigSlider/<?php echo $rs->slider_id; ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="english" class="tab-pane">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
											<th scope="col-3">Text</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($slider_en as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImage/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->title; ?>"></td>
													<td><input type="text" name="info" class="form-control" value="<?php echo $rs->info; ?>"></td>
													<td>

														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>

														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteBigSlider/<?php echo $rs->slider_id ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="arabic" class="tab-pane" dir="rtl">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
											<th scope="col-3">Text</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($slider_ar as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImage/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->title; ?>"></td>
													<td><input type="text" name="info" class="form-control" value="<?php echo $rs->info; ?>"></td>
													<td>

														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>

														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteBigSlider/<?php echo $rs->slider_id ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					Değiştirmek istediğiniz görüntüyü seçip açılan formdan yenisini yükleyebilirsiniz. Önerilen görüntü
					boyutu: <strong>440x300</strong>
				</div>
				<div class="panel-body">
					<a class="modal-with-form btn btn-primary" href="#modalForm2">Add a new image</a>
					<div id="modalForm2" class="modal-block modal-block-primary mfp-hide">
						<form action="<?php echo base_url(); ?>adminpanel/slider/addSmallSlider/" id="demo-form" class="form-horizontal mb-lg" enctype="multipart/form-data" method="POST">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Registration Form</h2>
								</header>
								<div class="panel-body">
									<div class="form-group mt-lg">
										<label class="col-sm-3 control-label">Choose image</label>
										<div class="col-sm-9">
											<input type="file" name="image" class="form-control text-semibold mt-none"><br>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<div class="row">
										<div class="col-md-12 text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button class="btn btn-default modal-dismiss">Cancel</button>
										</div>
									</div>
								</footer>
							</section>
						</form>
					</div>
				</div>
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#turkish_s" data-toggle="tab" class="text-center">
								Turkish</a>
						</li>
						<li>
							<a href="#english_s" data-toggle="tab" class="text-center">English</a>
						</li>
						<li>
							<a href="#arabic_s" data-toggle="tab" class="text-center">Arabic</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="turkish_s" class="tab-pane active">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($s_slider_tr as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSmallSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImageSmall/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->image_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->image_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>
														</a>
														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteSmallSlider/<?php echo $rs->slider_id ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="english_s" class="tab-pane">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
											<th scope="col-3">Text</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($s_slider_en as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSmallSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImageSmall/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->image_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->image_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>
														</a>
														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteSmallSlider/<?php echo $rs->slider_id ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div id="arabic_s" class="tab-pane" dir="rtl">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Image</th>
											<th scope="col-3">Title</th>
											<th scope="col-3">Text</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($s_slider_ar as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/slider/updateSmallSlider/<?php echo $rs->slider_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/slider/loadImageSmall/<?php echo $rs->slider_id; ?>"><img width="150px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->image_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->image_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>
														</a>
														<a href="<?php echo base_url(); ?>adminpanel/slider/deleteSmallSlider/<?php echo $rs->slider_id ?>">
															<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-exclamation-circle"></i> Delete
															</button>
														</a>
													</td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>