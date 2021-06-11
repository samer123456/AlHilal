<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Update Contact</h2>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
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
							<form action="<?php echo base_url(); ?>adminpanel/contact/updateContact/<?php echo $contact[0]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Map Url</label>
												<input type="text" name="map" class="form-control" value="<?php echo $contact[0]->map_url; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $contact[0]->title; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $contact[0]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $contact[0]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $contact[0]->email; ?>">
											</div>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<button type="submit" class="btn btn-primary">Save</button>
								</footer>
							</form>
						</div>
						<div id="english" class="tab-pane">
							<form action="<?php echo base_url(); ?>adminpanel/contact/updateContact/<?php echo $contact[1]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Map Url</label>
												<input type="text" name="map" class="form-control" value="<?php echo $contact[1]->map_url; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $contact[1]->title; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $contact[1]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $contact[1]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $contact[1]->email; ?>">
											</div>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<button type="submit" class="btn btn-primary">Save</button>
								</footer>
							</form>
						</div>
						<div id="arabic" class="tab-pane" dir="rtl">
							<form action="<?php echo base_url(); ?>adminpanel/contact/updateContact/<?php echo $contact[2]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Map Url</label>
												<input type="text" name="map" class="form-control" value="<?php echo $contact[2]->map_url; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $contact[2]->title; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $contact[2]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $contact[2]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $contact[2]->email; ?>">
											</div>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<button type="submit" class="btn btn-primary">Save</button>
								</footer>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>