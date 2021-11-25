<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MASC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'masc-hospitality-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="site-main-brand">
			<img class="brand" src="<?php echo( get_template_directory_uri() . '/assets/branding/logo-simple-white.svg' )?>"  alt="MASC">
		</div>

		<div class="main-menu-toggle">
			<button id="menu-open">
				<!-- <img class="bars" src="<?php //echo( get_template_directory_uri() . '/assets/utils/menu-icon.svg' )?>"  alt="Menu"> -->
				<div class="bars"></div>
			</button>
		</div>

		<div id="screen-blocker" class="menu-close"></div>

		<div id="main-menu">
			<div class="menu-socials">
				<button class="quit menu-close">
					<img src="<?php echo( get_template_directory_uri() . '/assets/utils/arrow-back.svg' )?>" alt="back">
				</button>
				<ul class="socials">
					<li>
						<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/youtube.svg' )?>" alt="youtube"></a>
					</li>
					<li>
						<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/facebook.svg' )?>" alt="youtube"></a>
					</li>
					<li>
						<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/twitter.svg' )?>" alt="youtube"></a>
					</li>
					<li>
						<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/instagram.svg' )?>" alt="youtube"></a>
					</li>
				</ul>
			</div>
			<nav class="navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<div class="menu-contact">
				<p> <span>CALL US AT</span> 111 11 11</p>
				<p> <span>EMAIL US</span> INFO@MASCHOSPITALITYGROUP.COM</p>
			</div>
		</div>
	</header><!-- #masthead -->
