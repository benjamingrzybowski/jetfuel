<?php get_header(); ?>

<section class="container-fluid" id="intro">
    <div class="row">
            <video autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/placeholder-vid.mp4"></video>
            <div id="intro-copy">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/sig.png" alt="signature">
                <h2>Expressive Unique Artwork</h2>
            </div>
    </div>
</section>
<div class="container" id="content">
    <div class="row pad">
        <div class="col-md-12">
            <h1 style="text-align: center;">Jetfuel Ecommerce Theme</h1>
        </div>
    </div>
    <div class="row pad">
        <?php
        // query the products
        $args = array( 'post_type' => 'product');
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row pad">
                <div class="col-md-7 pad">
                    <h3><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="col-md-5 pad" id="art">
                    <a href="<?php the_permalink() ?>"><?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . get_template_directory_uri() .  '/assets/placeholder.png" alt="placeholder image">';
                        }; ?></a>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); // Remember to reset ?>
        </div>
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'snazzy' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
