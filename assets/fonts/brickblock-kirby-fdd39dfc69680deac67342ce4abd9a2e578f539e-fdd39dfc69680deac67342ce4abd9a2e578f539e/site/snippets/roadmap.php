<!-- begin top-illustration  -->
<div class="top-illustration" style="display:none">
    <div class="top-illustration__in"></div>
    <div class="top-illustration__play">
        <svg class="icon icon-play"><use xlink:href="#icon-play"></use></svg>
    </div>
</div>
<!-- end top-illustration -->

<!-- begin section  -->
	<div class="section timeline" id="past">
		<div class="section__in">
			<div class="timeline__bg-title bg-title"><span><?php echo $page->todayeventstitle()->html() ?></span></div>
			<div class="timeslider timeline__timeslider">
            	<div class="js-timeline">
            		<?php
					$ts = $page->todayevents()->yaml();
					$i = 0;
					foreach($ts as $t): ?>
					<?php 
					$i++;
					$class = '';
					$class1 = '';
					if($i == 1 || $i == 2) {
						$class = 'is-circled is-highlighted';
					}
					else if($i==3){
						$class1 = 'is-special is-highlighted';
					}
					else if($i==4){
						$class1 = 'is-circled is-link';
					}
					?>
					<div class="timeline__item <?php echo $class;echo ' '.$class1;?>">
						<h3><?php echo $t['date'];?></h3>
						<div class="timeslider__index"><span><?php echo $i;?></span></div>
						
						
						<ul>
							<?php 
							$list = explode('- ', $t['eventslist']);
							foreach(array_filter($list) as $item): ?>
							<li>
								<span><?php echo $item;?></span>
							</li>
							<?php endforeach ?>
						</ul>

					</div>
					<?php endforeach ?>
            	</div>
            	<!-- begin slider controls -->
            	<button class="timeslider__arrow timeslider__arrow_timeline timeslider__arrow_prev js-timeline-prev">
					
					<svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>

				</button> 
				<button class="timeslider__arrow timeslider__arrow_timeline timeslider__arrow_next js-timeline-next">
					
					<svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>

				</button>
				<!-- end slider controls -->
            </div>
			
			

			<div class="timeline__bg"><div class="timeline__bg-in"></div></div>
		</div>
	</div>
<!-- end section -->
<!-- begin section -->
<div class="section roadmap" id="today">
    <div class="section__in">
        <div class="roadmap__bg"><div class="roadmap__bg-in"></div></div>
        <div class="bg-title roadmap__bg-title"><span><?php echo $page->pasteventstitle()->html() ?></span></div>
        <!-- begin roadmap -->
        <div class="timeslider roadmap__timeslider">
        	<div class="js-roadmap">
        		<?php
				$ps = $page->pastevents()->yaml();
				$i = 0;
				foreach($ps as $p): ?>
				<?php 
				$i++;
				$class = '';
				$class1 = '';
				if($i == 1 || $i == 2) {
					$class = 'is-past';
				}
				else if($i==3){
					$class1 = 'is-current';
				}
				?>
				<div class="roadmap__item <?php echo $class;echo ' '.$class1;?>">
					<div class="roadmap__item_in">
	                  <h3><?php echo $p['date'];?></h3>
	                </div>
				</div>
				<?php endforeach ?>
        	</div>
        	<div class="js-roadmap-inner">
        		<?php
				$ps = $page->pastevents()->yaml();
				$i = 0;
				foreach($ps as $p): ?>
				<?php 
				$i++;
				?>
        		<div class="roadmap__desc">
        			<h4><?php echo $p['date'];?></h4>
        			<p><?php echo $p['text'];?></p>
        		</div>
        		<?php endforeach ?>
        	</div>
        	<button class="timeslider__arrow timeslider__arrow_roadmap timeslider__arrow_prev js-roadmap-prev">
					
				<svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>

			</button> 
			<button class="timeslider__arrow timeslider__arrow_roadmap timeslider__arrow_next js-roadmap-next">
					
				<svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>

			</button>
        </div>
    </div>
</div>
<!-- end section -->