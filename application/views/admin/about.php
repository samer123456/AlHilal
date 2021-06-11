<?php $this->load->view('admin/_head'); ?>
<?php $this->load->view('admin/_header'); ?>
<?php $this->load->view('admin/_sidebar'); ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Update About Us</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
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
							<form action="<?php echo base_url(); ?>adminpanel/about/updateAbout/<?php echo $about_tr[0]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Section Title</label>
												<input type="text" name="s_title" class="form-control"
													   value="<?php echo $about_tr[0]->section_title; ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control"
													   value="<?php echo $about_tr[0]->title; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Info</label>
											<div class="col-md-6">
												<textarea class="form-control" rows="3" name="info"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_tr[0]->info; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Vision</label>
												<input type="text" name="vision_title" class="form-control"
													   value="<?php echo $about_tr[0]->title_vision; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Vision</label>
											<div class="col-md-6">
												<textarea class="form-control" name="vision" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_tr[0]->vision; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Mission</label>
												<input type="text" name="mission_title" class="form-control"
													   value="<?php echo $about_tr[0]->title_mission; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Mission</label>
											<div class="col-md-6">
												<textarea class="form-control" name="mission" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_tr[0]->mission; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Aim</label>
												<input type="text" name="aim_title" class="form-control"
													   value="<?php echo $about_tr[0]->title_aim; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Aim</label>
											<div class="col-md-6">
												<textarea class="form-control" name="aim" rows="3" id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_tr[0]->aim; ?></textarea>
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
							<form action="<?php echo base_url(); ?>adminpanel/about/updateAbout/<?php echo $about_en[0]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Section Title</label>
												<input type="text" name="s_title" class="form-control"
													   value="<?php echo $about_en[0]->section_title; ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control"
													   value="<?php echo $about_en[0]->title; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Info</label>
											<div class="col-md-6">
												<textarea class="form-control" rows="3" name="info"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_en[0]->info; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Vision</label>
												<input type="text" name="vision_title" class="form-control"
													   value="<?php echo $about_en[0]->title_vision; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Vision</label>
											<div class="col-md-6">
												<textarea class="form-control" name="vision" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_en[0]->vision; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Mission</label>
												<input type="text" name="mission_title" class="form-control"
													   value="<?php echo $about_en[0]->title_mission; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Misson</label>
											<div class="col-md-6">
												<textarea class="form-control" name="mission" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_en[0]->mission; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Aim</label>
												<input type="text" name="aim_title" class="form-control"
													   value="<?php echo $about_en[0]->title_aim; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Aim</label>
											<div class="col-md-6">
												<textarea class="form-control" name="aim" rows="3" id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_en[0]->aim; ?></textarea>
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
							<form action="<?php echo base_url(); ?>adminpanel/about/updateAbout/<?php echo $about_ar[0]->lang; ?>"
								  method="POST">
								<div class="panel-body">
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Section Title</label>
												<input type="text" name="s_title" class="form-control"
													   value="<?php echo $about_ar[0]->section_title; ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label class="control-label">Title</label>
												<input type="text" name="title" class="form-control"
													   value="<?php echo $about_ar[0]->title; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Info</label>
											<div class="col-md-6">
												<textarea class="form-control" rows="3" name="info"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_ar[0]->info; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Vision</label>
												<input type="text" name="vision_title" class="form-control"
													   value="<?php echo $about_ar[0]->title_vision; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Vision</label>
											<div class="col-md-6">
												<textarea class="form-control" name="vision" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_ar[0]->vision; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Mission</label>
												<input type="text" name="mission_title" class="form-control"
													   value="<?php echo $about_ar[0]->title_mission; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Misson</label>
											<div class="col-md-6">
												<textarea class="form-control" name="mission" rows="3"
														  id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_ar[0]->mission; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 12px">
										<div class="col-sm-3 col-sm-offset-3">
											<div class="form-group">
												<label class="control-label">Aim</label>
												<input type="text" name="aim_title" class="form-control"
													   value="<?php echo $about_ar[0]->title_aim; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="textareaAutosize">Aim</label>
											<div class="col-md-6">
												<textarea class="form-control" name="aim" rows="3" id="textareaAutosize"
														  data-plugin-textarea-autosize><?php echo $about_ar[0]->aim; ?></textarea>
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
		<div class="row">
			<div class="col-md-8">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					Değiştirmek istediğiniz ikonu seçip açılan formdan yenisini seçebilirsiniz. Önerilen ikon boyutu:
					<strong>48x48</strong><br>Önerilen görüntü boyutu:
					<strong>650x550</strong>
				</div>
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#turkish_img" data-toggle="tab" class="text-center">
								Turkish</a>
						</li>
						<li>
							<a href="#english_img" data-toggle="tab" class="text-center">English</a>
						</li>
						<li>
							<a href="#arabic_img" data-toggle="tab" class="text-center">Arabic</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="turkish_img" class="tab-pane active">
							<div class="panel-body">
								<div class="row" style="margin-bottom: 12px">
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadImage/<?php echo $about_tr[0]->id; ?>"><img
														width="150px"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_tr[0]->img_name; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconVision/<?php echo $about_tr[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_tr[0]->icon_vision; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconMission/<?php echo $about_tr[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_tr[0]->icon_mission; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconAim/<?php echo $about_tr[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_tr[0]->icon_aim; ?>"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="english_img" class="tab-pane">
							<div class="panel-body">
								<div class="row" style="margin-bottom: 12px">
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadImage/<?php echo $about_en[0]->id; ?>"><img
														width="150px"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_en[0]->img_name; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconVision/<?php echo $about_en[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_en[0]->icon_vision; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconMission/<?php echo $about_en[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_en[0]->icon_mission; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconAim/<?php echo $about_en[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_en[0]->icon_aim; ?>"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="arabic_img" class="tab-pane">
							<div class="panel-body">
								<div class="row" style="margin-bottom: 12px">
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadImage/<?php echo $about_ar[0]->id; ?>"><img
														width="150px"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_ar[0]->img_name; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconVision/<?php echo $about_ar[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_ar[0]->icon_vision; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconMission/<?php echo $about_ar[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_ar[0]->icon_mission; ?>"></a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<a href="<?php echo base_url(); ?>adminpanel/about/loadIconAim/<?php echo $about_ar[0]->id; ?>"><img
														style="background: #0a6aa1"
														src="<?php echo base_url(); ?>uploads/<?php echo $about_ar[0]->icon_aim; ?>"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<?php $this->load->view('admin/_footer'); ?>
