<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<header class="entry-header page-header mt-7">
	<?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
</header><!-- .entry-header -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile;
					?>
				</main>
			</div>
		</div>
	</div>
<?php
get_footer();
