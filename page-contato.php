<?php /* Template Name: Contato */ ?>
<?php
while (have_posts()) : the_post();
$banner = get_field('banner');
?>

<section id="bannerInternas" style="background: url(<?php echo $banner['url']; ?>) no-repeat center top / cover">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1>CONTATO</h1>
                </div>
            </div>
        </div>
    </article>
</section>
<div class="migalha">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                } ?>
            </div>
        </div>
    </div>
</div>
<section id="contato">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="intro">
                        <?php echo the_content(); ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <?php echo do_shortcode( '[contact-form-7 id="4" title="Contato"]' ); ?>
                </div>
                <div class="col-12">
                    <div class="sac">
                        <?php echo get_field('sac'); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<?php endwhile; ?>
