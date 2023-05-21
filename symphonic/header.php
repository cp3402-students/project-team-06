<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symphonic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'symphonic' ); ?></a>


	<header id="masthead" class="site-header">

		<div class="top-bar-container">
			<div class="top-bar-space">
			</div>
			<div class="top-bar-site-title"><h4>TTCMA</h4>
			</div>
			<div class="social-links">
				<a href="https://www.facebook.com/TownsvilleCountryMusic"><i class="icon ion-social-facebook"></i></a>
				<a href="mailto:ttcma2018@gmail.com"><i class="fa fa fa-envelope"></i></a>
			</div>
			</div>


		<div class="site-branding">


			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1>TOWNSVILLE & THURINGOWA COUNTRY MUSIC ASSOCIATION
				</h1>
				<?php
			else :
				?>
				<h1>TOWNSVILLE & THURINGOWA COUNTRY MUSIC ASSOCIATION
				</h1>
				<?php
			endif;
			$symphonic_description = get_bloginfo( 'description', 'display' );
			if ( $symphonic_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $symphonic_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'symphonic' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
