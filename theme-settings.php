<?php

function polpo_settings($saved_settings) {
	$settings = theme_get_settings('polpo');
	$defaults = array(
		'fast_tasks' => 1 /*,
		'fast_task_roles' => NULL,*/
	);
	$settings = array_merge($defaults, $settings);  
	$form['fast_tasks'] = array(
		'#type' => 'checkbox',
		'#title' => t('Enable Fast Tasks Menu'),
		'#description' => t('Check the box above to enable Polpo&rsquo;s Fast Tasks'),
		'#default_value' => $settings['fast_tasks'],
	);
	
	/*$roles = user_roles(FALSE);
	$form['fast_task_roles'] = array(
	  '#type' => 'select',
	  '#options' => $roles,
	  '#attributes' => array('multiple' => 'multiple'),
	  '#description' => t('Select which roles can use the Fasts Tasks Menu'),
	);*/

  
  return $form;
}
