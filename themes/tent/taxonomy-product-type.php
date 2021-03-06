<?php
/**
 * Template for displaying an archive of a specific product type.
 *
 * @package Tent
 */

get_header(); ?>
<div id="content" class="site-content-wide">

	<div id="primary" class="content-area">


		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<main id="main" class="site-main-products" role="main">

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content-product-listing' );
				?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		</main><!-- #main -->

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
