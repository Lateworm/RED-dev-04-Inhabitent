<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Tent
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
?>

</div><!-- #content -->

	<div id="secondary" class="widgetized-sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->

<div> <!-- footer.php should be expecting this -->
