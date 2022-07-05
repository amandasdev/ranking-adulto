<!-- begin top-section  -->
<div class="top-section">

	<!-- begin section  -->
	<div class="section thebridge">
		<div class="section__in">
			<!-- begin text  -->
			<div class="section__text text">
				<h2 class="h2"><?php echo $page->bridgetitle()->html() ?></h2>
				<?php echo $page->bridgetext()->kirbytext() ?>
				<div><a href="/platform" class="more"><?php echo $page->bridgelinktitle()->html() ?> <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg></a></div>
			</div>
			<!-- end text -->


			<div class="section__pic">
				<!-- begin ipad  -->
				<div class="ipad">
					<div class="ipad__video">

					</div>
				</div>
				<!-- end ipad -->
			</div>

		</div>
	</div>
	<!-- end section -->

	<div class="angled-section">
		<div class="angled-section__angle"></div>

		<!-- begin section  -->
		<div class="section">
			<div class="section__in uses-section">
				<h2 class="h2"><?php echo $page->usestitle()->html() ?></h2>
				<!-- begin uses  -->
				<div class="uses">
					<?php
					$uses = $page->useslist()->yaml();

					foreach($uses as $use): ?>
						<!-- begin use  -->
						<div class="use" data-target="<?php echo $use['icon']; ?>">
							<div class="use__icon"><img src="/assets/img/<?php echo $use['icon']; ?>.svg" alt=""></div>
							<h3 class="use__title"><?php echo $use['title']; ?></h3>
							<p><?php echo $use['content']; ?></p>
						</div>
						<!-- end use -->
					<?php endforeach ?>



				</div>
				<!-- end uses -->

				<?php foreach($uses as $use): ?>
					<!-- begin use__popup  -->
					<div class="use-popup" data-popup="<?php echo $use['icon']; ?>">
						<div class="use-popup__close"><svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></div>
						<div class="use-popup__icon"><img src="/assets/img/<?php echo $use['icon']; ?>.svg" alt=""></div>
						<h3 class="use-popup__title"><?php echo $use['title']; ?></h3>
						<div class="use-popup__text">
							<?php echo $use['text']; ?>
						</div>
						<div class="use-popup__less">
							<svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg> Show less
						</div>
					</div>
					<!-- end use__popup -->
				<?php endforeach ?>
			</div>
		</div>
		<!-- end section -->


		<!-- begin section  -->
		<div class="section revolution">
			<div class="section__in">
				<h2 class="h2"><?php echo $page->revtitle()->html() ?></h2>
				<!-- begin revs  -->
				<div class="revs">
					<?php
					$revs = $page->revlist()->yaml();

					foreach($revs as $rev): ?>
						<!-- begin rev  -->
						<?php $image = '';?>
						<div class="rev">
							<div class="rev__icon">
								<!-- <svg class="icon icon-check"><use xlink:href="#icon-check"></use></svg> -->
								<img height="60" src="<?php if($image = $page->image($rev['icon'])) echo $image->url(); ?>">
							</div>
							<h3 class="rev__title"><?php echo $rev['title']; ?></h3>
							<p><?php echo $rev['content']; ?></p>
						</div>
						<!-- end rev -->
					<?php endforeach ?>

				</div>
				<!-- end revs -->
				<div class="section__more">
					<a href="/platform#!advantages" class="button button_border button_subtlebg"><?php echo $page->revbutton()->html() ?></a>
				</div>
			</div>
		</div>
		<!-- end section -->

	</div>
	<!-- end angled -->
</div>
<!-- end top-section -->
