<footer>
    <div class="footerContent">
        <div class="bgFooter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7">
                        <nav class="menuFooter">
                            <?php
                            if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                            endif;
                            ?>
                        </nav>
                        
                        <nav class="menuSuporte">
                            <?php
                            if (has_nav_menu('legal-menu')) :
                            wp_nav_menu(['theme_location' => 'legal-menu', 'menu_class' => 'nav']);
                            endif;
                            ?>
                        </nav>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5">
                        <a class="linkReceitasFooter" href="<?php echo get_site_url(null, '/receitas'); ?>" title="Veja nossas receitas">
                            <img class="img-fluid" alt="Veja nossas receitas" title="Veja nossas receitas" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-footer-receitas.jpg">
                            <span>VEJA NOSSAS RECEITAS <i class="fas fa-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="assinatura">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-9 col-md-10">
                    <img class="logoFooter" alt="Café Damasco" title="Café Damasco" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-damasco.png" width="125">
                    <span>Copyright © <?php echo the_time(Y); ?>  Jacobs Douwe Egberts</span>
                </div>
                <div class="col-12 col-sm-3 col-md-2">
                    <a class="logoRS" target="_blank" title="RS DEZOITO" href="http://www.rsdezoito.com.br/" rel="nofollow"><img alt="RS DEZIOTO" title="RS DEZIOTO" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-rs.png"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

