<img src="<?php echo thumb($page->file($values->image), array("width" => 600))->url(); ?>">
<h2><?php echo $values->title; ?></h2>
<i><?php echo $values->body; ?></i>
<p>Categories: <strong><?php echo $values->categories; ?></strong></p>
<p>CTA: <strong><?php echo $values->ctalabel; ?></strong> => <?php echo $values->ctaurl; ?></p>
