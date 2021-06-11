<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Menu Update</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Header</span></li>
				<li><span>Menu</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
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
							<form action="<?php echo base_url(); ?>adminpanel/header/updateMenu/<?php echo $menu[0]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 1</label>
												<input type="text" name="tab_1" class="form-control"
													   value="<?php echo $menu[0]->tab_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 2</label>
												<input type="text" name="tab_2" class="form-control"
													   value="<?php echo $menu[0]->tab_2; ?>">
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 3</label>
												<input type="text" name="tab_3" class="form-control"
													   value="<?php echo $menu[0]->tab_3; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 4</label>
												<input type="text" name="tab_4" class="form-control"
													   value="<?php echo $menu[0]->tab_4; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 5</label>
												<input type="text" name="tab_5" class="form-control"
													   value="<?php echo $menu[0]->tab_5; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 6</label>
												<input type="text" name="tab_6" class="form-control"
													   value="<?php echo $menu[0]->tab_6; ?>">
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
							<form action="<?php echo base_url(); ?>adminpanel/header/updateMenu/<?php echo $menu[1]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 1</label>
												<input type="text" name="tab_1" class="form-control"
													   value="<?php echo $menu[1]->tab_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 2</label>
												<input type="text" name="tab_2" class="form-control"
													   value="<?php echo $menu[1]->tab_2; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 3</label>
												<input type="text" name="tab_3" class="form-control"
													   value="<?php echo $menu[1]->tab_3; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 4</label>
												<input type="text" name="tab_4" class="form-control"
													   value="<?php echo $menu[1]->tab_4; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 5</label>
												<input type="text" name="tab_5" class="form-control"
													   value="<?php echo $menu[1]->tab_5; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 6</label>
												<input type="text" name="tab_6" class="form-control"
													   value="<?php echo $menu[1]->tab_6; ?>">
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
							<form action="<?php echo base_url(); ?>adminpanel/header/updateMenu/<?php echo $menu[2]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 1</label>
												<input type="text" name="tab_1" class="form-control"
													   value="<?php echo $menu[2]->tab_1; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 2</label>
												<input type="text" name="tab_2" class="form-control"
													   value="<?php echo $menu[2]->tab_2; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 3</label>
												<input type="text" name="tab_3" class="form-control"
													   value="<?php echo $menu[2]->tab_3; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 4</label>
												<input type="text" name="tab_4" class="form-control"
													   value="<?php echo $menu[2]->tab_4; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 5</label>
												<input type="text" name="tab_5" class="form-control"
													   value="<?php echo $menu[2]->tab_5; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Tab 6</label>
												<input type="text" name="tab_6" class="form-control"
													   value="<?php echo $menu[2]->tab_6; ?>">
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
