<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Add - Update - Delete Our News</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Our Services</span></li>
				<li><span>Products</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="panel-body">
					<a href="<?php echo base_url(); ?>adminpanel/news/getForm/" class="btn btn-primary">Add a news</a>
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
										<th scope="col-3">Content</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 0;
									foreach ($news_tr as $rs) {
										$no++;
										?>
										<form action="<?php echo base_url(); ?>adminpanel/news/loadNews/<?php echo $rs->id; ?>"
											  method="POST">
											<tr>
												<th scope="row"><?php echo $no; ?></th>
												<td>
													<img width="150px"
														 src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
												</td>
												<td><?php echo $rs->title; ?></td>
												<td>
													<button type="submit" class="btn btn-primary"><i
																class="fa fa-edit"></i>
														Edit
													</button>
													<a href="<?php echo base_url(); ?>adminpanel/news/deleteNews/<?php echo $rs->id; ?>">
														<button type="button" class="btn btn-danger"
																onclick="return confirm('Are you sure?')"><i
																	class="fa fa-exclamation-circle"></i> Delete
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
						<div id="english" class="tab-pane ">
							<div class="panel-body">
								<table class="table">
									<thead>
									<tr>
										<th scope="col-1">No</th>
										<th scope="col-3">Image</th>
										<th scope="col-3">Content</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 0;
									foreach ($news_en as $rs) {
										$no++;
										?>
										<form action="<?php echo base_url(); ?>adminpanel/news/loadNews/<?php echo $rs->id; ?>"
											  method="POST">
											<tr>
												<th scope="row"><?php echo $no; ?></th>
												<td>
													<img width="150px"
														 src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
												</td>
												<td><?php echo $rs->title; ?></td>
												<td>
													<button type="submit" class="btn btn-primary"><i
																class="fa fa-edit"></i>
														Edit
													</button>
													<a href="<?php echo base_url(); ?>adminpanel/news/deleteNews/<?php echo $rs->id; ?>">
														<button type="button" class="btn btn-danger"
																onclick="return confirm('Are you sure?')"><i
																	class="fa fa-exclamation-circle"></i> Delete
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
						<div id="arabic" class="tab-pane " dir="rtl">
							<div class="panel-body">
								<table class="table">
									<thead>
									<tr>
										<th scope="col-1">No</th>
										<th scope="col-3">Image</th>
										<th scope="col-3">Content</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 0;
									foreach ($news_ar as $rs) {
										$no++;
										?>
										<form action="<?php echo base_url(); ?>adminpanel/news/loadNews/<?php echo $rs->id; ?>"
											  method="POST">
											<tr>
												<th scope="row"><?php echo $no; ?></th>
												<td>
													<img width="150px"
														 src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>"></a>
												</td>
												<td><?php echo $rs->title; ?></td>
												<td>
													<button type="submit" class="btn btn-primary"><i
																class="fa fa-edit"></i>
														Edit
													</button>
													<a href="<?php echo base_url(); ?>adminpanel/news/deleteNews/<?php echo $rs->id; ?>">
														<button type="button" class="btn btn-danger"
																onclick="return confirm('Are you sure?')"><i
																	class="fa fa-exclamation-circle"></i> Delete
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
