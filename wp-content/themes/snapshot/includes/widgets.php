<?php

function Showcase_Tag_Cloud()
{

?>

		<div class="widget">
        	<h3 class="hl">Showcase Tags</h3>
			<ul><li class="tagcloud"><?php if (function_exists('wp_tag_cloud')) { wp_tag_cloud('smallest=10&largest=18'); } ?></li></ul>
		</div>
	
<?php 	

}

register_sidebar_widget('Snapshot Tag Cloud', 'Showcase_Tag_Cloud');   

?>