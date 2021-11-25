<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MASC
 */

?>

	<footer id="colophon" class="site-footer">
		<a id="footer-brand">
			<img class="brand" src="<?php echo( get_template_directory_uri() . '/assets/branding/logo.svg' )?>"  alt="MASC">
		</a>
		<div id="footer-links">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					)
				);
			?>
		</div>
		<div id="footer-info">
			<ul class="socials">
				<li>
					<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/youtube.svg' )?>" alt="youtube"></a>
				</li>
				<li>
					<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/facebook.svg' )?>" alt="youtube"></a>
				</li>
				<li>
					<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/twitter.svg' )?>" alt="youtube"></a>
				</li>
				<li>
					<a href=""><img src="<?php echo( get_template_directory_uri() . '/assets/utils/instagram.svg' )?>" alt="youtube"></a>
				</li>
			</ul>
			<div class="info">
				<p>info@maschospitalitygroup.com</p>
				<p>© <?php echo date("Y"); ?> by MASC Hospitality Group</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
