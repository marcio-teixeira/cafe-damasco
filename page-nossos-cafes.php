<?php
while (have_posts()) : the_post();
$banner = get_field('banner');
?>

<section id="bannerInternas" style="background: url(<?php echo $banner['url']; ?>) no-repeat center top / cover">
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
<section id="listaCafe">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="tituloLinha">LINHA REGULAR</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-classico'); ?>" title="Damasco Clássico">
                        <img alt="Damasco Clássico" title="Damasco Clássico" src="<?php echo get_template_directory_uri(); ?>/dist/images/classico-thumb.jpg">
                        <h3>DAMASCO CLÁSSICO</h3><br>
                        <span class="btSaibaMais">SAIBA MAIS</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-intenso'); ?>" title="Damasco Intenso">
                        <img alt="Damasco Intenso" title="Damasco Intenso" src="<?php echo get_template_directory_uri(); ?>/dist/images/intenso-thumb.jpg">
                        <h3>DAMASCO INTENSO</h3><br>
                        <span class="btSaibaMais">SAIBA MAIS</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-extraforte'); ?>" title="Damasco Extraforte">
                        <img alt="Damasco Extraforte" title="Damasco Extraforte" src="<?php echo get_template_directory_uri(); ?>/dist/images/extraforte-thumb.jpg">
                        <h3>DAMASCO EXTRAFORTE</h3><br>
                        <span class="btSaibaMais">SAIBA MAIS</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separaLinha"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="tituloLinha">LINHA SOLÚVEL</h2>
                    <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-soluvel'); ?>" title="Damasco Solúvel">
                        <img alt="Damasco Solúvel" title="Damasco Solúvel" src="<?php echo get_template_directory_uri(); ?>/dist/images/soluvel-thumb.jpg">
                        <h3>DAMASCO SOLÚVEL</h3><br>
                        <span class="btSaibaMais">SAIBA MAIS</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <h2 class="tituloLinha">LINHA ESPRESSO</h2>
                    <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-espresso'); ?>" title="Damasco Espresso">
                        <img alt="Damasco Espresso" title="Damasco Espresso" src="<?php echo get_template_directory_uri(); ?>/dist/images/espresso-thumb.jpg">
                        <h3>DAMASCO ESPRESSO</h3><br>
                        <span class="btSaibaMais">SAIBA MAIS</span>
                    </a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php endwhile; ?>
