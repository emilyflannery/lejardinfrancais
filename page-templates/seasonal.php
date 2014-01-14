<?php
/*
Template Name: Seasonal Page
*/
?>

<?php get_header(); ?>


	<div id="seasonal" class="banner">
		<?php if ( is_page('corporate-designs' ) ) : ?>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/corporate-spring.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/corporate-summer.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/corporate-autumn.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/corporate-winter.jpg" />
			</div>
		
		<?php elseif ( is_page('custom-compositions' ) ) : ?>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/custom-compositions-spring.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/custom-compositions-summer.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/custom-compositions-autumn.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/custom-compositions-winter.jpg" />
			</div>

		<?php elseif ( is_page('weddings' ) ) : ?>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/weddings-spring.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/weddings-summer.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/weddings-autumn.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/weddings-winter.jpg" />
			</div>

		<?php elseif ( is_page('special-events' ) ) : ?>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/special-events-spring.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/special-events-summer.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/special-events-autumn.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/special-events-winter.jpg" />
			</div>

		<?php elseif ( is_page('special-events' ) ) : ?>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/garden-design-spring.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/garden-design-summer.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/garden-design-autumn.jpg" />
			</div>
			<div class="img-wrap">
				<img src="/wp-content/themes/lejardinfrancais/images/seasonal/garden-design-winter.jpg" />
			</div>

		<?php endif; ?>
	</div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="content">
		<h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
		<?php the_content(); ?> 
	</div>
	
<?php endwhile; else: ?>
	<p><?php _e('Sorry, the page was not found.'); ?></p>
<?php endif; ?>

	
<?php get_footer(); ?>
