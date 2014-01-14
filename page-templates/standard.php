<?php
/*
Template Name: Standard Page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="standard" class="banner">
		<div class="img-wrap">
		    <?php the_post_thumbnail( $size, $attr ); ?> 
		</div>
	</div>

	<div class="content">
		<h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
		<?php the_content(); ?> 
	</div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, the page was not found.'); ?></p>
<?php endif; ?>

	
<?php get_footer(); ?>