
        <footer>
        <?php 
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="separador"> | </span>'
            );
            wp_nav_menu($args);
        ?>
            <div class="ubicacion">
                <!-- <p><?php echo esc_html(get_option('coffetree_direccion')); ?></p>
                <p>Tel: <?php echo esc_html(get_option('coffetree_telefono')); ?></p> -->
            </div>
            <p class="copyright">Copyright © <?php echo date('Y') ?> Anuncios Luminosos en México</p>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>