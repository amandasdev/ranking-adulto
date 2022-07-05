<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('cache', false);

/* Debug
/*--------------------------*/
c::set('debug', false);


/* Home
/*--------------------------*/
c::set('home', 'home');


/* Panel CSS
/*--------------------------*/
c::set('panel.stylesheet', 'assets/css/custom-panel.css');



c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'zh',
    'name'    => '中文',
    'locale'  => 'zh_CN',
    'url'     => '/zh',
  ),
  array(
    'code'    => 'jp',
    'name'    => '日本語',
    'locale'  => 'jp_JP',
    'url'     => '/jp',
  ),
  array(
    'code'    => 'es',
    'name'    => 'Español',
    'locale'  => 'es_ES',
    'url'     => '/es',
  ),
  array(
    'code'    => 'tr',
    'name'    => 'Türkçe',
    'locale'  => 'tr_TR',
    'url'     => '/tr',
  ),
  array(
    'code'    => 'ar',
    'name'    => 'العربية',
    'locale'  => 'ar_AR',
    'url'     => '/ar',
  ),
  array(
    'code'    => 'it',
    'name'    => 'Italiano',
    'locale'  => 'it_IT',
    'url'     => '/it',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'Français',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  ),
  array(
    'code'    => 'id',
    'name'    => 'Indonesia',
    'locale'  => 'id_ID',
    'url'     => '/id',
  )
));

c::set('language.detect', true);
