<?php
/**
 * The front page template.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!-- Jim's shop stuff code -->
		<section class="product-info container">
			<h2>Shop Stuff</h2>
			<?php
					$terms = get_terms( array(
							'taxonomy' => 'product-type',
							'hide_empty' => 0,
					) );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>
					<div class="product-type-blocks">
						<?php foreach ( $terms as $term ) : ?>
								<div class="product-type-block-wrapper">
									<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
									<p><?php echo $term->description; ?></p>
									<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
								</div>
						<?php endforeach; ?>
					</div>
			<?php endif; ?>
		</section>



		<h2 style="">Inhabitent Journal</h2>
		<div class="front-page-journal">
			<?php /* start the secondary loop to return journal entries */
				$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, );
				$journal_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

				<!-- Content from your array of post results goes here -->
				<div class="front-page-journal-entries">
					<?php the_post_thumbnail( 'medium' ); ?>
					<span>
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
					</span>
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
				</div>

			<?php endforeach; wp_reset_postdata(); ?>
		<div class="front-page-journal">


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>