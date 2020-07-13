<?php
// bancolombia-theme
// based on sky by Adaptivethemes.com

/**
 * Override or insert variables into the html template.
 */
function bancolombia_theme_preprocess_html(&$vars) {
  global $theme_key;
  $theme_name = $theme_key;

  // Add class for the active theme
  $vars['classes_array'][] = drupal_html_class($theme_name);
   drupal_add_css('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array('type' => 'external'));
   drupal_add_js('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('type' => 'external'));
   drupal_add_js('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('type' => 'external'));
   
   
}
