<?php
/*
Template Name: Partners Page
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
			
				<?php query_posts(array('post_type'=>'partners')); ?>
				<?php $mypost = array( 'post_type' => 'partners' );
				$loop = new WP_Query( $mypost ); ?>
				<!-- Cycle through all posts -->
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="partner" id="post-<?php the_ID(); ?>">

							<!-- Display featured image -->
							<?php the_post_thumbnail( array() ); ?>

							<!-- Display linked partner title -->
							<p><a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'website_url', true ) ); ?>" target="_blank"><?php the_title(); ?></a></p>
							
					</div

				<?php endwhile; ?>
			<?php wp_reset_query(); ?>

		</div>
	
	
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	
	<?php get_footer(); ?>
