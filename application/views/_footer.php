<footer class="gray-wrapper">
	<div class="container inner pt-60 pb-60">
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="ySS435Dm"></script>
		<div class="row">
			
		<div class="col-sm-6 col-md-3">

			<div class="widget"><a href="<?php echo base_url(); ?>"> 

				<div class="widget">
						<div class="fb-page" 
							data-href="https://www.facebook.com/sanabelalamerah"
							data-width="400" 
							data-hide-cover="false"
							data-show-facepile="false">
						</div>
						<div class="space20"></div>
					<div class="fb-page" data-href="https://www.facebook.com/sanabelalamerah" data-tabs="timeline" data-width="100" 
					data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote
					cite="https://www.facebook.com/sanabelalamerah" class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/sanabelalamerah">‎‎<?php echo $footer[0]->info; ?></a></blockquote></div>

				<!-- /.image-list -->

				</div>

			</div>

		</div>

			<div class="col-sm-4 col-sm-offset-5">
				<div class="widget">
					<h5 class="widget-title"><?php echo $footer[0]->title; ?></h5>
					<ul class="icon-list">
						<li><i class="et-location-pin"></i><?php echo $footer[0]->address; ?></li>
						<li><i class="et-mail"></i> <a href="mailto:first.last@email.com"
													   class="nocolor"><?php echo $footer[0]->email; ?></a>
						</li>
						<li><i class="et-old-phone"></i> <?php echo $footer[0]->phone_1; ?></li>
						<li><i class="et-mobile"></i> <?php echo $footer[0]->phone_2; ?></li>
						<li><i class="et-mobile"></i> <?php echo $footer[0]->phone_3; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<hr class="pt-0 mb-0"/>
	</div>
	<div class="sub-footer">
		<div class="container inner">
			<div class="cell text-left">
				<p>©
					<script>document.write(new Date().getFullYear());</script> <?php echo $footer[0]->copyright; ?> </p>
			</div>
			<div class="cell text-right">
				<ul class="social social-bg social-s">
					<li><a href="<?php echo $footer[0]->twitter; ?>" target="_blank"><i class="et-twitter"></i></a></li>
					<li><a href="<?php echo $footer[0]->facebook; ?>" target="_blank"><i class="et-facebook"></i></a>
					</li>
					<li><a href="<?php echo $footer[0]->instagram; ?>" target="_blank"><i class="et-instagram"></i></a>
					</li>
					<li><a href="<?php echo $footer[0]->linkedin; ?>" target="_blank"><i class="et-linkedin"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
