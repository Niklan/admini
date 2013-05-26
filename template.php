<?php

function admini_preprocess_html(&$vars) {
  // Add conditional CSS for IE8 and below.
  drupal_add_css(path_to_theme() . '/css/style.css');
  drupal_add_css(path_to_theme() . '/css/font-awesome.min.css');
  drupal_add_js(path_to_theme() . '/js/theme.js', array('weight' => 999));

  // Add theme settings to JS.
  drupal_add_js(array(
    'admini_main' => theme_get_setting('admini_main'),
    'admini_drupal' => theme_get_setting('admini_drupal'),
  ), 'setting');

}

// Tabs
function admini_preprocess_page(&$vars) {
  $vars['primary_local_tasks'] = $vars['tabs'];
  unset($vars['primary_local_tasks']['#secondary']);
  $vars['secondary_local_tasks'] = array(
    '#theme' => 'menu_local_tasks',
    '#secondary' => $vars['tabs']['#secondary'],
  );
}