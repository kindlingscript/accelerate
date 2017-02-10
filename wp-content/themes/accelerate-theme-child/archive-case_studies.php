<?php
/**
 * The template for displaying all case studies in archive format.
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
				$image_1 = get_field('image_1');
				$img_size = "full";
				$services = get_field('services');

			?>
				<div class="about-project">
					<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<div class="intro-brief">
						<p class="project-attributes"><?php echo $services; ?></p>
					</div>

					<?php the_excerpt(); ?>

					<strong><a href="<?php echo the_permalink(); ?>">View Project &rsaquo;
				</div>

				<div class="images">
					<?php if ($image_1) {
						echo wp_get_attachment_image( $image_1, $img_size );
					 } ?>
				</div>

				<div class="clear"></div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>