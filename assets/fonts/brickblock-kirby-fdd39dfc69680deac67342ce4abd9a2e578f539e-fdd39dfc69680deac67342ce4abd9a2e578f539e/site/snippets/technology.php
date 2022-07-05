<!-- begin section  -->
<div class="section section_wide" id="technology">
    <div class="section__in">
        <h2 class="h2"><?php echo $page->techtitle()->html() ?></h2>
        <div class="section__text">
            <?php echo $page->techtext()->kirbytext() ?>
            <figure>
                <img src="<?php 
                    $img = $page->images()->find($page->techimage());
                    echo $img->url(); 
                ?>">
            </figure>


        </div>

    </div>
</div>
<!-- end section -->