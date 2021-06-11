<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Tabs</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>UI Elements</span></li>
				<li><span>Tabs</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<form id="form" action="<?php echo base_url(); ?>adminpanel/users/updateUser/<?php echo $id; ?>" method="POST" class="form-horizontal">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<a href="#" class="fa fa-times"></a>
							</div>
							<h2 class="panel-title">Edit Form</h2>
						</header>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">Username <span class="required">*</span></label>
								<div class="col-sm-6">
									<input type="text" name="username" class="form-control" value="<?php echo $user[0]->username; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email <span class="required">*</span></label>
								<div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</span>
										<input type="email" name="email" class="form-control" value="<?php echo $user[0]->email; ?>" required>
									</div>
								</div>
								<div class="col-sm-9">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password <span class="required">*</span></label>
								<div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-lock"></i>
										</span>
										<input type="password" name="password" class="form-control" value="<?php echo $user[0]->password; ?>" required>
									</div>
								</div>
								<div class="col-sm-9">
								</div>
							</div>
							<div class="form-group">
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
								<div class="col-sm-6 col-sm-offset-5">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						</footer>
					</section>
				</form>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>