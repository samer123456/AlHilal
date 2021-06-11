<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>



	<iframe
			src="<?php echo $contact[0]->map_url; ?>"
			width="100%" height="450" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
	<div class="wrapper light-wrapper ">
		<div class="container inner">
		<?php
if($home[0]->tab_7=="Ar"){
	$cls = "dir='rtl'";
}else{
	$cls ="";
}
?>
			<div class="row ">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="section-title text-center"><?php echo $contact[0]->title; ?></h2>
					<div class="space30"></div>
					<div class="row text-center">
						<div class="col-sm-4"><span class="icon icon-color icon-m mb-5"><i
										class="si-camping_map"></i></span>
							<p><?php echo $contact[0]->address; ?></p>
						</div>
						<div class="col-sm-4"><span class="icon icon-color icon-m mb-5"><i
										class="si-phone_phone-ringing"></i></span>
							<p><?php echo $contact[0]->phone; ?></p>
						</div>
						<div class="col-sm-4"><span class="icon icon-color icon-m mb-5"><i
										class="si-mail_mail-2"></i></span>
							<p><a class="nocolor"
								  href="mailto:<?php echo $contact[0]->email; ?>"><?php echo $contact[0]->email; ?></a><br>
						</div>
					</div>
					<div class="space30"></div>
					<div class="form-container ">
						<form action="<?php echo base_url(); ?>contact-us/send-message" method="POST">
							<div class="row ">
								<div class="col-sm-6 pr-10">
									<div class="form-group">
										<input type="text" class="form-control" name="name" <?php echo $cls; ?>
											   placeholder="<?php echo $contact[0]->hint_name; ?>"
											   required="required">
									</div>
								</div>
								<div class="col-sm-6 pl-10">
									<div class="form-group">
										<input type="email" class="form-control" name="email" <?php echo $cls; ?>
											   placeholder="<?php echo $contact[0]->hint_mail; ?>"
											   required="required">
									</div>
								</div>
								<div class="col-sm-12 text-center">
									<div class="form-group">
										<input type="text" class="form-control" name="subject" <?php echo $cls; ?>
											   placeholder="<?php echo $contact[0]->hint_subject; ?>"
											   required="required">
									</div>
								</div>
								
								<div class="col-sm-12 text-center">
								<textarea name="message" class="form-control" rows="3" <?php echo $cls; ?>
										  placeholder="<?php echo $contact[0]->hint_message; ?>" required></textarea>
									<button style="margin-top:16px" type="submit" class="btn btn-rounded"
											data-error="Fix errors"
											data-processing="Sending..."
											data-success="Thank you!"><?php echo $contact[0]->button; ?>
									</button>
									<footer class="notification-box"></footer>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php $this->load->view('_footer') ?>
<?php $this->load->view('_footerscript') ?>
