<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */


$category_detail=get_the_category(get_the_ID());
foreach($category_detail as $cd){
    $cat = $cd->cat_name;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'container mt-3r' ); ?>>
    <a class="overlay" href="<?php echo get_permalink() ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)"></a>
    <span class="post-cat"><?php echo $cat ?></span>
    <?php the_title( '<h3 class="pt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h3>' ); ?>
    <!-- <p><?php echo get_the_author_meta('user_nicename') ?> | <?php echo get_the_time('F j, Y') ?> </p> -->
    <p><?php echo get_the_time('F Y') ?> </p>
</article>