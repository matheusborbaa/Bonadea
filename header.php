
   <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
     <link rel="stylesheet" type="text/css" href="<?php echo _URLTHEME; ?>/assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo _URLTHEME; ?>/assets/css/slick-theme.css"/>
    

    <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
            <img class="elemento-topo"src="<?php echo _URLTHEME; ?>/assets/img/elemento-topoi.png">
    <header class="principal">
        <nav class="menu">
            <img class="logo" src="<?php echo _URLTHEME; ?>/assets/img/logo.png" alt="">
            <div class="nav-links">
            <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
            </div>
        </nav>
        <div class="progress-bar" ></div>
    </header>


    