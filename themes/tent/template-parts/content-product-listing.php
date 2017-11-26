<?php
/**
 * Template part for displaying posts.
 *
 * @package Tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a
				href="<?php the_permalink() ?>"
				class="product-image"
				style="
					background:
						url(<?php the_post_thumbnail_url( 'medium-large' ); ?>);
					background-size: cover;
					background-position: center;" 

				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
		<?php endif; ?>

		<div class="type-product-text">
			<?php the_title( sprintf( '<p class="type-product-title">', esc_url( get_permalink() ) ), ' ........................................
			.........</p>' ); ?>
			<p class="type-product-price"><?php echo CFS()->get( 'price' ); ?></p>
		</div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
