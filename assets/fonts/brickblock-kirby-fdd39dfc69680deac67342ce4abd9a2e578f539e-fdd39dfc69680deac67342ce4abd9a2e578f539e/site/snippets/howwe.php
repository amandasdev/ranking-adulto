<!-- begin howwe  -->
<div class="section howwe">
    <div class="section__in" id="advantages">
        <h2 class="h2"><?php echo $page->protitle()->html() ?></h2>
        <div class="howwe__wrap">


            <!-- begin howe__list  -->
            <div class="howwe__list">
                <?php
                $ps = $page->prolist()->yaml();
                $i = 0;

                foreach($ps as $p): ?>
                <?php
                $i++;

                ?>
                <!-- begin how  -->
                <div class="how">
                    <div class="how__icon">
                        <svg class="icon icon-check"><use xlink:href="#icon-check"></use></svg>
                    </div>
                    <h3 class="how__title"><?php echo $p['title']; ?></h3>
                    <p><?php echo $p['text']; ?> </p>
                </div>
                <!-- end how -->
               <?php if($i==3) {?>
            </div>
            <!-- end howe__list -->
            <div class="howwe__pic">
                <img src="<?php 
					$img = $page->images()->find($page->whyimage());
					echo $img->url(); 
				?>">
            </div>
            <!-- begin howwe__three  -->
        </div>
        <div class="howwe__three">
        <?php } ?>
            
        

        <?php endforeach ?>
        </div>
        <!-- end howwe__three -->

    </div>
</div>
<!-- end howwe -->