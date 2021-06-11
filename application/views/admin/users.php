<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Add - Update - Delete Users</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="panel-body">
					<a class="modal-with-form btn btn-primary" href="#modalForm">Add a new user</a>
					<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
						<form action="<?php echo base_url(); ?>adminpanel/users/addUser/" id="demo-form" class="form-horizontal mb-lg" enctype="multipart/form-data" method="POST">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Registration Form</h2>
								</header>
								<div class="panel-body">
									<div class="form-group mt-lg">
										<label class="col-sm-3 control-label">Username</label>
										<div class="col-sm-9">
											<input type="text" name="username" class="form-control text-semibold mt-none" required><br>
										</div>
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<input type="email" name="email" class="form-control text-semibold mt-none" required><br>
										</div>
										<label class="col-sm-3 control-label">Password</label>
										<div class="col-sm-9">
											<input type="password" name="password" class="form-control text-semibold mt-none" required><br>
										</div>
										<label class="col-sm-3 control-label">Authority</label>
										<div class="col-sm-3">
											<select id="company" name="authority" class="form-control" required>
												<option value="">Choose..</option>
												<option value="Admin">Admin</option>
												<option value="Editor">Editor</option>
												<option value="Author">Author</option>
											</select>
											<label class="error" for="company"></label>
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
								Users</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="turkish" class="tab-pane active">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col-1">No</th>
											<th scope="col-3">Username</th>
											<th scope="col-3">Email</th>
											<th scope="col-3">Authority</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($user as $rs) {
											$no++;
										?>
											<form action="<?php echo base_url(); ?>adminpanel/users/editUser/<?php echo $rs->id; ?>" method="POST">
												<tr>
													<th scope="row"><?php echo $no; ?></th>
													<td><?php echo $rs->username; ?></td>
													<td><?php echo $rs->email; ?></td>
													<td><?php echo $rs->authority; ?></td>
													<td>
														<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit
														</button>
														<a href="<?php echo base_url(); ?>adminpanel/users/deleteUser/<?php echo $rs->id; ?>">
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