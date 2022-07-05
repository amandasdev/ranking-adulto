<?php $rstitle = 'resumesection' . $section ;?>
<?php $rstimeline = 'resumesection' . $section . 'timeline' ?>
<?php $blocks = array_slice($page->$rstimeline()->yaml(),0); ?>
<div class="row resume-timeline">
    <div class="col-twelve resume-header">
        <h2><?php echo $page->$rstitle();?></h2>
    </div>
    <!-- /resume-header -->
    <div class="col-twelve">
        <div class="timeline-wrap">
            <?php foreach ($blocks as $block):?>
            <div class="timeline-block">
                <div class="timeline-ico">
                    <i class="fa fa-<?php echo $block['icon']?>"></i>
                </div>
                <div class="timeline-header">
                    <h3><?php echo $block['title']?></h3>
                    <p><?php echo $block['date']?></p>
                </div>
                <div class="timeline-content">
                    <h4><?php echo $block['company']?></h4>
                    <p><?php echo $block['body']?></p>
                </div>
            </div>
        	<?php endforeach ?>
        </div>
        <!-- /timeline-wrap -->
    </div>
    <!-- /col-twelve -->
</div>