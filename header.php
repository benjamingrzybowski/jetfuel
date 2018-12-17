<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ben grzybowski">
    <meta name="google-site-verification" content=""/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="container-fluid" id="navigation">
        <div class="navFix">
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav-right">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'   => 'menu'
                        ) );?>
                    </ul></div>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-12">
                <ul id="mobile-menu">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'   => 'menu'
                    ) );?>
                </ul>
            </div>
        </div>
    </nav>