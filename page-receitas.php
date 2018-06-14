<?php /* Template Name: Receitas */ ?>
<?php
while (have_posts()) : the_post();
$banner = get_field('banner');
?>

<section id="bannerInternas" style="background: url(<?php echo $banner['url']; ?>) no-repeat center top / cover">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1>RECEITAS</h1>
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
<section class="receitas">
    <?php 
    $drinks = get_field('drinks');
    if( $drinks ):
    ?>
    <article>
        <div class="container">
            <div class="row">
                <?php
                foreach( $drinks as $drink ):
                $a == 1;
                $a++
                ?>
                <div class="receita">
                    <img class="img-fluid" src="<?php echo $drink['foto_drink']['url']; ?>" alt="<?php echo $drink['foto_drink']['alt']; ?>" title="<?php echo $drink['foto_drink']['alt']; ?>" >
                    <h2><?php echo $drink['titulo']; ?></h2>
                    <p>
                        Rendimento: <?php echo $drink['rendimento']; ?><br>
                        Tempo de Preparo: <?php echo $drink['tempo_de_preparo']; ?>
                    </p>
                    <button type="button" class="btSaibaMais" data-toggle="modal" data-target="#receitaDrink<?php echo $a; ?>">
                        SAIBA MAIS
                    </button>
                </div>
                <?php endforeach; ?>
                <?php
                foreach( $drinks as $drink ):
                $b == 1;
                $b++
                ?>
                <div class="modal fade" id="receitaDrink<?php echo $b; ?>" tabindex="-1" role="dialog" aria-labelledby="receitaDrink<?php echo $b; ?>Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="receitaDrink<?php echo $b; ?>Title"><?php echo $drink['titulo']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo $drink['receita']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php endif; ?>
</section>

<section class="receitas">
    <?php 
    $doces = get_field('doces');
    if( $doces ):
    ?>
    <article>
        <div class="container">
            <div class="row">
                <?php
                foreach( $doces as $doce ):
                $c == 1;
                $c++
                ?>
                <div class="receita">
                    <img class="img-fluid" src="<?php echo $doce['foto_doce']['url']; ?>" alt="<?php echo $doce['foto_doce']['alt']; ?>" title="<?php echo $doce['foto_doce']['alt']; ?>" >
                    <h2><?php echo $doce['titulo']; ?></h2>
                    <p>
                        Rendimento: <?php echo $doce['rendimento']; ?><br>
                        Tempo de Preparo: <?php echo $doce['tempo_de_preparo']; ?>
                    </p>
                    <button type="button" class="btSaibaMais" data-toggle="modal" data-target="#receitaDoces<?php echo $c; ?>">
                        SAIBA MAIS
                    </button>
                </div>
                <?php endforeach; ?>
                <?php
                foreach( $doces as $doce ):
                $d == 1;
                $d++
                ?>
                <div class="modal fade" id="receitaDoces<?php echo $d; ?>" tabindex="-1" role="dialog" aria-labelledby="receitaDoces<?php echo $d; ?>Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="receitaDoces<?php echo $d; ?>Title"><?php echo $doce['titulo']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo $doce['receita']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php endif; ?>
</section>

<section class="receitas">
    <?php 
    $salgados = get_field('salgados');
    if( $salgados ):
    ?>
    <article>
        <div class="container">
            <div class="row">
                <?php
                foreach( $salgados as $salgado ):
                $e == 1;
                $e++
                ?>
                <div class="receita">
                    <img class="img-fluid" src="<?php echo $salgado['foto_salgado']['url']; ?>" alt="<?php echo $salgado['foto_salgado']['alt']; ?>" title="<?php echo $salgado['foto_salgado']['alt']; ?>" >
                    <h2><?php echo $salgado['titulo']; ?></h2>
                    <p>
                        Rendimento: <?php echo $salgado['rendimento']; ?><br>
                        Tempo de Preparo: <?php echo $salgado['tempo_de_preparo']; ?>
                    </p>
                    <button type="button" class="btSaibaMais" data-toggle="modal" data-target="#receitaSalgados<?php echo $e; ?>">
                        SAIBA MAIS
                    </button>
                </div>
                <?php endforeach; ?>
                <?php
                foreach( $salgados as $salgado ):
                $f == 1;
                $f++
                ?>
                <div class="modal fade" id="receitaSalgados<?php echo $f; ?>" tabindex="-1" role="dialog" aria-labelledby="receitaSalgados<?php echo $f; ?>Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="receitaSalgados<?php echo $f; ?>Title"><?php echo $salgado['titulo']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo $salgado['receita']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php endif; ?>
</section>

<?php endwhile; ?>
