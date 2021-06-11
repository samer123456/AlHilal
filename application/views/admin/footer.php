<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Update Footer</h2>
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
							<form action="<?php echo base_url(); ?>adminpanel/footer/updateFooter/<?php echo $footer[2]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $footer[2]->title; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $footer[2]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="email" name="email" class="form-control" value="<?php echo $footer[2]->email; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 1</label>
												<input type="text" name="phone_1" class="form-control" value="<?php echo $footer[2]->phone_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 2</label>
												<input type="text" name="phone_2" class="form-control" value="<?php echo $footer[2]->phone_2; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Phone 3</label>
												<input type="text" name="phone_3" class="form-control" value="<?php echo $footer[2]->phone_3; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Copyright</label>
												<input type="text" name="copy" class="form-control" value="<?php echo $footer[2]->copyright; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Info</label>
												<textarea class="form-control" name="info" rows="3" id="textareaAutosize" data-plugin-textarea-autosize><?php echo $footer[2]->info; ?></textarea>
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
							<form action="<?php echo base_url(); ?>adminpanel/footer/updateFooter/<?php echo $footer[0]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $footer[0]->title; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $footer[0]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="email" name="email" class="form-control" value="<?php echo $footer[0]->email; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 1</label>
												<input type="text" name="phone_1" class="form-control" value="<?php echo $footer[0]->phone_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 2</label>
												<input type="text" name="phone_2" class="form-control" value="<?php echo $footer[0]->phone_2; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Phone 3</label>
												<input type="text" name="phone_3" class="form-control" value="<?php echo $footer[0]->phone_3; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Copyright</label>
												<input type="text" name="copy" class="form-control" value="<?php echo $footer[0]->copyright; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Info</label>
												<textarea class="form-control" name="info" rows="3" id="textareaAutosize" data-plugin-textarea-autosize><?php echo $footer[0]->info; ?></textarea>
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
							<form action="<?php echo base_url(); ?>adminpanel/footer/updateFooter/<?php echo $footer[1]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control" value="<?php echo $footer[1]->title; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $footer[1]->address; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="email" name="email" class="form-control" value="<?php echo $footer[1]->email; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 1</label>
												<input type="text" name="phone_1" class="form-control" value="<?php echo $footer[1]->phone_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone 2</label>
												<input type="text" name="phone_2" class="form-control" value="<?php echo $footer[1]->phone_2; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Phone 3</label>
												<input type="text" name="phone_3" class="form-control" value="<?php echo $footer[1]->phone_3; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Copyright</label>
												<input type="text" name="copy" class="form-control" value="<?php echo $footer[1]->copyright; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Info</label>
												<textarea class="form-control" name="info" rows="3" id="textareaAutosize" data-plugin-textarea-autosize><?php echo $footer[1]->info; ?></textarea>
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
			<div class="col-md-6">
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#turkish" data-toggle="tab" class="text-center">
								Social Media</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="turkish" class="tab-pane active">
							<form action="<?php echo base_url(); ?>adminpanel/footer/updateSocialMedia/" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Twitter</label>
												<input type="text" name="twitter" class="form-control" value="<?php echo $footer[0]->twitter; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Facebook</label>
												<input type="text" name="facebook" class="form-control" value="<?php echo $footer[0]->facebook; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Instagram</label>
												<input type="text" name="instagram" class="form-control" value="<?php echo $footer[0]->instagram; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Linkedin</label>
												<input type="text" name="linkedin" class="form-control" value="<?php echo $footer[0]->linkedin; ?>">
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