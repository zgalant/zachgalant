<?php get_header(); ?>

<div id="content" class="fullspan">

	<div class="container_16 clearfix">
			
		<div id="leftcontent" class="grid_12">
		
    		<?php
				$counter = 0; $counter2 = 0;
				while (have_posts()) : the_post();
			?>
	
			<?php $counter++; $counter2++; ?>	
            
         <div class="grid_6 <?php if ($counter == 1) { echo 'alpha'; } else { echo 'omega'; $counter = 0; } ?>">	
									
			<div class="post">
				
				<div class="screenshot">
				
					<div class="screenimg">
					
						<?php if ( get_option('woo_layout') == '1-photo.php' ) { ?>
						
							<?php if ( get_option('woo_resize') ) { woo_get_image('large-image','330','190'); } else { ?>
                            
							<a href="<?php the_permalink() ?>" title="View <?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" alt="<?php the_title(); ?>" /></a>
                                                       
                            <?php } ?>
	
						
						<?php } else { ?>

							<?php if ( get_option('woo_resize') ) { woo_get_image('large-image','330','190','url'); } else { ?>
                            
							<a href="<?php echo get_post_meta($post->ID, "url", $single = true); ?>" target="_blank" title="View <?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" alt="<?php the_title(); ?>" /></a>						
                                                       
                            <?php } ?>

						
						<?php } ?>
						
						<span><?php #the_category(','); ?></span>
					
					</div>
				
				</div>
   
				<div class="theme">
		      
		      	<div class="grid_4 alpha"><h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2></div>
		      	<div class="grid_2 omega"><p class="date"><?php _e('Added on',woothemes); ?> <?php the_time('d M y'); ?></p></div>
		      	<div style="clear:both;"></div>		      	 
		      	<div class="grid_4 alpha"><p class="tags"><?php the_tags('', ', ' , ''); ?></p></div>	
		      	<div class="grid_2 omega" style="text-align:right;"><?php if(function_exists('the_ratings')) { the_ratings(); } ?> </div>		     
		      	<div style="clear:both;"></div>	
					
				</div>
					
			</div><!-- /post -->
            
         <div style="clear:both;height:10px;border-bottom:1px solid #eee;margin-bottom: 20px;"></div>
            
        </div>
			
		<?php endwhile; ?>
            
            <div style="clear:both;height:0px;"></div>
			
			<div id="postnav">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div><!-- /postnav -->						

		</div><!-- /leftcontent --> 
		
		<?php get_sidebar(); ?>
        
	</div><!-- /container_16 -->

</div><!-- /content -->

<?php get_footer(); ?>