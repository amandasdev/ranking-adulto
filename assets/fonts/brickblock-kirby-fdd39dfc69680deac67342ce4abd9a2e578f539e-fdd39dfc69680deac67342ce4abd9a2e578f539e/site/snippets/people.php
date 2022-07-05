<!-- begin bg-section  -->
<div class="bg-section" >
	<?php snippet('notification');?>
	<!-- begin section  -->
	<div class="section" id="team">
		<div class="section__in">

			<h2 class="h2"><?php echo $page->teamtitle()->html() ?></h2>
			<!-- begin people  -->
			<div class="people">
				<?php
				$ps = $page->teamlist()->yaml();

				foreach($ps as $p): ?>
					<!-- begin person  -->
					<div class="person">
					<?php //print_r($image);?>
						<a target="_blank" href="<?php echo $p['url']; ?>" class="person__photo" >
							<div class="person__photo-pic" style="background-image: url(<?php if($image = $page->image($p['photo'])) echo $image->url(); ?>)"></div>
							<div class="person__linkedin"><svg class="icon icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg></div>
						</a>
						<a target="_blank" href="<?php echo $p['url']; ?>" class="person__name__link">
							<h3 class="person__name"><?php echo $p['name']; ?></h3>
						</a>
						<p class="person__position"><?php echo $p['position']; ?></p>
						<div class="person__text">
							<p><?php echo $p['text']; ?></p>
						</div>
					</div>
					<!-- end person -->
				<?php endforeach ?>
			</div>
			<!-- end people -->
		</div>
	</div>
	<!-- end section -->
</div>
<!-- end bg-section -->




<!-- begin section  -->
<div class="section">
	<div class="section__in">
		<h2 class="h2"><?php echo $page->advtitle()->html() ?></h2>
		<!-- begin people  -->
		<div class="people">
			<?php
			$ps = $page->advlist()->yaml();

			foreach($ps as $p): ?>
				<!-- begin person  -->
				<div class="person">
					<a target="_blank" href="<?php echo $p['url']; ?>" class="person__photo" >
						<div class="person__photo-pic" style="background-image: url(<?php if($image = $page->image($p['photo'])) echo $image->url(); ?>)"></div>
						<div class="person__linkedin">							<svg class="icon icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg></div>
					</a>
					<a target="_blank" href="<?php echo $p['url']; ?>" class="person__name__link">
						<h3 class="person__name"><?php echo $p['name']; ?></h3>
					</a>
					<p class="person__position"><?php echo $p['position']; ?></p>
					<div class="person__text">
						<p><?php echo $p['text']; ?></p>
					</div>
				</div>
				<!-- end person -->
			<?php endforeach ?>

		</div>
		<!-- end people -->


	</div>
</div>
<!-- end section -->
