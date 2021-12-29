<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Redirect To Coming Soon Page -->
	<!-- <script type="text/javascript">
    window.location = "https://tws.health/coming-soon";
	</script> -->

	<?php endwhile;  ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
	<?php endif; ?>

<!-- <?php get_footer(); ?> -->