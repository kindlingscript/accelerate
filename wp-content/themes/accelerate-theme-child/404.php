<?php
/**
 * The template for displaying the 404 page :)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content-contact" role="main">
			<div class="flex">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/404.gif">
				<div id="four-oh-four">
					<h2 class="title">Whoops, this wasn't supposed to happen!</h2>
					<p>Sorry, either this page no longer exists, never existed, or it's been moved.</p>
					<p>Feel free to look around our <a href="<?php echo home_url(); ?>/blog" class="link">blog</a> or view some of our <a href="<?php echo home_url(); ?>/case-studies" class="link">featured work</a>!</p>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>