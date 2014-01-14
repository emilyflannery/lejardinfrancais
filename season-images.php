<?php foreach ( $images as $image ) : ?>				
	
	<img style="display:inline-block;" alt="<?php echo $image->alttext ?>" src="<?php echo $image->url ?>"/>		
<?php endforeach; ?>