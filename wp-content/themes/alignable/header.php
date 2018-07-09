<?php
/**
 * The Header Template
 *
 * @package alignable
**/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title><?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700|Roboto" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<aside class="header-contact-info">
			<div class="container">
				<svg class="icon icon-mail"><use xlink:href="#icon-mail-envelope-closed"><symbol id="icon-mail-envelope-closed" viewBox="0 0 32 32">
				<title>Mail</title>
				<path d="M25.923 21.077l-0.808 0.808-5.99-5.135-2.625 2.25-2.625-2.25-5.99 5.135-0.808-0.808 5.923-5.077-5.923-5.077 0.808-0.808 8.615 7.385 8.615-7.385 0.808 0.808-5.923 5.077 5.923 5.077zM6.004 8c-1.107 0-2.004 0.895-2.004 1.994v12.012c0 1.101 0.89 1.994 2.004 1.994h20.993c1.107 0 2.004-0.895 2.004-1.994v-12.012c0-1.101-0.89-1.994-2.004-1.994h-20.993z"></path>
				</symbol></use></svg>
				<a href="" class="email">email@alignablecapital.com</a>
				<br class="visible-xs">
				<svg class="icon icon-phone"><use xlink:href="#icon-phone"><symbol id="icon-phone" viewBox="0 0 20 20">
				<title>Phone</title>
				<path d="M11.229 11.229c-1.583 1.582-3.417 3.096-4.142 2.371-1.037-1.037-1.677-1.941-3.965-0.102-2.287 1.838-0.53 3.064 0.475 4.068 1.16 1.16 5.484 0.062 9.758-4.211 4.273-4.274 5.368-8.598 4.207-9.758-1.005-1.006-2.225-2.762-4.063-0.475s-0.936 2.927 0.103 3.965c0.722 0.725-0.791 2.559-2.373 4.142z"></path>
				</symbol></use></svg>
				<a href="">888-000-0000</a>
			</div>
		</aside>
		<nav>
			<div class="container">
				<a href="<?php echo get_site_url(); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri() . '/library/images/site-logo.png' ?>" /></a>
				<h1>Your Source for<br>Private Money</h1>
				<div class="button-container">
					<a class="btn" href="#" id="apply-btn">APPLY NOW</a>
				</div>
			</div>
		</nav>
	</header>