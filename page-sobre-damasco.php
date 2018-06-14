<?php /* Template Name: Sobre Damasco */ ?>
<?php
while (have_posts()) : the_post();
$banner = get_field('banner');
?>

<section id="bannerInternas" style="background: url(<?php echo $banner['url']; ?>) no-repeat center top / cover">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1>ESSE É DE CASA</h1>
                    <p>O CAFÉ DO DIA A DIA, COM GOSTINHO DE FAMÍLIA E UM AROMA INCONFUNDÍVEL, DA NOSSA CASA, NOSSA TERRA, NOSSA GENTE.</p>
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
<section id="sobre">
    <?php 
    $textos = get_field('textos');
    if( $textos ):
    foreach( $textos as $texto ):
    ?>
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 colImg">
                    <img class="img-fluid" src="<?php echo $texto['imagem']['url']; ?>" alt="<?php echo $texto['imagem']['alt']; ?>" title="<?php echo $texto['imagem']['alt']; ?>" >
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-7 colText">
                    <h2><?php echo $texto['titulo']; ?></h2>
                    <?php echo $texto['texto']; ?>
                </div>
            </div>
        </div>
    </article>
    <?php
    endforeach;
    endif;
    ?>
</section>

<?php endwhile; ?>
