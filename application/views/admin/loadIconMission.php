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
		<form id="form" action="<?= base_url() ?>adminpanel/about/updateIconMission/<?= $id ?>"
			  enctype="multipart/form-data" method="post" class="form-horizontal">
			<div class="row justify-content-md-center" style="text-align:center">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h3 class="mt-lg"></h3>
					<p class="mb-lg"></p>

					<section class="panel">
						<div class="panel-body panel-body-nopadding">
							<div class="owl-carousel mb-md" data-plugin-carousel
								 data-plugin-options='{ "items": 1, "width":80%, "autoHeight": true }'>
								<div class="item">
									<input type="file" name="image" class="form-control text-semibold mt-none"><br>
								</div>
							</div>

						</div>
						<div class="panel-footer panel-footer-btn-group">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</section>
				</div>
			</div>
		</form>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>
