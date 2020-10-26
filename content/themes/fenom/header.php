<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Page Produit</title>
    <link rel="stylesheet" href="content/themes/fenom/public/app.c3f9f951.css ">
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
      <!-------------------------------------------------------------------------------HEADER-------------------------------------------------------------------------------------->
    <header class="header">
        <div class="info-block d-none d-lg-block d-xl-block">
        <p class="info-block-text text-center">livrason gratuite en France sur toutes vos commandes</p>
        </div>
        <div class="language-select d-none d-lg-block d-xl-block p-1 text-right">
        <ol class="list-inline">
            <li class="list-inline-item">EN</li>
            <li class="list-inline-item  active">FR</li>
        </ol>
        </div>
    
    <?php get_template_part('template-parts/nav'); ?>
    
    </header>