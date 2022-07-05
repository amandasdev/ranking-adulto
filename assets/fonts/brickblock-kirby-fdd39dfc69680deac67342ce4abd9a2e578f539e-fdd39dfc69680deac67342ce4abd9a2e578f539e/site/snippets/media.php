<!-- begin section -->
<div class="section media">

	<?php
    $badges = $page->badges()->yaml();

    foreach($badges as $b): ?>

	<!-- begin badge -->
	<a href="<?php echo $b['link']; ?>" target="_blank">
		
		<div class="badge media__badge">
			<div class="badge__in">
				<i class="badge__icon badge__icon_<?php echo $b['icon']; ?>">
					<svg class="icon icon-<?php echo $b['icon']; ?>"><use xlink:href="#icon-<?php echo $b['icon']; ?>"></use></svg>
				</i>
				<span class="badge__content">
					<!-- begin title -->
					<h2 class="badge__title"><?php echo $b['title'];?></h2>
					<!-- end title -->
					<!-- begin meta -->
					<span class="badge__meta">
						<span class="badge__source"><?php echo $b['source'];?></span>
						<span class="badge__date">
							<i class="badge__date-icon">
								<svg class="icon icon-calendar"><use xlink:href="#icon-calendar"></use></svg>
							</i>
							<span class="badge__date-text"><?php echo $b['date'];?></span>
						</span>
					</span>
					<!-- end meta -->
				</span>
			</div>
		</div>
	</a>
	<!-- end badge -->
	<?php endforeach ?>

</div>
<!-- end section -->