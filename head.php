<?php

require("config.php");

?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <meta name="robots" content="noindex,nofollow" />
  <meta name="googlebot" content="noindex,nofollow" />
  <meta name="googlebot-news" content="noindex,nofollow" />


  <title><?= $app['title']; ?></title>

  <meta name="robots" content="<?= $app['robots'] ?>;" />
  <meta name="keywords" content="<?= $app['keywords'] ?>;" />
  <meta name="description" content="<?= $app['description'] ?>;" />
  <link rel="canonical" href="<?= $app['canonical'] ?>;" />
  <meta name="google" content="nositelinkssearchbox" />

  <link rel="stylesheet" href="<?php echo SITE_URL ?>assets/css/theme.css" media='all'>
  <script src='<?php echo SITE_URL ?>assets/js/jquery-3.5.1.min.js'></script>
  <script src='<?php echo SITE_URL ?>assets/js/regenerator-runtime.min.js'></script>

  <link rel="icon" href="<?php echo SITE_URL ?>assets/image/favico 32x32.png" sizes="32x32" />
  <link rel="icon" href="<?php echo SITE_URL ?>assets/image/favico 192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="<?php echo SITE_URL ?>assets/image/favico 180x180.png" />
  <meta name="msapplication-TileImage" content="<?php echo SITE_URL ?>assets/image/favico 270x270.png" />
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>assets/css/head.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>assets/css/head.css" />

  <link rel="shortcut icon" href="<?php echo SITE_URL ?>assets/image/favicon.ico" type="image/x-icon">
  
</head>