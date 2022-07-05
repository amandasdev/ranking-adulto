    <section id="contact">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5><?php echo $page->navcontact()->html();?></h5>
                <h1><?php echo $page->contacttitle()->html();?></h1>
                <p class="lead"><?php echo $page->contactbody()->kirbytextRaw();?></p>
            </div>
        </div>
        <!-- /section-intro -->
        <div class="row contact-form">
            <div class="col-twelve">
                <!-- form -->
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
                        <input type="hidden" name="user_email" value="<?php echo $page->youremail();?>">
                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="<?php echo $page->formname()->html();?>" value="" minlength="2" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="<?php echo $page->formemail()->html();?>" value="" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="<?php echo $page->formsubject()->html();?>" value="">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="<?php echo $page->formmessage()->html();?>" rows="10" cols="50" required=""></textarea>
                        </div>
                        <div class="form-field">
                            <button class="submitform"><?php echo $page->formsubmit()->html();?></button>
                            <div id="submit-loader">
                                <div class="text-loader"><?php echo $page->formsending()->html();?></div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <!-- Form End -->
                <!-- contact-warning -->
                <div id="message-warning">
                </div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i><?php echo $page->formsuccess()->html();?>
                    <br>
                </div>
            </div>
            <!-- /col-twelve -->
        </div>
        <!-- /contact-form -->
        <div class="row contact-info">
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-<?php echo $page->addressicon() ?>"></i>
                </div>
                <h5><?php echo $page->addresslabel()->html() ?></h5>
				<?php echo $page->addressbody()->kt() ?>
            </div>
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-<?php echo $page->emailicon() ?>"></i>
                </div>
                <h5><?php echo $page->emaillabel()->html() ?></h5>
				<?php echo $page->emailbody()->kt() ?>
            </div>
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-<?php echo $page->telicon() ?>"></i>
                </div>
                <h5><?php echo $page->tellabel()->html() ?></h5>
				<?php echo $page->telbody()->kt() ?>
            </div>
        </div>
        <!-- /contact-info -->
    </section>