<?php

function firsttheme_script_enqeue(){
	// with this function, you provide the name of the file, use the template directory uri to find the root location, then provide the actual location, an array, the version,
	// and whether this sheet will be used for all devices
	wp_enqueue_style('firsttheme', get_template_directory_uri() . 'css/firsttheme.css', array(), '1.0.0', 'all');
	wp_enqueue_script('firsttheme', get_template_directory_uri() . 'js/firsttheme.js', array(), '1.0.0', true);
	
}
add_action('wp_enqueue_scripts', 'firsttheme_script_enqeue');

?>