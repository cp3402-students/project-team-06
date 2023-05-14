<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Symphonic
 */

get_header();
?>

    <main id="primary" class="site-main">

        <span class="posted-on"><?php esc_html_e('Posted on', 'your-theme'); ?><?php echo get_the_date(); ?></span>

        <span class="byline">
          <?php esc_html_e('By', 'your-theme'); ?>
          <span class="author vcard">
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
              <?php echo get_the_author(); ?>
            </a>
          </span>
        </span>

        <span class="posted-in"><?php esc_html_e( 'Posted in', 'your-theme' ); ?> <?php the_category(', '); ?></span>



        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'symphonic') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'symphonic') . '</span> <span class="nav-title">%title</span>',
                )
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
