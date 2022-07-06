<?php
define('SITE_URL', 'http://localhost/ranking-adulto/');
/*//////////////////////////////////////


/////////////////////////////// */

$app['product_review1'] = 'https://www.phenaless.com.br';
$app['product_review2'] = 'https://www.ketoday.com.br';
$app['product_review3'] = 'https://www.synetrim.com.br';
$app['product_review4'] = 'https://www.synetrim.com.br';
$app['product_review5'] = 'https://www.synetrim.com.br';


/*//////////////////////////////////////
////////////  APP SEO
/////////////////////////////// */
if (isset($app['page_name'])) :
switch ($app['page_name']) {
        /* home */
    case 'home':
        $app['title'] = "2022's Top Male Enhancement Supplements for Powerful Sexual Performance";
        $app['description'] = '';
        $app['keywords'] = '';
        $app['robots'] = 'noodp';
        $app['canonical'] = SITE_URL;
        break;
    case 'termo-de-uso':
        $app['title'] = "2022's Top Male Enhancement Supplements for Powerful Sexual Performance";
        $app['description'] = '';
        $app['keywords'] = '';
        $app['robots'] = 'noodp';
        $app['canonical'] = SITE_URL;
        break;
}
endif;
