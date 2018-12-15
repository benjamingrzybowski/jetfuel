<?php  get_header(); ?>

<section class="container-fluid" id="single" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/assets/orange-burst.jpeg);">
    <div id="intro-copy">
        <h2>BGRZ Development</h2>
    </div>
</section>
<div class="container-fluid pad">
    <div class="row pad">
        <div class="col-md-8 pad">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <div class="col-md-4 pad">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    </div>
</div>

<?php  get_footer(); ?>
