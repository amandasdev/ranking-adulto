<!-- begin section  -->
<div class="section faq" id="faq">
    <div class="section__in">
        <h2 class="h2"><?php echo $page->faqtitle()->html() ?></h2>

        <?php
        $faqs = $page->faqs()->yaml();

        foreach($faqs as $f): ?>
            <!-- begin q  -->
            <div class="q">
                <div class="q__title">
                    <h3><?php echo $f['q'];?></h3>
                    <svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>
                </div>
                <div class="q__answer">
                    <p><?php echo $f['a'];?></p>
                </div>
            </div>
            <!-- end q -->
        <?php endforeach ?>

    </div>
</div>
<!-- end section -->