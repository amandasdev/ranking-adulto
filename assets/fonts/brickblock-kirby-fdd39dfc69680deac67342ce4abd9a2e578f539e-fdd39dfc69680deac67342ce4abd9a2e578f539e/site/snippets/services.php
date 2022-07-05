<section id="services" data-bg="<?php echo $page->image($page->servicesbackground())->url() ?>">
    <div class="overlay"></div>
    <div class="row section-intro">
        <div class="col-twelve">
            <h5><?php echo $page->navservices()->html() ?></h5>
            <h1><?php echo $page->servicestitle()->html() ?></h1>
            <p class="lead"><?php echo $page->servicesbody()->kirbytextRaw() ?></p>
        </div>
    </div>
    <?php $services = array_slice($page->services()->yaml(), 0); ?>
    
    <div class="row services-content">
        <div id="owl-slider" class="owl-carousel services-list">
            <?php foreach ($services as $service): ?>
            <div class="service">
                <span class="icon"><i class="icon-<?php echo html($service['icon']);?>"></i></span>
                <div class="service-content">
                    <h3><?php echo html($service['title']);?></h3>
                    <p class="desc"><?php echo kirbytextRaw($service['body']);?>
                    </p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>