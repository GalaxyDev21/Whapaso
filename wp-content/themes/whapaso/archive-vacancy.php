<?php
/**
 * The template for displaying all vacancies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

    <div class="parallax-window banner" data-parallax="scroll" data-image-src="/wp-content/uploads/2018/11/come-join-us.jpg">
		<a class="explore-more" href="#primary"><img src="/wp-content/uploads/2018/11/explore-more.png" /></a>
	</div>
    <div class="container mt-3r vacancy-archive-brief">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="brief wow fadeIn" data-wow-duration="2s">We are looking for creative and passionate individuals to join our team. Here at Whapaso we strive to make a difference through technology, ideas and perseverance. We act different, we think different, we are different and we own it.</p>
            </div>
        </div>
    </div>
    <div class="vacancy-archive" id="primary">
        <div class="container">
            <div class="row openings">
                <div class="col-md-8 offset-md-2">
                    <h5>Current openings</h5>
                    <hr />
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="singles">
                            <span><?php the_title() ?></span>
                            <span><a href="<?php echo get_permalink() ?>">Apply Now</a></span>
                        </div>
                    <?php
                        endwhile;
                        the_posts_navigation( array(
                            'next_text' => esc_html__( 'Newer Posts', 'wp-bootstrap-4' ),
                            'prev_text' => esc_html__( 'Older Posts', 'wp-bootstrap-4' ),
                        ) );
                    ?>
                    <div class="mt-5">
                        <h5>Email Us for Future Consideration</h5>
                        <hr />
                        <a href="mailto:careers@whapaso.com">careers@whapaso.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();