<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Add - Update - Delete Why Us</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					Değiştirmek istediğiniz ikonu seçip açılan formdan yenisini seçebilirsiniz. Önerilen ikon boyutu:
					<strong>48x48</strong>
				</div>
				<div class="panel-body">
					<a class="modal-with-form btn btn-primary" href="#modalForm">Add a new image</a>
					<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
						<form action="<?php echo base_url(); ?>adminpanel/whyus/addIcon/" id="demo-form" class="form-horizontal mb-lg" enctype="multipart/form-data" method="POST">
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
											<th scope="col-3">Icon</th>
											<th scope="col-3">Title</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($why_tr as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/whyus/updateWhyus/<?php echo $rs->why_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/whyus/loadImageWhyus/<?php echo $rs->why_id; ?>"><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->icon_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->icon_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>

														<a href="<?= base_url() ?>adminpanel/whyus/deleteRow/<?php echo $rs->why_id ?>">
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
											<th scope="col-3">Icon</th>
											<th scope="col-3">Title</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($why_en as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/whyus/updateWhyus/<?php echo $rs->why_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/whyus/loadImageWhyus/<?php echo $rs->why_id; ?>"><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->icon_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->icon_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>
														<a href="<?= base_url() ?>adminpanel/whyus/deleteRow/<?php echo $rs->why_id ?>">
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
											<th scope="col-3">Icon</th>
											<th scope="col-3">Title</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($why_ar as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/whyus/updateWhyus/<?php echo $rs->why_id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td>
														<a href="<?php echo base_url(); ?>adminpanel/whyus/loadImageWhyus/<?php echo $rs->why_id; ?>"><img width="48px" src="<?php echo base_url(); ?>uploads/<?php echo $rs->icon_name; ?>"></a>
													</td>
													<td><input type="text" name="title" class="form-control" value="<?php echo $rs->icon_title; ?>"></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
															Save
														</button>

														<a href="<?= base_url() ?>adminpanel/whyus/deleteRow/<?php echo $rs->why_id ?>">
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