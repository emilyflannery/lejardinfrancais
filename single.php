<?php get_header(); ?>

	<div id="content" class="twocolumn">
		
		<div class="column">
		<aside>
			<?php dynamic_sidebar( 'sidebar-tags' ); ?>
		</aside>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<!-- the Post -->
		<div class="post">
			<h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h3 class="date"><?php the_time('F jS, Y') ?></h3>
			
			<?php the_content(); ?>
		
			<!-- Post Meta -->
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<strong>&nbsp;|</strong>'); ?>
			<?php edit_post_link('Edit','','<strong>&nbsp;|</strong>'); ?>  
			<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
			</p>			
			</div>
			
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&#60;  Previous') ?></div>
			<div class="alignright"><?php next_posts_link('Next  &#62;','') ?></div>
		</div>
		
	</div>
	

<?php get_footer(); ?>