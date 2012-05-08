<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

	<title><?php woo_title(); ?></title>
	<?php woo_meta(); ?>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/text.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/960.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
	
	<!--[if lte IE 6]>
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
	<![endif]-->
   	
	<?php wp_head(); ?>

</head>

<body>

<div id="wrap">

<div id="header" class="fullspan">

	<div class="container_16">
	
		<div class="grid_6" id="logo">
			<h1 <?php if ( get_option('woo_logo') <> "" ) { ?>style="background: url(<?php echo get_option('woo_logo'); ?>) no-repeat !important;"<?php } ?>><a href="<?php echo get_settings('home'); ?>/" title="Return to the the frontpage"><?php bloginfo('name'); ?></a></h1>
		</div>
		
		<div class="grid_8">
			<h1 class="title"><a href="<?php echo get_settings('home'); ?>/" title="<?php _e('Home',woothemes); ?>"><?php bloginfo('name'); ?></a></h1>
			<p class="description">
			    <?php #bloginfo('description'); ?>
			</p>
		</div>
		
		<div id="taglineDELETEIFWANTTAGLINE">
			<p><?php #bloginfo('description'); ?></p>		
		</div><!-- /nav -->
		
		
	</div><!-- /container_16 -->
	<div class="right social-icons">
	    <div class="social-icon"><a target="_blank" href="mailto:zach.galant@gmail.com"><img src="http://www.zachgalant.com/wp-content/uploads/social/gmail.png" title="Email Me" /></a></div>
	    <div class="social-icon"><a target="_blank" href="http://facebook.com/zgalant"><img src="http://www.zachgalant.com/wp-content/uploads/social/facebook.png" title="View My Facebook" /></a></div>
	    <div class="social-icon"><a target="_blank" href="http://twitter.com/zgalant"><img src="http://www.zachgalant.com/wp-content/uploads/social/twitter.png" title="View My Twitter" /></a></div>
	    <div class="social-icon"><a target="_blank" href="http://www.vimeo.com/user278740"><img src="http://www.zachgalant.com/wp-content/uploads/social/vimeo.png" title="Watch My Vimeo" /></a></div>
	    <div class="social-icon"><a target="_blank" href="http://www.github.com/zgalant"><img src="http://www.zachgalant.com/wp-content/uploads/social/github.png" title="Github" /></a></div>
    </div>
    <div class="clear"></div>

</div><!-- /header -->

<div id="nav" class="fullspan">

		<div class="container_16">
	
		<div class="grid_12">
			<?php
			if ( function_exists('has_nav_menu') && has_nav_menu('primary-menu') ) {
				wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
			<ul>
			<?php 
        	if ( get_option('woo_custom_nav_menu') == 'true' ) {
        		if ( function_exists('woo_custom_navigation_output') )
					woo_custom_navigation_output();

			} else { ?>							
				<li <?php if ( is_home() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/"><?php _e('Home',woothemes); ?></a></li>
				<?php wp_list_pages('title_li='); ?>	
			<?php } ?>			
          </ul>
		  <?php } ?>
		</div>
        
        <!--><div class="grid_4 rss">
            
            <ul>
            
			<li><a href="<?php #if ( get_option('woo_feedburner_url') <> "" ) { echo #get_option('woo_feedburner_url'); } else { echo #get_bloginfo_rss('rss2_url'); } ?>" title="<?php #_e('Subscribe to the RSS feed',woothemes); ?>"><?php #_e('Subscribe to this site',woothemes); ?></a></li>
            
            </ul>

		</div>-->
		
	</div><!-- /container_16 -->

</div><!-- /steps -->
