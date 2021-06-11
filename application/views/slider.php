<div class="rev_slider_wrapper fullscreen-container">
	<div id="slider" class="rev_slider fullscreenbanner rs-nav-light" data-version="5.4.1">
		<ul>
			<?php foreach ($slider as $rs) { ?>
			<li data-transition="fade" data-nav-color="light"><img
						src="<?php echo base_url(); ?>uploads/<?php echo $rs->img_name; ?>" alt=""/>
				<div class="tp-caption w-regular color-white text-center"
					 data-x="center"
					 data-y="middle"
					 data-voffset="['-90','-90','-90','-90']"
					 data-fontsize="['50','50','50','36']"
					 data-lineheight="['60','60','60','46']"
					 data-width="['1100','980','700','450']"
					 data-textAlign="['center','center','center','center']"
					 data-whitespace="['normal','normal','normal','normal']"
					 data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
					 data-responsive="on"
					 data-responsive_offset="on"
					 style="z-index: 9;"><?php echo $rs->title; ?>
				</div>
				<div class="tp-caption w-light color-white text-center"
					 data-x="center"
					 data-y="middle"
					 data-voffset="['0','0','0','0']"
					 data-fontsize="['28','28','28','22']"
					 data-lineheight="['38','38','38','32']"
					 data-width="['650','650','650','450']"
					 data-textAlign="['center','center','center','center']"
					 data-whitespace="['normal','normal','normal','normal']"
					 data-frames='[{"from":"x:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
					 data-responsive="on"
					 data-responsive_offset="on"
					 style="z-index: 9;"><?php echo $rs->info; ?>
				</div>
			<?php } ?>
		</ul>
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>
