<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MASC
 */

get_header();
?>

	<main id="primary" class="site-main press-page experience-page">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="post-head">
				<h2 class="broken-title top"> <?php print the_field('title_1'); ?> </h2>
                <h2 class="broken-title bottom"> <?php print the_field('title_2'); ?> </h2>
				<?php
				print the_post_thumbnail( 'full' );
				?>
			</div>
			<div class="le-experience-content">
				<?php
				get_template_part( 'template-parts/content-headless', get_post_type() );
				?>
				<div class="demographic-data">
					<h3 class="dem-title">DEMOGRAPHIC</h3>
					<?php require get_template_directory() . '/template-parts/main-page-pieces/demographic-exp.php'; ?>
				</div>
				<div class="features-data">
					<img src="<?php print the_field('picture_1') ?>" alt="">
					<?php require get_template_directory() . '/template-parts/main-page-pieces/features-exp.php'; ?>
					<img src="<?php print the_field('picture_2') ?>" alt="">
					<img src="<?php print the_field('picture_3') ?>" alt="">
				</div>
				
			</div>

			<?php
		endwhile; // End of the loop.
		?>
        <?php require get_template_directory() . '/template-parts/contact.php'; ?>

	</main><!-- #main -->

<?php
get_footer();
