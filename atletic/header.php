<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atletic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div id="page-anim-preloader">	</div>
<header id="<?php if (is_page_template('index.php')) {
    print_r('header');
} ?>">
    <div class="header">
        <div class="container-elastic">
            <div class="main_header">
                <div class="header_logo">
                    <?php the_custom_logo() ?>
                </div>
                <div class="header_title">
                    <h1> <?php echo get_bloginfo() ?></h1>
                </div>
                <ul class="social">
                    <li><a href="<?php print_r(get_theme_mod('facebook_subscription')) ?>"><img
                                    src="<?php print_r(get_theme_mod('icon_facebook_subscription')) ?>" alt=""></a>
                    </li>
                    <li><a href="<?php print_r(get_theme_mod('twiter_subscription')) ?>"><img
                                    src="<?php print_r(get_theme_mod('icon_twiter_subscription')) ?>" alt=""></a>
                    </li>
                    <li><a href="<?php print_r(get_theme_mod('email_subscription')) ?>"><img
                                    src="<?php print_r(get_theme_mod('icon_email_subscription')) ?>"
                                    alt=""></a>
                    </li>
                    <li><a href="<?php print_r(get_theme_mod('whatsap_subscription')) ?>"><img
                                    src="<?php print_r(get_theme_mod('icon_whatsap_subscription')) ?>" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="nav_block">
                <nav class="center_nav navigation_full">

                    <ul class="full_nav">
                        <?php
                        $args = array(
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        );
                        wp_nav_menu($args);
                        ?>

                    </ul>
                </nav>
                <div class="overlay">
                    <nav class="overlayMenu">
                        <?php
                        $args = array(
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                        );
                        wp_nav_menu($args);
                        ?>
                    </nav>
                </div>
            </div>
            <div class="awd">
                <div class="smol_nav navBurger" role="navigation" id="navToggle"></div>
            </div>
        </div>
    </div>
</header>

