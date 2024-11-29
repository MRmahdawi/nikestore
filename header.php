<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- font awesome cdn link  -->
    <!-- custom css file link  -->
<?php wp_head(); ?>

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="<?php bloginfo('template_url'); ?>" class="logo"></a>

    <nav class="navbar">
    <?php

if (has_nav_menu('top_menu')) {
    wp_nav_menu(array(
        'theme_location' => 'top_menu',
        'menu_class' => 'nav navbar-nav ',
        'container' => false
    ));
}


?>
    </nav>

    <div class="icons">
        
    </div>

</header>