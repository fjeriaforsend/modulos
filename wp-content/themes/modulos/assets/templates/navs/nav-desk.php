<style>
    <?php include get_template_directory() . '/assets/templates/navs/nav.css'; ?>
</style>


<?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php else :
                ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $comercio_description = get_bloginfo('description', 'display');
                if ($comercio_description || is_customize_preview()) :
                ?>
                    <p class="site-description"><?php echo $comercio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                    <?php endif; ?>


                    <?php if (function_exists('aws_get_search_form')) {
                    aws_get_search_form(true, array('id' => '62968e5c35f00'));
                } ?>
                <!--searchbar-->
                <?php //OPCIÓN MENU 1 SIMPLE CON BOOTSTRAP
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-superior',
                        'menu_id'        => 'navbar',
                        'menu_class'     => 'navbar-nav m-auto nav-menu d-flex justify-content-between w-100 px-3',
                        'container_class' => 'nav col-12 col-md-8',
                    )
                );
                ?>