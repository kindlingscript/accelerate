<?php
/**
 * The template for displaying all pages
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
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 

			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$img_size = "full";

			?>
				<div class="about-project">
					<h2><?php the_title(); ?></h2>

					<div class="intro-brief">
						<p class="project-attributes"><?php echo $services; ?></p>

						<p>Client: <?php echo $client; ?></p>
					</div>

					<?php the_content(); ?>

					<strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong>
				</div>

				<div class="images">
					<?php if ($image_1) {
						echo wp_get_attachment_image( $image_1, $img_size );
					 } ?>

					<?php if ($image_2) {
						echo wp_get_attachment_image( $image_2, $img_size );
					} ?>

					<?php if ($image_3) {
						echo wp_get_attachment_image( $image_3, $img_size );
					} ?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>