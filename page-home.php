<?php while (have_posts()) : the_post(); ?>
<?php
$bannerDesk = get_field('banner_desktop');
$bannerTablet = get_field('banner_tablet');
$bannerMobile = get_field('banner_mobile');
?>
<section id="bannerHome" style="background: url(<?php echo $bannerDesk['url']; ?>) no-repeat center top / cover">
    <a href="/hospital-pequeno-principe">
		<article>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 d-none d-sm-block d-lg-none">
						<img class="img-fluid" alt="<?php echo $bannerTablet['alt']; ?>" title="<?php echo $bannerTablet['alt']; ?>" src="<?php echo $bannerTablet['url']; ?>">
					</div>
					<div class="col-12 d-block d-sm-none">
						<img class="img-fluid" alt="<?php echo $bannerTablet['alt']; ?>" title="<?php echo $bannerTablet['alt']; ?>" src="<?php echo $bannerTablet['url']; ?>">
						<!--<img class="img-fluid" alt="<?php echo $bannerMobile['alt']; ?>" title="<?php echo $bannerMobile['alt']; ?>" src="<?php echo $bannerMobile['url']; ?>">-->
					</div>
				</div>
			</div>
		</article>
	</a>
</section>
<section id="introHome">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10">
                    <h1><?php echo get_field('titulo_intro'); ?></h1>
                    <?php echo get_field('texto_intro'); ?>
					<a class="btSaibaMais" href="/sobre-damasco/" title="Saiba Mais">SAIBA MAIS</a>
                    <!--<a class="btSaibaMais" href="<?php echo get_field('link_saiba_mais'); ?>" title="Saiba Mais">SAIBA MAIS</a>-->
                </div>
            </div>
        </div>
    </article>
</section>
<section id="sliderProdutos">
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="sliderHome">
                        <?php
                        if (get_field('slider_produtos')) :
                        $produtos = get_field('slider_produtos');
                        ?>
                        <?php foreach ($produtos as $produto) : ?>
                        <div class="item" style="background-image: url(<?php echo $produto['bg_slide']['url'];?>);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-7">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-4">
                                                <img class="img-fluid" alt="<?php echo $produto['foto_produto']['alt'];?>" title="<?php echo $produto['foto_produto']['alt'];?>" src="<?php echo $produto['foto_produto']['url'];?>">
                                            </div>
                                            <div class="col-12 col-sm-8">
                                                <h2><?php echo $produto['nome_produto'];?></h2>
                                                <?php echo $produto['descricao_produto'];?><a class="btSaibaMais" href="<?php echo $produto['link_pagina']['url'];?>" title="Saiba Mais">SAIBA MAIS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section> 

<?php endwhile; ?>
