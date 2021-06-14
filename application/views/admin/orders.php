<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>orders</h2>
	</header>
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
			<h2 class="panel-title"></h2>
		</header>
		<div class="panel-body" style="overflow-x:auto">
			<table class="table">
				<thead>
				<tr>
					<th scope="col-1">No</th>
					<th scope="col-2">Name</th>
					<th scope="col-2">Email</th>
					<th scope="col-2">Phone</th>
					<th scope="col-2">No.Order</th>
					<th scope="col-2">Shipping Type</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 0;
				foreach ($orders as $rs) {
					$no++;
					?>
					<tr>
						<th scope="row"><?= $no ?></th>
						<td><?= $rs->name ?></td>
						<td><?= $rs->email ?></td>
						<td><?= $rs->phone ?></td>
						<td><?= $rs->orderNo ?></td>
						<td><?= $rs->shippingType ?></td>
						<td><a href="<?= base_url() ?>adminpanel/orders/orderDetail/<?php echo $rs->id; ?>">
								<button type="button" class="btn btn-primary"><i class="fa fa-edit"></i> Read</button>
							</a>
							<a href="<?= base_url() ?>adminpanel/orders/deleteOrder/<?php echo $rs->id; ?>">
								<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')">
									<i class="fa fa-exclamation-circle"></i> Delete
								</button>
							</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
</section>
<?php $this->load->view('admin/_footer'); ?>
