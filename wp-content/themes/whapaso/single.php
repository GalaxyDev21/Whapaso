<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); 

$category_detail=get_the_category(get_the_ID());
foreach($category_detail as $cd){
    $cat = $cd->cat_name;
}
?>
	<div class="banner" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)">
		<a class="explore-more" href="#primary"><img src="/wp-content/uploads/2018/11/explore-more.png" /></a>
	</div>
	<div id="primary" class="content-area blog-single">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-single' );
		endwhile;
		?>
	</div>

<?php
get_footer();
