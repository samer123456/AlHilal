<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>
<div class="wrapper light-wrapper">
	<?php if ($home[0]->tab_7 == 'Ar') { ?>
		<div class="container inner" dir="rtl">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h2 class="section-title text-center"><?php echo $customer_code[0]->title; ?></h2>
					<?php if ($this->session->flashdata("message")) { ?>
						<div class="alert bg alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Oh !</strong> <?php echo $this->session->flashdata("message"); ?>
						</div>
					<?php } ?>
					<form action="<?php echo base_url(); ?>customer/createCode/1" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1"><?php echo $customer_code[0]->mail; ?></label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1"
								   placeholder="mail@example.com" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->phone; ?></label>
							<input type="text" name="phone" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->whatsapp; ?></label>
							<input type="text" name="whatsapp" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6Lert5YaAAAAANJlouxRlnR67oBFhoicaucA6nN3"></div>
						</div>
						<button type="submit" class="btn btn-rounded"><?php echo $customer_code[0]->button; ?></button>
					</form>
					<hr/>
				</div>
			</div>
		</div>
	<?php } elseif ($home[0]->tab_7 == 'Tr') { ?>
		<div class="container inner">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h2 class="section-title text-center"><?php echo $customer_code[0]->title; ?></h2>
					<?php if ($this->session->flashdata("message")) { ?>
						<div class="alert bg alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Oh !</strong> <?php echo $this->session->flashdata("message"); ?>
						</div>
					<?php } ?>
					<form action="<?php echo base_url(); ?>customer/createCode/2" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1"><?php echo $customer_code[0]->mail; ?></label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1"
								   placeholder="mail@example.com" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->phone; ?></label>
							<input type="text" name="phone" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->whatsapp; ?></label>
							<input type="text" name="whatsapp" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6Lert5YaAAAAANJlouxRlnR67oBFhoicaucA6nN3"></div>
						</div>
						<button type="submit" class="btn btn-rounded"><?php echo $customer_code[0]->button; ?></button>
					</form>
					<hr/>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="container inner">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h2 class="section-title text-center"><?php echo $customer_code[0]->title; ?></h2>
					<?php if ($this->session->flashdata("message")) { ?>
						<div class="alert bg alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Oh !</strong> <?php echo $this->session->flashdata("message"); ?>
						</div>
					<?php } ?>
					<form action="<?php echo base_url(); ?>customer/createCode/3" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1"><?php echo $customer_code[0]->mail; ?></label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1"
								   placeholder="mail@example.com" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->phone; ?></label>
							<input type="text" name="phone" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<label for="exampleInputName1"><?php echo $customer_code[0]->whatsapp; ?></label>
							<input type="text" name="whatsapp" class="form-control" id="exampleInputName1"
								   placeholder="0090123456" required>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6Lert5YaAAAAANJlouxRlnR67oBFhoicaucA6nN3"></div>
						</div>
						<button type="submit" class="btn btn-rounded"><?php echo $customer_code[0]->button; ?></button>
					</form>
					<hr/>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
