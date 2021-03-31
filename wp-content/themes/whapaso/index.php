<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

	<?php
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
        'posts_per_page' => 1,
        'meta_key' => 'featured',
		'meta_value' => 'yes',
		'order'=>'DESC',
        'orderby'=>'ID'
    );
	$featured = new WP_Query($args);
	if ($featured->have_posts()) :
		while($featured->have_posts()) :
			$featured->the_post();
	?>
			<div class="parallax-window banner" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<span class="text-white">FEATURED</span>
							<?php the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h1>' ); ?>
							<h4 class="text-white"><?php the_subtitle(); ?></h4>
							<a href="<?php echo get_permalink() ?>" class="btn btn-lg btn-light mt-3">See Story</a>
						</div>
					</div>
				</div>
				<a class="explore-more" href="#primary"><img src="/wp-content/uploads/2018/11/explore-more.png" /></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	<?php $args = array('meta_query' => array( array( 'key' => 'featured', 'value' => 'yes', 'compare' => '!=' ) ) );
	query_posts( $args ); ?>
	<div class="blog-archive" id="primary">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-6">
						<?php get_template_part( 'template-parts/content-grid' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<?php if ( $wp_query->found_posts > 1 ) : ?>
				<div class="loadmore mt-5 text-center">Load More</div>
			<?php endif; ?>
		</div>
	</div>

<?php
get_footer();
