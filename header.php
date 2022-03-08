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
		<?php if (is_page(array('coming-soon'))) { ?>
			<nav>
				<a href="https://tws.health"><img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo"></a>
			</nav>
		<?php } else { ?>
			<nav>
			<a href="https://tws.health"><img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo"></a>
			<div class="nav-links">
				<div class="combined-nav-links">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<li><a onClick='toContact()'>Contact</a></li>
				</div>
				<a href="https://twshealth.youcanbook.me/" target="blank"><button class="main-button cta-button"">Book A Call</button></a>
			</div>
			<!-- Hamburger Menu -->
			<div class="hamburger-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'hamburger' ) ); ?>
			</div>
			<button class="hamburger hideOverflow">
					<i class="menu-icon fas fa-bars fa-2x"></i>
					<i class="close-icon fas fa-times fa-2x"></i>
			</button>
			</nav>
			<?php } ?>

			<div id="overlay"></div>
	</header>
<main>
