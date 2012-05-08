

		<div class="post">

			<h2><?php the_title(); ?></h2>
			
		</div><!-- /post -->            


		<div class="large-screenshot">

				<div class="large-screenimg">

					<?php if ( get_option('woo_resize') ) { woo_get_image('large-image','690','396'); } else { ?>
                    
                    <img src="<?php echo get_post_meta($post->ID, "large-image", $single = true); ?>" alt="<?php the_title(); ?>" />
                    
					<?php } ?>

				</div><!-- /screenimg -->

		</div><!-- /screenshot--> 
                
            
        <div style="clear:both;height:15px;"></div>      
                        
      <div class="grid_6 alpha">	
								
					<div class="post">
        
        				<h3><?php _e('Photo Information',woothemes); ?></h3>
        
        				<p class="date"><strong><?php _e('Submitted on',woothemes); ?>:</strong> <?php the_time('d M y'); ?></p>
        
        				<p><strong><?php _e('Category',woothemes); ?>:</strong> <?php the_category(','); ?></p>
        
        				<p><strong><?php _e('Photo Rating',woothemes); ?>:</strong> <?php if(function_exists('the_ratings')) { the_ratings(); } ?></p>
				
					</div><!-- /post -->
        
       </div><!-- /grid_6 omega -->

          <div class="grid_6 omega">	
									
						<div class="post">
            
            				<h3><?php _e("Author's Description",woothemes); ?>:</h3>
                
                			<?php the_content(); ?>
					
						</div><!-- /post -->
            
           </div><!-- /grid_6 omega -->
           
           <div style="clear:both;height:15px;"></div> 
           