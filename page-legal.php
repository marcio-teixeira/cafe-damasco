<?php /* Template Name: Termos Legais */ ?>
<?php
while (have_posts()) : the_post();
$banner = get_field('banner');
?>

<section id="bannerInternas" style="background: url(<?php echo $banner['url']; ?>) no-repeat center top / cover">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
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
<section id="legal">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
    <?php
    ?>
</section>

<?php endwhile; ?>
