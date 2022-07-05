<section id="portfolio">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5><?php echo $page->navportfolio()->html();?></h5>
                <h1><?php echo $page->portfoliotitle()->html();?></h1>
                <p class="lead"><?php echo $page->portfoliobody()->kirbytextRaw();?></p>
            </div>
        </div>
        <!-- /section-intro-->
        <div class="row portfolio-content">
            <div class="col-twelve">
                <!-- portfolio-wrapper -->
                <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
                    <?php $items = array_slice($page->portfolioitems()->yaml(),0,6); ?>
                    <?php $i = 0 ;?>
                    <?php foreach($items as $item): $i++?>
                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src=<?php echo $page->image($item['image'])->resize(800)->url(); ?> alt="Liberty">
                            <a href="#modal-<?php echo $i?>" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title"><?php echo html($item['title']);?></h3>
                                        <span class="folio-types">
		     					       	  <?php echo html($item['categories']);?>
		     					       </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                	<?php endforeach ?>

                    <!-- modal popups - begin
	            ============================================================= -->
                    <?php $j = 0 ;?>
                    <?php foreach($items as $item): $j++?>
                    <div id="modal-<?php echo $j?>" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src=<?php echo $page->image($item['image'])->resize(1050)->url(); ?> alt="<?php echo html($item['title']);?>" />
                        </div>
                        <div class="description-box">
                            <h4><?php echo html($item['title']);?></h4>
                            <?php echo kirbytext($item['body']);?>
                            <div class="categories"><?php echo html($item['categories']);?></div>
                        </div>
                        <div class="link-box">
                            <a href=<?php echo $item['ctaurl'];?>><?php echo html($item['ctalabel']);?></a>
                            <a href="#" class="popup-modal-dismiss"><?php echo $page->portfolioclosemodallabel()->html();?></a>
                        </div>
                    </div>
                    <?php endforeach ?>

                    <!-- modal popups - end
	            ============================================================= -->
                </div>
                <!-- /portfolio-wrapper -->
            </div>
            <!-- /twelve -->
        </div>
        <!-- /portfolio-content -->
    </section>