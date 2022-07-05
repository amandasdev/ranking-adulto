<section id="about">
    <div class="row section-intro">
        <div class="col-twelve">
            <h5><?php echo $page->navabout()->html();?></h5>
            <h1><?php echo $page->aboutintro()->html();?></h1>
            <div class="intro-info">
                <img src="<?php echo $page->image($page->aboutimage())->url();?>" alt="Profile Picture">
                <p class="lead"><?php echo $page->aboutbody()->kirbytextRaw();?></p>
            </div>
        </div>
    </div>
    <!-- /section-intro -->
    <div class="row about-content">
        <div class="col-six tab-full">
            <?php echo $page->aboutcol1()->kirbytext();?>
            <ul class="info-list">
            	<?php foreach ($infos as $info): ?>
            	<li>
                    <strong><?php echo $info['label']?> :</strong>
                    <span><?php echo $info['text']?></span>
                </li>
            	<?php endforeach ?>
            </ul>
            <!-- /info-list -->
        </div>
        <div class="col-six tab-full">
            <?php echo $page->aboutcol2()->kirbytext();?>
            <ul class="skill-bars">
                <?php foreach ($skills as $skill): ?>
            	<li>
                    <div class="progress percent<?php echo $skill['percent'] ;?>"><span><?php echo $skill['percent']; ?></span></div>
                    <strong><?php echo $skill['text'] ;?></strong>
                </li>
                <?php endforeach ?>
            </ul>
            <!-- /skill-bars -->
        </div>
    </div>
    <div class="row button-section">
        <div class="col-twelve">
            <a href=<?php echo $page->aboutcta1url() ;?> title="<?php echo $page->aboutcta1()->html() ;?>" class="button stroke smoothscroll"><?php echo $page->aboutcta1()->html();?></a>
            <a href=<?php echo $page->aboutcta2() ;?> title="<?php echo $page->aboutcta2()->html() ;?>" class="button button-primary"><?php echo $page->aboutcta2()->html() ;?></a>
        </div>
    </div>
</section>