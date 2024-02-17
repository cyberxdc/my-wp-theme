<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package YourThemeName
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', 'single');

                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'your-theme-text-domain') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'your-theme-text-domain') . '</span> <span class="nav-title">%title</span>',
                    ));

                endwhile; // End of the loop.
                ?>
            </div><!-- .col -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
