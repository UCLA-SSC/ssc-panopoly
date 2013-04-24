<?php

/**
 * @file
 * Theme functions
 */

function radix_divisional_dark_preprocess_views_exposed_form(&$vars, $hook) {
	// only alter the required form based on id
	if ($vars['form']['#id'] == 'views-exposed-form-faculty-profile-panel-pane-1' || 'views-exposed-form-faculty-profile-panel-pane-2') {
		// Change the text on the submit button
		$vars['form']['submit']['#value'] = t('Filter');
		// Rebuild the rendered version (submit button, rest remains unchanged)
		unset($vars['form']['submit']['#printed']);
		$vars['button'] = drupal_render($vars['form']['submit']); }
}
