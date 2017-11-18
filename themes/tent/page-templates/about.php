<?php

/** 
 * Template Name: About Template
 *
 * @package RED_Starter_Theme
 */

?>

<?php get_header(); ?>

<header class="entry-header custom-hero">
</header>
<div class="custom-hero-title">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>

<div id="content" class="site-content-wide">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- Hero originally was here -->

				<div class="container">
					<div class="entry-content">

						<h2>Our Story</h2>
						<?php echo CFS()->get( 'about_our_story' ); ?>

						<h2>Our Team</h2> <!-- could get this info from CFS? -->
						<?php echo CFS()->get( 'about_our_team' ); ?>

					</div>
				</div>
			</article>
		</main> <!-- #main -->
	</div> <!-- #primary -->
<?php get_footer(); ?>







