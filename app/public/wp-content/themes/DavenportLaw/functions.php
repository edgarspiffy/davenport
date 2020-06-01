<?php 
function theme_files(){
  //Scripts
  wp_enqueue_script('jquery','//code.jquery.com/jquery-3.3.1.min.js',NULL,'1.0',true);
  wp_enqueue_script('ajax','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',NULL,'1.0',true);
  wp_enqueue_script('stackpath','//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',NULL,'1.0',true);

  //Styles
  wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.0.13/css/all.css');

  wp_enqueue_style('bootstrap-4','//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
  
  wp_enqueue_style('theme_styles',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','theme_files');


?>