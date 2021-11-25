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

        <div class="main-section cover">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/cover.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/about-us.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/slider.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/our-brands.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/brands-slider.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/video.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/highlights.php'; ?>
        </div>
        <div class="main-section full">
            <?php require get_template_directory() . '/template-parts/main-page-pieces/contact.php'; ?>
        </div>
        <div class="quoted-bottom">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec posuere ut quam quis finibus. Morbi ac tortor.
            </p>
        </div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
