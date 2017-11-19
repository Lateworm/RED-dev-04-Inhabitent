<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href=" <?php the_permalink() ?> ">
				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
		<?php endif; ?>

		<?php the_title( sprintf( '<p>', esc_url( get_permalink() ) ), '</p>' ); ?>
		<p><?php echo CFS()->get( 'price' ); ?></p>

	</header><!-- .entry-header -->

</article><!-- #post-## -->