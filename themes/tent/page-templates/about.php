<?php

/* 
* Template Name: About Page 
*
* @package RED_Starter_Theme
*/

// copy content from page.php?
?>
<header class="entry-header custom-hero">
	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header>

<?php get_header(); ?>
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







