            <div class="grid_6 alpha">	
									
						<div class="post">
				
								<div class="screenshot">
				
										<div class="screenimg">

											<?php if ( get_option('woo_resize') ) { woo_get_image('image','330','190','url'); } else { ?>
                                            
                                            <a href="<?php echo get_post_meta($post->ID, "url", $single = true); ?>" target="_blank"  title="View <?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" alt="<?php the_title(); ?>" /></a>                                            

											<?php } ?>																	
					
										</div><!-- /screenimg -->
				
								</div><!-- /screenshot-->
					
						</div><!-- /post -->
            
          </div><!-- /grid_6 omega -->
            
          <div class="grid_6 omega">	
									
						<div class="post">
            
            				<h2><?php the_title(); ?></h2>
            				
            				<div><?php the_excerpt(); ?></div>
            
            			
					
						</div><!-- /post -->
            
           </div><!-- /grid_6 omega -->

            <div style="clear:both;height:15px;"></div>
            
            <div>
            	<h3><?php #_e("Author's Description",woothemes); ?></h3>
                <?php the_content(); ?>
            </div>