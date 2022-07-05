
<!-- begin hero  -->
<div class="hero">
    <div class="hero__bg">
        <div class="hero__bg-in"></div>
    </div>
    <?php if($page->isHomePage()) { ?>
    <div class="hero__pic js-rellax" data-rellax-speed="-12" data-rellax-percentage="0.5"></div>{% endif %}
    <?php } ?>
    <div class="hero__in">
        <div class="hero__over">
            <div class="hero__over-right"></div>
        </div>

        <div class="hero__content <?php if($page->isHomePage()) { echo "ifstart"; } ?>">
            <h2><?php echo $page->introtitle()->html() ?></h2>
            <div class="hero__descr">
                <p><?php echo $page->introtext()->html() ?></p>
            </div>
            <div class="hero__action">
            <?php
            $buttons = $page->buttons()->yaml();

            foreach($buttons as $button): ?>
                <a <?php if ($button['target'] == 'true' ): ?>
                  target="_blank"
                <?php endif; ?> href="<?php echo $button['url']; ?>" class="button  <?php echo $button['style']; ?>"><?php echo $button['text']; ?></a>
            <?php endforeach ?>
            </div>
            <a href='#' class="video">
                <div class="video__icon">
                    <svg class="icon icon-play"><use xlink:href="#icon-play"></use></svg>
                </div>
                <div class="video__text">
                    <span>Watch</span> <strong>INTRO VIDEO</strong>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- end hero -->
