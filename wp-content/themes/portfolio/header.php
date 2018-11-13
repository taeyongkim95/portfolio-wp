<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till opening mainContainer
 *
 * @package WordPress
 * @subpackage Starterkit
 * @since Starterkit 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php get_template_part('partials/gtm-head.php');?>


<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon.ico" type="image/ico" />


<!-- main.css-->
<link href="<?php echo get_template_directory_uri(); ?>/public/css/main.css" rel="stylesheet" type="text/css">

<!-- jQuery ui css-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/src/slick.min.js"></script>


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>


<body>
<?php get_template_part('partials/gtm-body.php');?>


	<div id="header">
		<?php include('header-content.php'); ?>
	</div><!--#header-->

	<div id="mainContainer">
