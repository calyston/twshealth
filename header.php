<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="copyright" content="© TWS Health & Wellness 2021." />
<meta name="description" content="Bring Balance To Your Being." />
<meta name="keywords" content="health, wellness, balance, nutrition, lifestyle" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php ?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>>
	<header>
		<?php if (is_page(array('free-workout-plan', 'coming-soon', 'subscribed'))) { ?>
			<nav>
				<a href="https://tws.health"><img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo"></a>
			</nav>
		<?php } else { ?>
			<nav>
			<a href="https://tws.health"><img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo"></a>
			<div class="nav-links">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<button class="nav-button" onclick="popupBookingOn()">Book A Call</button>
			</div>	

			</nav>
			<?php } ?>

			<div id="overlay"></div>
			<section id="popup-booking" class="popup-booking">
				<div onclick="popupBookingOff()" class="x-btn">
					<i class="close-btn fas fa-times fa-2x"></i>
				</div>
				
				<h3>Please fill out this contact form to make a booking.</h3>
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

				<input id="contact-submit" class="main-button" type="submit" value="Get Started">

			</form>
  	</section> 
	</header>

<main>
