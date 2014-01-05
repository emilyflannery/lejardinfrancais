<?php
/*
Template Name: Seasonal Page
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="work" <?php post_class(); ?>>

		<!-- Featured Image BG -->
		<?php global $post; ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>
			
			<aside class="content-outer-wrap">
				<h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
						<div class="content">
						
						<!-- the Content -->
						<?php the_content(); ?>
						
						</div>
			</aside>
	
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	
	<?php get_footer(); ?>
