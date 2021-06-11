<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Add News</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Our News</span></li>
				<li><span>Add</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
					<form action="<?php echo base_url(); ?>adminpanel/news/updateNews/<?php echo $news[0]->id; ?>" id="demo-form"
						  class="form-horizontal mb-lg" enctype="multipart/form-data" method="POST">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Registration Form</h2>
							</header>
							<div class="panel-body">
								<div class="form-group mt-lg">
									<label class="col-sm-3 control-label">Choose image</label>
									<div class="col-sm-9">
										<input type="file" name="image"
											   class="form-control text-semibold mt-none"><br>
									</div>
								</div>
								<div class="form-group mt-lg">
									<label class="col-md-3 control-label">Title</label>
									<div class="col-md-9">
										<input type="text" name="title" value="<?php echo $news[0]->title; ?>"
											   class="form-control text-semibold mt-none"><br>
									</div>
								</div>
								<div class="form-group mt-lg">
									<label class="col-md-3 control-label">Content</label>
									<div class="col-md-9">
												<textarea class="form-control" rows="3" name="content"
														  id="mytextarea"
														  data-plugin-textarea-autosize><?php echo $news[0]->content; ?></textarea>
									</div>
								</div>
							</div>

							<footer class="panel-footer">
								<div class="row">
									<div class="col-md-12 text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
										<a href="<?php echo base_url(); ?>adminpanel/news"><button type="button" class="btn btn-default">Back</button></a>
									</div>
								</div>
							</footer>
						</section>
					</form>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>
