<?php

function polpo_settings($saved_settings) {
  $settings = theme_get_settings('polpo');
  $defaults = array(
    'fast_tasks' => 1,
  );
  $settings = array_merge($defaults, $settings);  
  $form['fast_tasks'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Fast Tasks Menu'),
  	'#description' => t('Check the box above to enable Polpo&rsquo;s Fast Tasks'),
  	'#default_value' => $settings['fast_tasks'],
  );
  return $form;
}