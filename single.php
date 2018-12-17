<?php  get_header(); ?>

<section class="container-fluid" id="single" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/assets/trees.jpg")">
<div id="intro-copy">
    <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/sig.png" alt="signature">
    <h2>Expressive Unique Artwork</h2>
</div>
</section>
<div class="container" id="content">
    <div class="row pad">
        <div class="col-md-12">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div>

<?php  get_footer(); ?>
