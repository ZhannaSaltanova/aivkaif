<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alkalf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alkalf' ); ?></a> -->

	<!-- <header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$alkalf_description = get_bloginfo( 'description', 'display' );
			if ( $alkalf_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $alkalf_description; ?></p>
			<?php endif; ?>
		</div> -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'alkalf' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> -->

		<header class="header">

        <div class="container">
            <div class="header__inner">
                <div class="header__logo"><a href="#" class="logo">ai<span>v</span>kalf</a></div>
                <div class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <nav class="menu" id="menu">
                    <button class="menu__close" id="close">&times;</button>

                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="/" class="menu__link">Головна</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link" id="why">Для кого</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link" id="programa">Програма</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link" id="feedback-header">Відгуки</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__discount">
                    <div class="header__discount-text">Знижка на курс</div>
                    <div class="header__discount-circle">
                        <img src="./images/discount-img.png" alt="">
                        <div class="circle-text">85<span>%</span></div>
                        <img src="./images/discount-img2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

