<section id="stats" class="count-up">
    <div class="row">
        <div class="col-twelve">
        <?php $stats = array_slice($page->stats()->yaml(),0,6); ?>
            <div class=<?php echo '"block-1-' . count($stats) . ' block-s-1-2 block-tab-1-2 block-mob-full stats-list">' ;?>
                <?php foreach ($stats as $stat): ?>
                <div class="bgrid stat">
                    <div class="icon-part">
                        <i class="icon-<?php echo $stat['icon'];?>"></i>
                    </div>
                    <h3 class="stat-count">
						<?php echo html($stat['number']);?>
					</h3>
                    <h5 class="stat-title">
						<?php echo html($stat['body']);?>
					</h5>
                </div>
                <?php endforeach ?> 
            </div>
            <!-- /stats-list -->
        </div>
        <!-- /twelve -->
    </div>
    <!-- /row -->
</section>