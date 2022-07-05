<!-- begin top-section  -->
<div class="top-section">

	<!-- begin section  -->
	<div class="section section_half thebridge section_plat" id="explore">
		<div class="section__in">
			<!-- begin text  -->
			<div class="section__text text">
				<h2 class="h2"><?php echo $page->howtitle()->html() ?></h2>
				<?php echo $page->howtext()->kirbytext() ?>
				<div><a href="/tokens.html" class="more"><?php echo $page->howlink()->html() ?> <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg></a></div>
			</div>
			<!-- end text -->


			<div class="section__pic">
				
				<img src="<?php 
					$img = $page->images()->find($page->howimage());
					echo $img->url(); 
				?>">
			</div>

		</div>
	</div>
	<!-- end section -->

	<div class="angled-section angled-section_invert1">
		<div class="angled-section__angle"></div>
		<div class="screens-wrap">
			<img src="/assets/img/screens.png" alt="">
		</div>



		<!-- begin section  -->
		<div class="section why-invest">
			<div class="section__in">
				<h2 class="h2"><?php echo $page->whytitle()->html() ?></h2>
				<!-- begin revs  -->
				<div class="revs">
					<?php
					$ps = $page->whylist()->yaml();

					foreach($ps as $p): ?>
						<!-- begin why  -->
						<?php $image = '';?>
						<div class="why">
							<div class="why__icon">
							<!--<svg class="icon icon-check"><use xlink:href="#icon-check"></use></svg>-->
								<img height="60" src="<?php if($image = $page->image($p['icon'])) echo $image->url(); ?>">
							</div>
							<h3 class="why__title"><?php echo $p['title']; ?></h3>
							<p><?php echo $p['text']; ?></p>
						</div>
						<!-- end why -->
					<?php endforeach ?>

				</div>
				<!-- end revs -->
			</div>
		</div>
		<!-- end section -->

	</div>
	<!-- end angled -->
</div>
<!-- end top-section -->
