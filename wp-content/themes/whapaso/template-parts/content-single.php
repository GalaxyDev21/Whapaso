<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'container mt-3r' ); ?>>
	<div class="entry-content col-md-8 offset-md-2">
		<?php the_title( '<h1>', '</h1>' ); ?>
		<h4 class="mb-5"><?php the_subtitle(); ?></h4>
		<?php the_content() ?>
	</div>
</article>