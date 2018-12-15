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
<div id="main-content"><!-- all content wrapped and hides while wheel spins until page is ready  -->
    <nav class="container-fluid">
        <div class="navFix">
            <div id="slide-menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
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
    <div id="slide-menu">
        <h2 class="slide-menu-item">Recent Posts</h2>
        <?php
        $args = array(
            'orderby' => 'DESC',
            'posts_per_page' => 2
        );
        $recent_posts = new WP_Query( $args );
        ?>
        <?php if ( $recent_posts->have_posts() ) : ?>
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <div class="slide-menu-item">
                    <a href="<?php the_permalink() ?>"><?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        } else {
                            echo '<img src="' . get_template_directory_uri() .  '/assets/placeholder.png" alt="placeholder image">';
                        }; ?></a>
                    <div class="slide-menu-text">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <a href="<?php the_permalink(); ?>"<p><?php the_excerpt(); ?></p></a>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="slide-menu-item">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/design.png">
                <div class="slide-menu-text">
                    <h4>Title</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                </div>
            </div>
        <?php endif; ?>
    </div>