<?php
/*
Template Name: Standard Page
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="about" class="banner">
		<div class="img-wrap">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail();
				} 
			?>
		</div>
	</div>

	<div class="content">
		<h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
		<?php the_content(); ?> 
	</div>


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	
<?php get_footer(); ?>