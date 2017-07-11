<?php

function myresources(){
	/* references your stylesheet */
   wp_register_style( 'my_style', get_stylesheet_directory_uri() . '/style.css', array(), '1', 'all' );
   
   /* references your script */
   wp_register_script('my_script', get_template_directory_uri() . '/script.js', array(),'1', 'all');

   wp_enqueue_style('my_style');
   wp_enqueue_script('my_script');
}
   add_action('wp_enqueue_scripts','myresources');
?>
