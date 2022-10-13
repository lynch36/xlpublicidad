<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Anuncios Luminosos en México – Letras y Logos 3D</title>
    <!-- <link rel="shortcut icon" type="image/png" href="/img/tree.png"/> --> <!-- ICONO -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="encabezado-sitio">
        <div class="contenedor">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php 
                        if(function_exists('the_custom_logo')){
                            the_custom_logo();
                        }
                    ?>
                </a>
            </div>
            <div class="informacion-encabezado">
                <div class="redes-sociales">
                    <?php
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'nav',
                            'container_class' => 'sociales',
                            'container_id' => 'sociales',
                            'link_before' => '<span class="sr-text">',
                            'link_after' => '</span>'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
                <div class="direccion">
                    <p><?php echo esc_html(get_option('coffetree_direccion')); ?></p>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-principal">
        <div class="mobile-menu">
            <!-- <a href="#" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i>Menu</a> 
            <p>Tel: <?php echo esc_html(get_option('coffetree_telefono')); ?></p>-->
        </div>
        
        <div class="contenedor navegacion">
            <?php    
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-sitio'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </div>