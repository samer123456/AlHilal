<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Update eform</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
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
							<form action="<?php echo base_url(); ?>adminpanel/eform/update_eform/<?php echo $eform[0]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">header</label>
												<input type="text" name="header" class="form-control" value="<?php echo $eform[0]->header; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">shipForMe</label>
												<input type="text" name="shipForMe" class="form-control" value="<?php echo $eform[0]->shipForMe; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">eform</label>
												<input type="text" name="eform" class="form-control" value="<?php echo $eform[0]->eForm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $eform[0]->email; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">name</label>
												<input type="text" name="name" class="form-control" value="<?php echo $eform[0]->name; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $eform[0]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">orderNo</label>
												<input type="text" name="orderNo" class="form-control" value="<?php echo $eform[0]->orderNo; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">shipping</label>
												<input type="text" name="shipping" class="form-control" value="<?php echo $eform[0]->shipping; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">sea</label>
												<input type="text" name="sea" class="form-control" value="<?php echo $eform[0]->sea; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">land</label>
												<input type="text" name="land" class="form-control" value="<?php echo $eform[0]->land; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">air</label>
												<input type="text" name="air" class="form-control" value="<?php echo $eform[0]->air; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">detailedCustomerAddress</label>
												<input type="text" name="detailedCustomerAddress" class="form-control" value="<?php echo $eform[0]->detailedCustomerAddress; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">productLink</label>
												<input type="text" name="productLink" class="form-control" value="<?php echo $eform[0]->productLink; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">submit</label>
												<input type="text" name="submit" class="form-control" value="<?php echo $eform[0]->submit; ?>">
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
							<form action="<?php echo base_url(); ?>adminpanel/eform/update_eform/<?php echo $eform[1]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">header</label>
												<input type="text" name="header" class="form-control" value="<?php echo $eform[1]->header; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">shipForMe</label>
												<input type="text" name="shipForMe" class="form-control" value="<?php echo $eform[1]->shipForMe; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">eform</label>
												<input type="text" name="eform" class="form-control" value="<?php echo $eform[1]->eForm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $eform[1]->email; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">name</label>
												<input type="text" name="name" class="form-control" value="<?php echo $eform[1]->name; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $eform[1]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">orderNo</label>
												<input type="text" name="orderNo" class="form-control" value="<?php echo $eform[1]->orderNo; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">shipping</label>
												<input type="text" name="shipping" class="form-control" value="<?php echo $eform[1]->shipping; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">sea</label>
												<input type="text" name="sea" class="form-control" value="<?php echo $eform[1]->sea; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">land</label>
												<input type="text" name="land" class="form-control" value="<?php echo $eform[1]->land; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">air</label>
												<input type="text" name="air" class="form-control" value="<?php echo $eform[1]->air; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">detailedCustomerAddress</label>
												<input type="text" name="detailedCustomerAddress" class="form-control" value="<?php echo $eform[1]->detailedCustomerAddress; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">productLink</label>
												<input type="text" name="productLink" class="form-control" value="<?php echo $eform[1]->productLink; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">submit</label>
												<input type="text" name="submit" class="form-control" value="<?php echo $eform[1]->submit; ?>">
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
							<form action="<?php echo base_url(); ?>adminpanel/eform/update_eform/<?php echo $eform[2]->lang; ?>" method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12 ">
											<div class="form-group">
												<label class="control-label">header</label>
												<input type="text" name="header" class="form-control" value="<?php echo $eform[2]->header; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class=" col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
											<div class="form-group">
												<label class="control-label">shipForMe</label>
												<input type="text" name="shipForMe" class="form-control" value="<?php echo $eform[2]->shipForMe; ?>">
											</div>
										</div>
										<div class="col-sm-6 ">
											<div class="form-group">
												<label class="control-label">eform</label>
												<input type="text" name="eform" class="form-control" value="<?php echo $eform[2]->eForm; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $eform[2]->email; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">name</label>
												<input type="text" name="name" class="form-control" value="<?php echo $eform[2]->name; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone</label>
												<input type="text" name="phone" class="form-control" value="<?php echo $eform[2]->phone; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">orderNo</label>
												<input type="text" name="orderNo" class="form-control" value="<?php echo $eform[2]->orderNo; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">shipping</label>
												<input type="text" name="shipping" class="form-control" value="<?php echo $eform[2]->shipping; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">sea</label>
												<input type="text" name="sea" class="form-control" value="<?php echo $eform[2]->sea; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">land</label>
												<input type="text" name="land" class="form-control" value="<?php echo $eform[2]->land; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">air</label>
												<input type="text" name="air" class="form-control" value="<?php echo $eform[2]->air; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">detailedCustomerAddress</label>
												<input type="text" name="detailedCustomerAddress" class="form-control" value="<?php echo $eform[2]->detailedCustomerAddress; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">productLink</label>
												<input type="text" name="productLink" class="form-control" value="<?php echo $eform[2]->productLink; ?>">
											</div>
										</div>
									</div>

									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">submit</label>
												<input type="text" name="submit" class="form-control" value="<?php echo $eform[2]->submit; ?>">
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