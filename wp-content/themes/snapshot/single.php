<!-- appsto.com 142cc64f983fb58bdc08ff55038f8446 -->
<?php get_header(); ?>

<div id="content" class="fullspan">

	<div class="container_16 clearfix">
			
		<div id="leftcontent" class="grid_12">
		
    		<?php while (have_posts()) : the_post(); ?>

				<?php
            
            	$layout = get_option('woo_layout');

            	include('layouts/'.$layout);
            
        		?>                       
			
			<?php endwhile; ?>
            
            <div style="clear:both;height:15px;"></div> 
                        
             <div id="comments">
            	<?php #comments_template(); ?>
            </div>
			
			<div id="postnav">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div><!-- /postnav -->						

		</div><!-- /leftcontent --> 
		
		<?php get_sidebar(); ?>
        
	</div><!-- /container_16 -->

</div><!-- /content -->

<?php get_footer(); ?>