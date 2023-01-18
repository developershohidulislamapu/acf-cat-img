
function cat_shortcode_tow_function(){
 
	?>
	<h5><a style="color: #333;" href="<?php echo site_url('/games/'); ?>">GAMES</a></h5>
		<div class="cat-area"><?php
	
		$terms = get_terms(
			array(
				'taxonomy'   => 'category',
				'parent'   =>  4,
			)
	
		);
	
		foreach ($terms as $term):
			$term_image = get_field( 'cat_images', 'category_' . $term->term_id ); 
	
			?>
	
				<ul>
					
					<li>
						<a href="<?php echo get_term_link($term->slug, 'category') ?>">
										<?php if ( $term_image ) : ?>
											
										<img src="<?php echo $term_image['url']; ?>" alt="<?php echo $term->name; ?>">
	
										<?php endif; ?>
							
							<?php echo wp_trim_words( $term->name ,1, '...' );?>
						</a>
					</li>
				</ul>
				
			
			<?php
			
	
		endforeach;
	
		?></div><?php
		
	}
	
add_shortcode( "CATEGORY_SHORTCODE_TOW", "cat_shortcode_tow_function" );
