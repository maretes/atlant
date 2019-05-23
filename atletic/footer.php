<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atletic
 */

?>

<footer>
    <div class="container-elastic">
        <div class="footer_block">
            <div class="footer_block_logo">
                <?php the_custom_logo() ?>
            </div>
            <div class="footer_block_text header_title">
                <h1> <?php echo get_bloginfo() ?></h1>
                <p><?php print_r(get_theme_mod('maps_subscription')) ?></p>
                <div class="footer_block_text_phone">
                    <img src="<?php echo get_template_directory_uri() ?>/img/tel.png">
                    <a href="tel:<?php print_r(get_theme_mod('tel_subscription')) ?>">
                        <p><?php print_r(get_theme_mod('tel_subscription')) ?></p>
                    </a>
                </div>
            </div>
            <div class="footer_block_contacts">
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
               <div> <a class="values_bt_more values_bt" href="http://dev-vty.pantheonsite.io/контакти">
                       Зворотній звязок
                   </a>

               </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
