<section id="cta" class="grey-section">
    <div class="row cta-content">
        <div class="col-twelve section-ads">
            <h2 class="h01"><a href="<?php echo $page->ctalink() ?>"><?php echo $page->ctatitle()->html() ?></h2>
            <p class="lead"><?php echo $page->ctabody()->kirbytextRaw() ?></p>
            <div class="action">
                <a href="<?php echo $page->ctalink() ?>" class="button"><?php echo $page->ctalabel()->html() ?></a>
            </div>
        </div>
    </div>
    <!-- /cta-content -->
</section>
