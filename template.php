<?php

function more_preprocess_html(&$variables) {



if (drupal_is_front_page()) {
  drupal_add_css(path_to_theme() . "/css/front.css", 'theme','all'); 
}
  drupal_add_js(path_to_theme() . "/js/myscripts.js", 'theme');
  
$viewport = array(
  '#tag' => 'meta', 
  '#attributes' => array(
    'name' => 'viewport', 
    'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
  ),
);
 
drupal_add_html_head($viewport, 'viewport');
  
  
  }