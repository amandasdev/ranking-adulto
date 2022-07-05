<!-- begin notification  -->
<!-- <div class="section notification"> -->
    <!-- <div class="notification__bg"></div> -->
    <div class="section__in <?php if($page->isHomePage()) { echo "home__notification"; } ?>" id="notification">
        <div class="notification__in">
            <h2 class="h2"><?php echo $site->nottitle()->html() ?></h2>
            <?php echo $site->nottext()->kirbytext() ?>
            <!-- <a href="#" class="button button_megaspaced button_dark button_border">Send me an email.</a>
            <a href="#" class="button button_megaspaced button_dark button_border">Send me a SMS.</a> -->

            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="//brickblock.us15.list-manage.com/subscribe/post?u=862d8887f9f2455ef76fe19db&amp;id=855fe807cc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mail-form validate" target="_blank" novalidate>

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_862d8887f9f2455ef76fe19db_855fe807cc" tabindex="-1" value=""></div>
                <input type="email" placeholder="Your email address" name="EMAIL" class="required  mail-input" id="mce-EMAIL" style="display:inline">

                <button class="mail-button" type="submit">Subscribe</button>
              <!-- <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button_megaspaced button_dark button_border" style="background:#fff; display:inline"> -->

            </form>
            </div>
            <!--End MailChimp Signup Form -->
        </div>
    </div>
<!-- </div> -->
<!-- end notification -->
