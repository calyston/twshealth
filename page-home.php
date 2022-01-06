<?php 
/**
 * 	Template Name: Home Page
*/

get_header(); ?>

<!-- Homepage -->

<!-- Hero Banner -->
<div id="hero-home" class="hero-home">
  <div class="page-title-container-home">
    <h1><?php the_title(); ?></h1>
		<h3>I'll help you to make subtle changes to your dietary and lifestyle habits and see the profound effects on your body!</h3>
  </div>
</div>

<!-- Subscribe Popup -->
<section id="popup-subscribe" class="popup-subscribe">
	<div onclick="popupSubscribeOff()" class="x-btn">
		<i class="close-btn fas fa-times fa-2x"></i>
	</div>
				
	<h3>Sign Up For Free Workouts, Discounts & Offers!</h3>
  <form class="contact-form" action="action_page.php">
		<div>
			<label for="fname">First Name<span>*</span>:</label>
			<input type="text" id="fname" name="firstname" placeholder="First Name">
		</div>
				
		<div>
			<label for="lname">Last Name<span>*</span>:</label>
			<input type="text" id="lname" name="lastname" placeholder="Last Name">
		</div>
				
		<div>
			<label for="lname">Email<span>*</span>:</label>
			<input type="email" id="email" name="email" placeholder="Email">
		</div>

		<input id="contact-submit" class="main-button" type="submit" value="Sign Up">
	</form>
</section> 

<!-- Homepage Content -->
<section class="page-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<section>
    		<?php the_content(); ?>
				<!-- <button class="main-button">Read More</button> -->
  		</section>

		<?php endwhile;?>
	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
	<?php endif; ?>
</section>

<?php get_footer();  ?>