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
	<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
			</div>
			<div class="panel-body">
				<form action="<?php echo base_url(); ?>adminpanel/signin/login" method="post">
					<div class="form-group mb-lg">
						<label>Username</label>
						<div class="input-group input-group-icon">
							<input name="username" type="text" class="form-control input-lg"/>
							<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
						</div>
					</div>

					<div class="form-group mb-lg">
						<div class="clearfix">
							<label class="pull-left">Password</label>
						</div>
						<div class="input-group input-group-icon">
							<input name="pwd" type="password" class="form-control input-lg"/>
							<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
					</section>
				</div>
			</div>
		</form>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>
