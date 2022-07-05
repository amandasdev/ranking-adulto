<!-- begin header  -->
<div class="header <?php if($page->id() == 'tokens') { echo "header_token"; } ?>">
    <div class="header__in">
        <h1 class="header__logo">
            <a href="<?php echo $site->language()->url() ?>/">
                Brickblock
                <img src="/assets/img/logo.svg" alt="Brickblock">
            </a>
        </h1>
        <div class="lang-switcher bb-select js-select">
            <div class="lang-switcher__val bb-select__val js-select-val">
                <span></span>
                <svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>
            </div>
            <ul class="lang-switcher__list bb-select__list js-select-list">
                <?php foreach($site->languages() as $language): ?>
                <li <?php e($site->language() == $language, 'class="is-selected"') ?>><a href="<?php echo $page->url($language->code()) ?>"><?php echo html($language->name()) ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <ul class="nav">
        	<?php

        	// main menu items
        	$items = $pages->visible();

        	// only show the menu if items are available
        	if($items->count()):

        	?>
        	    <?php foreach($items as $item): ?>
        	    <li><a<?php e($item->isOpen(), ' class="is-active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
        	    <?php endforeach ?>
                <li><a href="https://medium.com/brickblock-io" target="_blank">Blog</a></li>
                <!-- <li><a href="/files/Brickblock_General_Whitepaper_v102.pdf" target="_blank">Whitepaper</a></li> -->
                <li>
                <div class="whitepaper-switcher bb-select js-select js-select-whitepaper">
                    <div class="bb-select__val js-select-val">
                        <span class="">Whitepaper</span>
                        <svg class="icon icon-arrowdown"><use xlink:href="#icon-arrowdown"></use></svg>
                    </div>
                    <ul class="bb-select__list js-select-list">
                        <li class="is-selected"><a target="_blank" href="/files/Brickblock_General_Whitepaper_v102.pdf">General</a></li>
                        <li><a target="_blank" href="/files/Brickblock_Technical_Whitepaper_v098.pdf">Technical</a></li>
                    </ul>
                </div>
            </li>
        	<?php endif ?>

           <!--  <li><a class="is-active" href="/">Start</a></li>
            <li><a href="/platform.html">Platform</a></li>
            <li><a href="/tokens.html">Tokens</a></li>
            <li><a href="/timeline.html">Roadmap</a></li> -->


            <!-- <li><a href="#">Media</a></li> -->
            <!-- <li><a href="#">Whitepaper</a></li> -->
            <!-- <li><a href="#">Blog</a></li> -->
        </ul>
        <div class="header__burger js-menu"><svg class="icon icon-burger"><use xlink:href="#icon-burger"></use></svg></div>
        <div class="header__close js-menu"><svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></div>
    </div>
</div>
<!-- end header -->
