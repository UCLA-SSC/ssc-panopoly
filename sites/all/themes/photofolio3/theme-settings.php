<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function photofolio3_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
	'#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
	'#attached' => array(
      'css' => array(drupal_get_path('theme', 'photofolio3') . '/photofolio3.settings.form.css'),
    ),
  );
  
  $form['mtt_settings']['tabs']['basic_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['breadcrumb'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Breadcrumb</div>'),
  );

  $form['mtt_settings']['tabs']['basic_settings']['breadcrumb_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumb'),
  	'#description'   => t('Use the checkbox to enable or disable Breadcrumb.'),
	'#default_value' => theme_get_setting('breadcrumb_display', 'photofolio3'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['scrolltop'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Scroll to top</div>'),
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['scrolltop_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
  	'#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
	'#default_value' => theme_get_setting('scrolltop_display', 'photofolio3'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['feed_icons'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Feed icons</div>'),
  );

  $form['mtt_settings']['tabs']['basic_settings']['feed_icons_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show feed icons'),
  	'#description'   => t('Use the checkbox to enable or disable feed icons.'),
	'#default_value' => theme_get_setting('feed_icons_display', 'photofolio3'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['looknfeel'] = array(
    '#type' => 'fieldset',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
  	'#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
	'#default_value' => theme_get_setting('color_scheme', 'photofolio3'),
    '#options' => array(
		'default' => t('Blue - Green'),
		'orangegray' => t('Orange - Gray'),
		'pinkgray' => t('Pink - Gray'),
		'darkgray' => t('Dark Gray - Black'),
		'bluered' => t('Blue - Red'),
		'brightgray' => t('Bright Gray'),
    ),
  );
  
  $form['mtt_settings']['tabs']['looknfeel']['page_bg'] = array(
    '#type' => 'select',
    '#title' => t('Background pattern'),
	'#description'   => t('All patterns are designed so you can use them in combination with any of the available color schemes.'),
	'#default_value' => theme_get_setting('page_bg', 'photofolio3'),
    '#options' => array(
		'bg-default' => t('Bright'),
		'bg-1' => t('Shady'),
		'bg-2' => t('Dark'),
    ),
  );

  $form['mtt_settings']['tabs']['font'] = array(
    '#type' => 'fieldset',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['font']['font_title'] = array(
   '#type' => 'item',
   '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );
  
  $form['mtt_settings']['tabs']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
	'#default_value' => theme_get_setting('sitename_font_family', 'photofolio3'),
    '#options' => array(
		'sff-1' => t('Open Sans, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-2' => t('Open Sans Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-3' => t('Exo, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-4' => t('Exo Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-5' => t('Ubuntu, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-6' => t('Source Sans Pro, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-7' => t('Source Sans Pro Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-8' => t('Cuprum, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'sff-9' => t('Alegreya, Times, Times New Roman, Serif'),
		'sff-10' => t('Gentium Book Basic, Times, Times New Roman, Serif'),
		'sff-11' => t('Volkhov, Times, Times New Roman, Serif'),
		'sff-12' => t('Georgia, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['slogan_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slogan'),
	'#default_value' => theme_get_setting('slogan_font_family', 'photofolio3'),
    '#options' => array(
		'slff-1' => t('Open Sans, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-2' => t('Open Sans Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-3' => t('Exo, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-4' => t('Exo Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-5' => t('Ubuntu, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-6' => t('Source Sans Pro, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-7' => t('Source Sans Pro Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-8' => t('Cuprum, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'slff-9' => t('Alegreya, Times, Times New Roman, Serif'),
		'slff-10' => t('Gentium Book Basic, Times, Times New Roman, Serif'),
		'slff-11' => t('Volkhov, Times, Times New Roman, Serif'),
		'slff-12' => t('Georgia, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Headings'),
	'#default_value' => theme_get_setting('headings_font_family', 'photofolio3'),
    '#options' => array(
		'hff-1' => t('Open Sans, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-2' => t('Open Sans Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-3' => t('Exo, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-4' => t('Exo Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-5' => t('Ubuntu, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-6' => t('Source Sans Pro, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-7' => t('Source Sans Pro Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-8' => t('Cuprum, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'hff-9' => t('Alegreya, Times, Times New Roman, Serif'),
		'hff-10' => t('Gentium Book Basic, Times, Times New Roman, Serif'),
		'hff-11' => t('Volkhov, Times, Times New Roman, Serif'),
		'hff-12' => t('Georgia, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['paragraph_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Paragraph'),
	'#default_value' => theme_get_setting('paragraph_font_family', 'photofolio3'),
    '#options' => array(
		'pff-1' => t('Open Sans, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-2' => t('Open Sans Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-3' => t('Exo, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-4' => t('Exo Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-5' => t('Ubuntu, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-6' => t('Source Sans Pro, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-7' => t('Source Sans Pro Light, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-8' => t('Cuprum, Trebuchet MS, Helvetica Neue, Arial, Sans-serif'),
		'pff-9' => t('Alegreya, Times, Times New Roman, Serif'),
		'pff-10' => t('Gentium Book Basic, Times, Times New Roman, Serif'),
		'pff-11' => t('Volkhov, Times, Times New Roman, Serif'),
		'pff-12' => t('Georgia, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slideshow'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
  	'#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
	'#default_value' => theme_get_setting('slideshow_effect', 'photofolio3'),
    '#options' => array(
		'random' => t('random'),
		'simpleFade' => t('simpleFade'),
		'curtainTopLeft' => t('curtainTopLeft'),
		'curtainTopRight' => t('curtainTopRight'),
		'curtainBottomLeft' => t('curtainBottomLeft'),
		'curtainBottomRight' => t('curtainBottomRight'),
		'curtainSliceLeft' => t('curtainSliceLeft'),
		'curtainSliceRight' => t('curtainSliceRight'),
		'blindCurtainTopLeft' => t('blindCurtainTopLeft'),
		'blindCurtainTopRight' => t('blindCurtainTopRight'),
		'blindCurtainBottomLeft' => t('blindCurtainBottomLeft'),
		'blindCurtainBottomRight' => t('blindCurtainBottomRight'),
		'blindCurtainSliceBottom' => t('blindCurtainSliceBottom'),
		'blindCurtainSliceTop' => t('blindCurtainSliceTop'),
		'stampede' => t('stampede'),
		'mosaic' => t('mosaic'),
		'mosaicReverse' => t('mosaicReverse'),
		'mosaicRandom' => t('mosaicRandom'),
		'mosaicSpiral' => t('mosaicSpiral'),
		'mosaicSpiralReverse' => t('mosaicSpiralReverse'),
		'topLeftBottomRight' => t('topLeftBottomRight'),
		'bottomRightTopLeft' => t('bottomRightTopLeft'),
		'bottomLeftTopRight' => t('bottomLeftTopRight'),
		'scrollLeft' => t('scrollLeft'),
		'scrollRight' => t('scrollRight'),
		'scrollHorz' => t('scrollHorz'),
		'scrollBottom' => t('scrollBottom'),
		'scrollTop' => t('scrollTop'),
    ),
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Time (sec)'),
	'#default_value' => theme_get_setting('slideshow_time', 'photofolio3'),
  	'#description'   => t('Set the time between the end of the sliding effect and the start of the next one, in seconds.'),
  );
  
 $form['mtt_settings']['tabs']['responsive_menu'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive menu'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
 $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive menu'),
  	'#description'   => t('Use the checkbox to enable the plugin which transforms the Main menu of your site to a dropdown select list when your browser is at mobile widths.'),
	'#default_value' => theme_get_setting('responsive_menu_state', 'photofolio3'),
  );
  
 $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_switchwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Switch width (px)'),
  	'#description'   => t('Set the width (in pixels) at which the Main menu of the site will change to a dropdown select list.'),
	'#default_value' => theme_get_setting('responsive_menu_switchwidth', 'photofolio3'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_topoptiontext'] = array(
    '#type' => 'textfield',
    '#title' => t('Top option text'),
  	'#description'   => t('Set the very first option display text.'),
	'#default_value' => theme_get_setting('responsive_menu_topoptiontext', 'photofolio3'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_optgroups'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive menu with optgroups'),
  	'#description'   => t('Use the checkbox to enable a dropdown select list with optgroups support.'),
	'#default_value' => theme_get_setting('responsive_menu_optgroups', 'photofolio3'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_nested'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable nested responsive menu'),
  	'#description'   => t('Use the checkbox to enable the optgroups for the dropdown select list (acts only in dropdown select list with optgroups).'),
	'#default_value' => theme_get_setting('responsive_menu_nested', 'photofolio3'),
  );
  
}
