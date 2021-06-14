<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Order Detail</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Name</span></li>
				<li><span><?php echo $orders[0]->name; ?></span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- <form class="form-horizontal form-bordered"
		  action="<?php echo base_url(); ?>adminpanel/orders/answerMail/<?php echo $orders[0]->id; ?>"
		  method="post"> -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="<?php echo base_url(); ?>adminpanel/orders">
					<button type="button" id="dialogConfirm" class="btn btn-default">Back</button>
				</a>
				<a href="<?php echo base_url(); ?>adminpanel/orders/deleteOrder/<?php echo $orders[0]->id; ?>">
					<button type="button" id="dialogConfirm" class="btn btn-danger" onclick="return confirm('Are you sure?')">
						Delete
					</button>
				</a>
			</div>
			<h2 class="panel-title"><?php echo $orders[0]->name; ?></h2>
		</header>
		<div class="panel-body" style="overflow-x:auto">
			<div class="result-data">
				<p class="h5 title ">Email: <?php echo $orders[0]->email ?></p>
				<p class="h5 title ">Phone: <?php echo $orders[0]->phone ?></p>
				<p class="h5 title ">OrderNo: <?php echo $orders[0]->orderNo ?></p>
				<p class="h5 title ">ShippingType: <?php echo $orders[0]->shippingType ?></p>
				<p class="h5 title ">ProductLink: <a href="<?php echo $orders[0]->productLink ?>"> <?php echo $orders[0]->productLink ?></a></p>
				<p class="description">Customer Address: <?php echo $orders[0]->detailedCustomerAddress; ?></p>
			</div>
		</div>
	</section>
	<!-- <section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<button id="dialogConfirm" class="btn btn-primary" type="submit">Answer</button>
				</div>
				<h2 class="panel-title">Send To: <?php echo $orders[0]->email; ?></h2>
			</header>
			<div class="panel-body" style="overflow-x:auto">
				<div class="form-group">
					<textarea type="text" name="messageAnswer" id="mytextarea"></textarea>
				</div>
			</div>
		</section>  -->
	<!-- </form> -->
</section>
<?php $this->load->view('admin/_footer'); ?>