<?php

/**
 * my theme function
 */

 // theme title
 add_theme_support('title-tag');

 // theme css and jQuery file calling
 function tuhin_css_js_file_calling(){  
    wp_enqueue_style('tuhin-style', get_stylesheet_uri());
    wp_register_style('bootstrap',get_template_directory_uri()./css/bootstrap.css,array(), )
   }
   ad_action('wp_enqueue_scripts', 'tuhin_css_js_file_callin')
  
  
 }
 ad_action('wp_enqueue_scripts', 'tuhin_css_js_file_callin')

