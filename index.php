<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<script type="text/javascript">
    window.location = "http://localhost:81/twshealth/coming-soon";
</script>

	<?php endwhile;  ?>

	<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
	<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>

<?php get_footer(); ?>