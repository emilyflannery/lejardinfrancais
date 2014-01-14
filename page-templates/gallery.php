<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="gallery" class="banner">
		
	</div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, the page was not found.'); ?></p>
<?php endif; ?>

	
<?php get_footer(); ?>