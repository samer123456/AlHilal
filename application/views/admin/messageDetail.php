<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Message Detail</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Messages</span></li>
				<li><span><?php echo $message[0]->subject; ?></span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<form class="form-horizontal form-bordered"
		  action="<?php echo base_url(); ?>adminpanel/message/answerMail/<?php echo $message[0]->id; ?>"
		  method="post">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo base_url(); ?>adminpanel/message">
						<button type="button" id="dialogConfirm" class="btn btn-default">Back</button>
					</a>
					<a href="<?php echo base_url(); ?>adminpanel/message/deleteMessage/<?php echo $message[0]->id; ?>">
						<button type="button" id="dialogConfirm" class="btn btn-danger"
								onclick="return confirm('Are you sure?')">
							Delete
						</button>
					</a>
				</div>
				<h2 class="panel-title"><?php echo $message[0]->name; ?></h2>
			</header>
			<div class="panel-body" style="overflow-x:auto">
				<div class="result-data">
					<p class="h3 title text-primary"><?php echo $message[0]->subject ?></p>
					<p class="description"><?php echo $message[0]->message; ?></p>
				</div>
			</div>
		</section>
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<button id="dialogConfirm" class="btn btn-primary" type="submit">Answer</button>
				</div>
				<h2 class="panel-title">Send To: <?php echo $message[0]->email; ?></h2>
			</header>
			<div class="panel-body" style="overflow-x:auto">
				<div class="form-group">
					<textarea type="text" name="messageAnswer" id="mytextarea"></textarea>
				</div>
			</div>
		</section>
	</form>
</section>
<?php $this->load->view('admin/_footer'); ?>
