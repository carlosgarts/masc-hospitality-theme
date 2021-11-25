<?php /* Template Name: PageSidebarless */ ?>

<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 *
 * @package MASC
 */

get_header();
?>

	<main id="primary" class="site-main page cover">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            // Include the page content template.
            get_template_part( 'template-parts/content', 'page-titless' );
            // End of the loop.
            endwhile;
        ?>

	</main><!-- #main -->

<?php
get_footer();
