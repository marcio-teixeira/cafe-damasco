<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav class="menuPrincipal menuLeft d-none d-lg-block">
                    <ul>
                        <li class="nav-item <?php if (is_page('nossos-cafes')) echo 'active';?>">
                            <a class="nav-link" title="Nossos Cafés" href="<?php echo get_site_url(null, '/nossos-cafes'); ?>">NOSSOS CAFÉS</a>
                        </li>
                        <li class="nav-item <?php if (is_page('sobre-damasco')) echo 'active';?>">
                            <a class="nav-link" title="Sobre Damasco" href="<?php echo get_site_url(null, '/sobre-damasco'); ?>">SOBRE DAMASCO</a>
                        </li>
                    </ul>
                </nav>
                <a href="<?php echo get_home_url(); ?>" title="Café Seleto" class="logo">
                    <img class="img-fluid" alt="Café Seleto" title="Café Seleto" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-damasco.png">
                </a>
                <nav class="menuPrincipal menuRight d-none d-lg-block">
                    <ul>
                        <li class="nav-item <?php if (is_page('veja-nossas-receitas')) echo 'active';?>">
                            <a class="nav-link" title="Veja Nossas Receitas" href="<?php echo get_site_url(null, '/receitas'); ?>">VEJA NOSSAS RECEITAS</a>
                        </li>
                        <li class="nav-item <?php if (is_page('contato')) echo 'active';?>">
                            <a class="nav-link" title="Contato" href="<?php echo get_site_url(null, '/contato'); ?>">CONTATO</a>
                        </li>
                    </ul>
                </nav>
                <a class="btMenu d-block d-lg-none" href="#menuMobile" title="Menu"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </div>
</header>
<nav id="menuMobile">
    <?php
    if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
</nav>
