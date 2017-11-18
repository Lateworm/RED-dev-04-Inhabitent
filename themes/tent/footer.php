<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo"> <!-- footer background image -->
			</footer>

			<div id="tertiary" class="widgetized-footer" role="complementary"> <!-- footer widgets -->
					<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>

			<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri()?>/img/inhabitent-logo-text.svg" alt="Inhabitent logo" >

			<div class="site-info">
				<p>Copyright © 2017 Inhabitent</p>
			</div>

		</div><!-- #page -->
		
		<?php wp_footer(); ?>

	</body>
</html>
