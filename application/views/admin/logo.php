<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Logo Update</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Header</span></li>
				<li><span>Logo</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#logo" data-toggle="tab" class="text-center">
								Logos</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="logo" class="tab-pane active">
							<?php foreach ($logo as $rs) { ?>
								<form action="<?php echo base_url(); ?>adminpanel/header/updateLogo/<?php echo $rs->id; ?>" enctype="multipart/form-data" method="POST">
									<div class="panel-body">
										<div class="row" style="margin-bottom: 12px">
											<div class="col-sm-6">
												<div class="form-group">
													<img src="<?php echo base_url(); ?>uploads/<?php echo $rs->logo_name; ?>">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<input type="file" name="image" class="form-control text-semibold mt-none">
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>