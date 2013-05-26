<?php

function admini_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  if (isset($form_id)) {
    return;
  }

  $form['toolbar'] = array(
    '#type' => 'fieldset',
    '#title' => t('Toolbar settings'),
    '#description' => t('Allow to disable toolbars in admin pages.'),
    '#weight' => 5,
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['toolbar']['admini_main'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable theme toolbar.'),
    '#default_value' => theme_get_setting('admini_main'),
  );

  $form['toolbar']['admini_drupal'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable drupal toolbar.'),
    '#default_value' => theme_get_setting('admini_drupal'),
  );
}
