<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BRVO Modding
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title> Modding Paula </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php if (get_header_image()):?>
            <div id="site-header">
                <img class="img-responsive" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

        <div id="page" class="site">
            <header>
                <section class="top-bar">
                    <div class="row">
                        <nav class="navbar fixed-top bg-transparent my-4">
                            <div class="container">
                                <!-- LOGO -->
                                    <span class="navbar-brand text-start">
                                        <a href="<?php echo home_url( '/' ) ?>"> 
                                            <?php if(has_custom_logo( )): ?>
                                                <?php the_custom_logo(  ); ?> 
                                            <?php else: ?>
                                                <p> LOGO </p>
                                            <?php endif; ?>
                                        </a>
                                    </span>
                                <div class="d-flex pt-3">
                                    <div class="cart pt-1">
                                        <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i></a>
                                        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                    </div>
                                    <!-- MENÚ BUTTON -->
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="fas fa-bars fa-sm"></i></span>
                                    </button>
                                </div>
                                    <!-- MENÚ -->
                                    <?php
                                    $args = array(
                                        'theme_location' => 'brvo_modding_main_menu',
                                        'container_id' => 'navbarTop',
                                        'container_class' => 'collapse navbar-collapse',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                wp_nav_menu($args);
                                ?>
                            </div>
                        </nav>
                    </div>
                </section>
            </header>
        </div>
    <?php endif; ?>