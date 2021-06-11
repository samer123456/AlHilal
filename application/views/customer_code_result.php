<?php $this->load->view('_head'); ?>
<?php $this->load->view('_header'); ?>
<?php if ($home[0]->tab_7 == 'Ar') { ?>
	<div class="wrapper light-wrapper">
		<div class="container inner" dir="rtl">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h1 class="section-title text-center">Thank You</h1>
					<h2 class="section-title text-center">كود العميل: <?php echo $customer_code; ?></h2>
					<hr/>
				</div>
			</div>
		</div>
	</div>
<?php } elseif ($home[0]->tab_7 == 'Tr') { ?>
	<div class="wrapper light-wrapper">
		<div class="container inner" dir="rtl">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h1 class="section-title text-center">Teşekkür Ederiz</h1>
					<h2 class="section-title text-center">Kodunuz: <?php echo $customer_code; ?></h2>
					<hr/>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="wrapper light-wrapper">
		<div class="container inner" dir="rtl">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h1 class="section-title text-center">Thank You</h1>
					<h2 class="section-title text-center">Your Code: <?php echo $customer_code; ?></h2>
					<hr/>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div>
<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscript'); ?>
