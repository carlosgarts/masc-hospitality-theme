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

	<main id="primary" class="site-main press-page">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="post-head">
				<?php
				print '<h1>';
				print the_title();
				print '</h1>';
				?>
				<div class="meta-info">
					<img class="date-brand" src="<?php echo( get_template_directory_uri() . '/assets/branding/logo-simple-white.svg' )?>"  alt="MASC">
					<?php masc_hospitality_theme_posted_on(); ?>
				</div>
				<?php
				print the_post_thumbnail( 'full' );
				?>
			</div>

			<div class="le-content">
				<?php
				get_template_part( 'template-parts/content-headless', get_post_type() );
				?>
				<div class="extra-info">
					<p><?php the_field('brand'); ?></p>
					<p><?php the_field('location'); ?></p>
					<p>Date: <?php the_field('event_date'); ?></p>
				</div>
			</div>

			<?php
		endwhile; // End of the loop.
		?>
        <?php require get_template_directory() . '/template-parts/contact.php'; ?>

	</main><!-- #main -->

<?php
get_footer();
