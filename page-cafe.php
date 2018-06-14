<?php /* Template Name: Produto */ ?>
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
<section id="produto">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                    <div class="fotosProd">
                        <?php 
                        $fotos = get_field('fotos_do_produto');
                        if( $fotos ):
                        foreach( $fotos as $foto ):
                        ?>
                        <div class="item">
                            <img class="img-fluid" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>" title="<?php echo $foto['alt']; ?>" >
                        </div>
                        <?php
                        endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-7 col-md-6 col-lg-4 textoProd">
                    <h2><?php echo the_title(); ?></h2>
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="outrosProdutos">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="sliderProd">
                        <div class="item">
                            <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-classico'); ?>" title="Damasco Clássico">
                                <img alt="Damasco Clássico" title="Damasco Clássico" src="<?php echo get_template_directory_uri(); ?>/dist/images/classico-thumb.jpg">
                                <h3>DAMASCO CLÁSSICO</h3>
                                <span class="btSaibaMais">SAIBA MAIS</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-intenso'); ?>" title="Damasco Intenso">
                                <img alt="Damasco Intenso" title="Damasco Intenso" src="<?php echo get_template_directory_uri(); ?>/dist/images/intenso-thumb.jpg">
                                <h3>DAMASCO INTENSO</h3>
                                <span class="btSaibaMais">SAIBA MAIS</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-extraforte'); ?>" title="Damasco Extraforte">
                                <img alt="Damasco Extraforte" title="Damasco Extraforte" src="<?php echo get_template_directory_uri(); ?>/dist/images/extraforte-thumb.jpg">
                                <h3>DAMASCO EXTRAFORTE</h3>
                                <span class="btSaibaMais">SAIBA MAIS</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-soluvel'); ?>" title="Damasco Solúvel">
                                <img alt="Damasco Solúvel" title="Damasco Solúvel" src="<?php echo get_template_directory_uri(); ?>/dist/images/soluvel-thumb.jpg">
                                <h3>DAMASCO SOLÚVEL</h3>
                                <span class="btSaibaMais">SAIBA MAIS</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_site_url(null, '/nossos-cafes/damasco-espresso'); ?>" title="Damasco Espresso">
                                <img alt="Damasco Espresso" title="Damasco Espresso" src="<?php echo get_template_directory_uri(); ?>/dist/images/espresso-thumb.jpg">
                                <h3>DAMASCO ESPRESSO</h3>
                                <span class="btSaibaMais">SAIBA MAIS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<?php endwhile; ?>
