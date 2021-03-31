<?php
/**
 * The template for displaying all single vacancies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

    <div class="content-area vacancy-single">
		<?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'container mt-3r' ); ?>>
                <div class="entry-content col-md-8 offset-md-2">
                    <?php the_title("<h1>", "</h1>") ?>
                    Location: <?php the_field("location") ?>
                    <br />
                    <?php the_field("brief") ?>
                    <?php if(get_field("about_the_role")): ?>
                        <div class="mt-5">
                            <h5>About the role</h5>
                            <hr />
                            <?php the_field("about_the_role") ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field("qualifications")): ?>
                        <div class="mt-5">
                            <h5>Qualifications</h5>
                            <hr />
                            <?php the_field("qualifications") ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field("responsibilities")): ?>
                        <div class="mt-5">
                            <h5>Responsibilities</h5>
                            <hr />
                            <?php the_field("responsibilities") ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field("about_whapaso")): ?>
                        <div class="mt-5">
                            <h5>About Whapaso</h5>
                            <hr />
                            <?php the_field("about_whapaso") ?>
                        </div>
                    <?php endif; ?>
                    <div class="mt-5">
                        <a class="btn btn-warning btn-apply-now" data-toggle="collapse" href="#contactForm" role="button" aria-expanded="false" aria-controls="contactForm">APPLY NOW</a>
                        <div class="collapse mt-3" id="contactForm">
                            <div class="card card-body">
                                <?php echo do_shortcode('[contact-form-7 id="104" title="Vacancy form"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
	</div>

<?php
get_footer();