<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?></a> -->

	<header id="masthead" class="<?php if(is_front_page()): echo 'fixed-top'; endif; ?> site-header">
		<?php if(is_front_page()): ?>
			<span class="menu-icon">
				<div id="nav-icon1" class="open">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</span>
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg front-header">
				<img src="/wp-content/uploads/2018/11/logo_sm_wh.png" alt="" />
			</nav>
		<?php else: ?>
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg all-page-header bg-light fixed-top">
				<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?><div class="container"><?php endif; ?>
					<?php the_custom_logo(); ?>
					<div class="site-branding-text">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<h2 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h2>
						<?php endif; ?>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
						<i class="icofont-navigation-menu"></i>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'menu-1',
							'menu_id'         => 'primary-menu',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'primary-menu-wrap',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '__return_false',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 2,
							'walker'          => new WP_bootstrap_4_walker_nav_menu()
						) );
					?>
				<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?></div><!-- /.container --><?php endif; ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
