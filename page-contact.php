<?php 
/**
 * 	Template Name: Contact Page
*/
get_header();?>

<!-- Contact Page -->

<section class="page-content">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

  <section class="contact-page-content">
    <h1><?php the_title(); ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <section class="contact-sns">
      <a href="https://www.instagram.com/tws.health/" target="blank"><i class="fab fa-instagram fa-4x"></i></a>
      <a href="https://www.facebook.com/groups/tws.health/" target="blank"><i class="fab fa-facebook-f fa-4x"></i></a>
      <a href="https://twitter.com/TWS_Health" target="blank"><i class="fab fa-twitter fa-4x"></i></a>
      <a href="https://www.tiktok.com/@tws.health/" target="blank"><i class="fab fa-tiktok fa-4x"></i></a>
    </section>

    <!-- Contact Form -->
    <?php the_content(); ?>
    <section class="contact-form-container">
      <form class="contact-form" name="Contact Form">

      <div>
        <label for="fname">First Name<span>*</span>:</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name" required>
      </div>
      
      <div>
        <label for="lname">Last Name<span>*</span>:</label>
        <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
      </div>
      
      <div>
        <label for="lname">Email<span>*</span>:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
      </div>
      
      <div>
        <label for="message">Message<span>*</span>:</label>
        <textarea id="message" name="message" placeholder="Message" required></textarea>
      </div>
      

      <input id="contact-submit" class="main-button" type="submit" value="Submit">

    </form>
  </section> 
  </section>

	<?php endwhile; ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
<?php endif; ?>
  </section>

<?php get_footer(); ?>