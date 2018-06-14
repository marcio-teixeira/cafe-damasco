<?php while (have_posts()) : the_post(); ?>
  <section id="bannerInternas" style="background: url(<?php echo $bannerDesk['url']; ?>) no-repeat center top / cover">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><?php echo the_title(); ?></h1>
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
<?php echo the_content(); ?>
<?php endwhile; ?>
