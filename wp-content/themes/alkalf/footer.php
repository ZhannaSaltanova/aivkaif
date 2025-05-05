<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alkalf
 */

?>

<?php
$the_first_menu_item = get_field( 'the_first_menu_item', 'option');
$the_second_menu_item = get_field('the_second_menu_item', 'option');
$the_third_menu_item = get_field('the_third_menu_item', 'option');
$the_fourth_menu_item = get_field('the_fourth_menu_item', 'option');
$own_site = get_field('own_site', 'option');
$own_phone = get_field('own_phone', 'option');
$own_email = get_field('own_email', 'option');







$footer_socials = [
    'telegram' => [
        'link' => get_field('footer_social_link_telegram', 'option'),
        'img'  => get_field('footer_social_img_telegram', 'option'),
    ],
    'instagram' => [
        'link' => get_field('footer_social_link_instagram', 'option'),
        'img'  => get_field('footer_social_img_instagram', 'option'),
    ],
   
];
?>

<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            ai<span>v</span>kalf
                        <?php
                        }
                        ?>
                    </a>
                </div>
                <nav class="menu">
                <ul class="menu__list">
                        <li class="menu__item">
                        <?php if($the_first_menu_item): ?>
                            <a href="<?php echo home_url(); ?>" class="menu__link"><?php echo esc_html($the_first_menu_item); ?></a>
                        <?php endif; ?>
                        </li>
                        <li class="menu__item">
                        <?php if($the_second_menu_item): ?>
                            <a href="#about" class="menu__link"><?php echo esc_html($the_second_menu_item); ?></a>
                        <?php endif; ?>
                        </li>
                        <li class="menu__item">
                        <?php if($the_third_menu_item): ?>
                            <a href="#program" class="menu__link"><?php echo esc_html($the_third_menu_item); ?></a>
                        <?php endif; ?>
                        </li>
                        <li class="#feedback">
                        <?php if($the_fourth_menu_item): ?>
                            <a href="/" class="menu__link"><?php echo esc_html($the_fourth_menu_item); ?></a>
                        <?php endif; ?>
                        </li>
                    </ul>
                </nav>
                    <div class="footer__politic">
                    <a href="/privacy-legacy"> Політика конфіденційності</a>
                </div>
                <div class="footer__contact">
                    <ul class="contact-list">
                    <?php if($own_site): ?>
                        <li class="own">
                            <?php echo esc_html($own_site); ?>
                        </li>
                        <?php endif; ?>
                        <li class="contacts">
                        <?php if ($own_phone): ?>
                        <?php 
                            $phone_clean = preg_replace('/[^\d\+]/', '', $own_phone); 
                        ?>
                        <a href="tel:<?php echo esc_attr($phone_clean); ?>">
                            <?php echo esc_html($own_phone); ?>
                        </a>
                        <?php endif; ?>
                            <?php if($own_email): ?>
                            <a href="mailto:<?php echo esc_attr($own_email); ?>">
                            <?php echo esc_html($own_email); ?>
                            </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <ul class="social-list">
                <?php foreach ($footer_socials as $name => $social): ?>
                    <?php if (!empty($social['link']) && !empty($social['img']['url'])): ?>
                        <li class="social-item">
                            <a href="<?php echo esc_url($social['link']); ?>" class="social-link" target="_blank">
                                <img src="<?php echo esc_url($social['img']['url']); ?>" alt="<?php echo esc_attr($name); ?>">
                            </a>
                        </li>    
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
