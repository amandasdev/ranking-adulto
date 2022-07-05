<?php //snippet('socialicons'); ?>

<!-- begin footer  -->
<div class="footer">
    <div class="footer__in">
        <div class="footer__logo">
            <img src="/assets/img/logo.svg" alt="">
        </div>
        <!-- begin footer__cols  -->
        <div class="footer__cols">
            <!-- begin footer__col  -->
            <!-- <div class="footer__col"> -->
                <!-- <h3>Brickblock</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Some</a></li>
                    <li><a href="#">Thing</a></li>
                    <li><a href="#">Something</a></li>
                </ul> -->
            <!-- </div> -->
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <!-- <div class="footer__col"> -->
                <!-- <h3>Support</h3>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="/tokens.html#!faq">FAQ</a></li>
                    <li><a href="#">Chat</a></li>
                </ul> -->
            <!-- </div> -->
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <div class="footer__col">
                <h3>Support</h3>
                <ul>
                    <li><a href="https://t.me/brickblock" target="_blank">Chat</a></li>
                    <!-- <li><a href="/tokens#!faq">FAQ</a></li> -->
                </ul>
            </div>
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <div class="footer__col">
                <h3>Information</h3>
                <ul>
                    <li><a href="<?php if($page->id() == 'tokens'): ?>#notification<?php else: ?>/tokens#!notification<?php endif ?>">Newsletter</a></li>
                    <li><a href="https://medium.com/brickblock-io/brickblock-token-sale-812575df1e24" target="_blank">Token Sale</a></li>
                    <li><a href="<?php if($page->id() == 'tokens'): ?>#faq<?php else: ?>/tokens#!faq<?php endif ?>">Token FAQ</a></li>
                    <li><a href="https://medium.com/brickblock-io/want-to-learn-more-about-brickblock-heres-where-you-ll-find-us-95dcf6b76e84" target="_blank">Events</a></li>
                    <li><a href="https://medium.com/brickblock-io/official-brickblock-bounty-campaign-2846a6f1fb44" target="_blank">Bounties</a></li>
                </ul>
            </div>
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <div class="footer__col">
                <h3>BitcoinTalk</h3>
                <ul>
                    <li><a href="https://bitcointalk.org/index.php?topic=1966929" target="_blank">Announcement</a></li>
                    <li><a href="https://bitcointalk.org/index.php?topic=2013175" target="_blank">Bounty Campaign</a></li>
                </ul>
            </div>
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <div class="footer__col">
                <h3>Quick links</h3>
                <ul>
                    <li><a href="/files/Brickblock_General_Whitepaper_v102.pdf" target="_blank">Whitepaper</a></li>
                    <li><a href="<?php if($page->isHomePage()) { ?>#team <?php } else{ ?>/#!team<?php } ?>">Team</a></li>
                    <li><a href="/platform">Platform</a></li>
                    <li><a href="<?php if($page->template()== "platform") { ?>#technology<?php } else{ ?>/platform#!technology<?php } ?>">Technology</a></li>
                    <li><a href="/roadmap">Timeline</a></li>
                    <li><a href="/tokens">Countdown</a></li>
                </ul>
            </div>
            <!-- end footer__col -->
            <!-- begin footer__col  -->
            <div class="footer__col footer__col_short">
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
            </div>
            <!-- end footer__col -->
        </div>
        <!-- end footer__cols -->

        <div class="footer__copy"><?php echo $site->copyright()->html() ?></div>
    </div>
</div>
<!-- end footer -->
