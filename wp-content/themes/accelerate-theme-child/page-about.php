<?php
/**
 * The template for displaying the about page
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

<?php while ( have_posts() ) : the_post(); 
	$top_summary = get_field('top_summary');
	$services_blurb = get_field('services_blurb');
	$service1_title = get_field('service_1_title');
	$service1_desc = get_field('service_1_description');
	$service1_img = get_field('service_1_image');
	$service2_title = get_field('service_2_title');
	$service2_desc = get_field('service_2_description');
	$service2_img = get_field('service_2_image');
	$service3_title = get_field('service_3_title');
	$service3_desc = get_field('service_3_description');
	$service3_img = get_field('service_3_image');
	$service4_title = get_field('service_4_title');
	$service4_desc = get_field('service_4_description');
	$service4_img = get_field('service_4_image');
	$img_size = "full";
?>

	<section class="top">
		<div id="primary" class="site-content">
			<div id="top-about" role="main">
					<section class="hero">
						<h2><span class="green">Accelerate</span> <?php echo $top_summary; ?></h2>
					</section>
			</div><!-- #content -->
		</div><!-- #primary -->
	</section><!-- .top-section -->

	<div id="primary" class="site-content">

		<div class="services-intro">
			<h3 class="uppercase">Our Services</h3>
			<?php echo $services_blurb; ?>
		</div>

		<div class="services">
			<div class="flex">
				<div class="service-img">
					<?php if ($service1_img) {
						echo wp_get_attachment_image( $service1_img, $img_size );
					 } ?>
				</div>
				<div class="service-about">
					<h2 class="title"><?php echo $service1_title; ?></h2>
					<p><?php echo $service1_desc; ?></p>
				</div>
			</div>
			<div class="flex">
				<div class="service-about">
					<h2 class="title"><?php echo $service2_title; ?></h2>
					<p><?php echo $service2_desc; ?></p>
				</div>
				<div class="service-img">
					<?php if ($service2_img) {
						echo wp_get_attachment_image( $service2_img, $img_size );
					 } ?>
				</div>
			</div>
			<div class="flex">
				<div class="service-img">
					<?php if ($service3_img) {
						echo wp_get_attachment_image( $service3_img, $img_size );
					 } ?>
				</div>
				<div class="service-about">
					<h2 class="title"><?php echo $service3_title; ?></h2>
					<p><?php echo $service3_desc; ?></p>
				</div>
			</div>
			<div class="flex">
				<div class="service-about">
					<h2 class="title"><?php echo $service4_title; ?></h2>
					<p><?php echo $service4_desc; ?></p>
				</div>
				<div class="service-img">
					<?php if ($service4_img) {
						echo wp_get_attachment_image( $service4_img, $img_size );
					 } ?>
				</div>
			</div>
		</div>

		<div class="contact-us">
			<div class="divider"></div>
			<div class="flex-contact">
				<h2 class="title contact">Interested in working with us?</h2>
				<div class="green-btn">Contact us</div>
			</div>
		</div>

	</div>

<!-- ?php the_content(); ? -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>