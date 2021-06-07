<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="site-header" >
		<div class="container-fluid d-flex justify-content-between align-items-center">
				<div id="head-menu-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<a id="head-logo">
					<img src="<?php echo THEME_URL.'assets/images/main-logo.svg'?>" alt= ""/>
				</a>
				<ul id="head-langs">
					<li><a class="color-main" href="#">EN</a></li>
				</ul>
		</div>
	</header>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
