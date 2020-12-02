<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BTW
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- w3 school css -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<?php wp_head(); ?>

	   <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body <?php body_class(); ?>>
<?php 

/**
 * Template Name: Header
 */
$brand_logo    			= get_field('header_logo');
$brand_name       = get_field('header_brand_name');


wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'btw' ); ?></a>

	<!-- HEADER
		================================================== -->
		<header class="site-header" role="banner">

			<!-- NAVBAR
			================================================== -->
			<div class="navbar-wrapper">

				<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="container">
						<!-- logo
						================================================== -->
						<div class="brand">
							<?php if(!empty($brand_logo)): ?>
								<img src="<?php  echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>">
							<?php endif; ?>
							<?php  echo $brand_name; ?>
						</div>
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cg_logo.png" alt="Bootstrap to Wordpress"></a> -->
						</div>

						<?php
							wp_nav_menu(array(
								'theme_location' => 'header',
								'container' => 'nav',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right'
							));
						?>
					</div>
				</div>

			</div>
		</header>