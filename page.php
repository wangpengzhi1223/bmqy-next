<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage bmqy-next
 * @since bmqy next 1.1
 */

get_header(); ?>

    <div class="main-inner">
        <div class="content-wrap">
            <div id="content" class="content">
                <div id="posts" class="posts-expand">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }

                        // End of the loop.
                    endwhile;
                    ?>
                </div>
            </div>
            <?php get_sidebar( 'content-bottom' ); ?>
        </div>

    </div><!-- .content-area -->
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
