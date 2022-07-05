<section id="resume" class="grey-section">
    <div class="row section-intro">
        <div class="col-twelve">
            <h5><?php echo $page->navresume()->html();?></h5>
            <h1><?php echo $page->resumeintro()->html();?></h1>
            <p class="lead"><?php echo $page->resumebody()->kirbytextRaw();?></p>
        </div>
    </div>
    <!-- /section-intro-->
  	<?php if($page->resumesection1()->isEmpty() ?: snippet('resumesection', array('section' => '1'))) ?>
    <?php if($page->resumesection2()->isEmpty() ?: snippet('resumesection', array('section' => '2'))) ?>
    <?php if($page->resumesection3()->isEmpty() ?: snippet('resumesection', array('section' => '3'))) ?>
</section>