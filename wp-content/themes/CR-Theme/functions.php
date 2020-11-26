<?php 


function codefactory_files(){

//register jQuery
wp_enqueue_script('jquery', get_template_directory_uri().'/jquery-3.5.1.min.map', array(),'1.0', true);

// register bootstrap.css file
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
// register bootstrap.js file
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array(),'1.0', true);
// register style.css file
wp_enqueue_style('my-style-sheet', get_template_directory_uri().'/style.css');

}

//add the action of calling codefactory_files when the scripts are loaded
add_action('wp_enqueue_scripts', 'codefactory_files');

?>