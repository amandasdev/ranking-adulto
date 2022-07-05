<!-- begin angled-section  -->
<div class="angled-section angled-section_invert ether">
	<div class="angled-section__angle"></div>
	<!-- begin section  -->
	<div class="section section_margin section_half section_ether">
		<!-- begin section__in  -->
		<div class="section__in">
			<div class="section__pic js-rellax" data-rellax-speed="-1" data-rellax-percentage="0.08">
                <?php
                $im = $page->imagelist()->yaml();
                $g = 0;

                foreach($im as $i): 
                    $g++;
                    ?>
                    <img src="content/1-home/<?php echo $i['image']; ?>" alt="" class="<?php if($g != 1) {echo "js-stagger-img"; } ?>" data-title="<?php if($g != 1) { echo $i['title'];} ?>">
                <?php endforeach ?>

			</div>
            <div class="section__text section__short">
               <h2 class="h2">BUILT ON <span class="changing-title js-changing-title"><?php echo $page->buildtitle()->html() ?></span></h2>

                <?php echo $page->buildtext()->kirbytext(); ?>
                <p class="buttons"><a href="/platform.html#!technology" data-target="technology" class="button button_dark button_border button_spaced js-goto"><?php echo $page->buildbuttontitle()->html() ?></a></p>
            </div>
		</div>
		<!-- end section__in -->
	</div>
	<!-- end section -->

	<!-- begin section  -->
	<div class="section section_partners">
		<div class="section__in">
			<h2 class="h2">Brickblock has strong partners</h2>
			<!-- begin partners  -->
			<ul class="partners">

			<?php
			$ps = $page->partnerslist()->yaml();

			foreach($ps as $p): ?>
	
				<li><a href="<?php echo $p['url']; ?>" target="_blank"><img src="<?php if($image = $page->image($p['icon'])) echo $image->url(); ?>" width="<?php echo $p['width']; ?>" alt=""></a></li>
				<?php endforeach ?>
			</ul>
			<!-- end partners -->


		</div>
	</div>
	<!-- end section -->
</div>
<!-- end angled-section -->
