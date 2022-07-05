<!-- begin community  -->
<div class="community">
	<div class="community__in">
		<h2 class="h2"><?php echo $site->comtitle()->html() ?></h2>
		<ul class="community__icons">
		<?php
		$ps = $site->socials()->yaml();

		foreach($ps as $p): ?>
		

			<li><a style="background-color: <?php echo $p['color']; ?>" href="<?php echo $p['url']; ?>" target="_blank"><svg class="icon icon-<?php echo $p['icon']; ?>"><use xlink:href="#icon-<?php echo $p['icon']; ?>"></use></svg> <span><?php echo $p['title']; ?></span></a></li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- end community -->
