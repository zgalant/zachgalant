<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    	register_sidebars(1,array('before_widget' => '<div class="widget">','after_widget' => '</div><!--/widget-->','before_title' => '<h3 class="hl">','after_title' => '</h3>'));
    
}

add_action( 'init', 'the_widgets_init' );
    
?>