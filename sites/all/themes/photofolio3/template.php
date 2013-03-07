<?php
/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function photofolio3_breadcrumb($variables){
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $breadcrumb[] = drupal_get_title();
    return '<div class="breadcrumb">' . implode(' <span class="breadcrumb-separator">/</span> ', $breadcrumb) . '</div>';
  }
}
function photofolio3_preprocess_block(&$variables) {
	
  $variables['classes_array'][]='clearfix';

}

/**
 * Override or insert variables into the html template.
 */
function photofolio3_preprocess_html(&$variables) {

	if (empty($variables['page']['banner'])) {
		$variables['classes_array'][] = 'no-banner';
	}
	
	$color_scheme = theme_get_setting('color_scheme');
	
	if ($color_scheme != 'default') {
	drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
	}

	drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/opensans-font.css', array('group' => CSS_THEME, 'type' => 'file'));

	if (theme_get_setting('headings_font_family')=='hff-3'  ||
		theme_get_setting('paragraph_font_family')=='pff-3' ||
		theme_get_setting('sitename_font_family')=='sff-3'  ||
		theme_get_setting('slogan_font_family')=='slff-3' ||
		theme_get_setting('headings_font_family')=='hff-4'  ||
		theme_get_setting('paragraph_font_family')=='pff-4' ||
		theme_get_setting('sitename_font_family')=='sff-4'  ||
		theme_get_setting('slogan_font_family')=='slff-4') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/exo-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('headings_font_family')=='hff-5'  ||
		theme_get_setting('paragraph_font_family')=='pff-5' ||
		theme_get_setting('sitename_font_family')=='sff-5'  ||
		theme_get_setting('slogan_font_family')=='slff-5') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/ubuntu-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}	

	if (theme_get_setting('headings_font_family')=='hff-6'  ||
		theme_get_setting('paragraph_font_family')=='pff-6' ||
		theme_get_setting('sitename_font_family')=='sff-6'  ||
		theme_get_setting('slogan_font_family')=='slff-6' ||
		theme_get_setting('headings_font_family')=='hff-7'  ||
		theme_get_setting('paragraph_font_family')=='pff-7' ||
		theme_get_setting('sitename_font_family')=='sff-7'  ||
		theme_get_setting('slogan_font_family')=='slff-7') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/sourcesanspro-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('headings_font_family')=='hff-8'  ||
		theme_get_setting('paragraph_font_family')=='pff-8' ||
		theme_get_setting('sitename_font_family')=='sff-8'  ||
		theme_get_setting('slogan_font_family')=='slff-8') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/cuprum-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}	
	
	if (theme_get_setting('headings_font_family')=='hff-9'  ||
		theme_get_setting('paragraph_font_family')=='pff-9' ||
		theme_get_setting('sitename_font_family')=='sff-9'  ||
		theme_get_setting('slogan_font_family')=='slff-9') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/alegreya-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}	
	
	if (theme_get_setting('headings_font_family')=='hff-10'  ||
		theme_get_setting('paragraph_font_family')=='pff-10' ||
		theme_get_setting('sitename_font_family')=='sff-10'  ||
		theme_get_setting('slogan_font_family')=='slff-10') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/gentiumbookbasic-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}	
	
	if (theme_get_setting('headings_font_family')=='hff-11'  ||
		theme_get_setting('paragraph_font_family')=='pff-11' ||
		theme_get_setting('sitename_font_family')=='sff-11'  ||
		theme_get_setting('slogan_font_family')=='slff-11') {
		drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/fonts/volkhov-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}	
	
	drupal_add_css(path_to_theme() . '/css/layout-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lt IE 9)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
	drupal_add_css(path_to_theme() . '/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lt IE 9)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
	
}

/**
 * Override or insert variables into the html template.
 */
function photofolio3_process_html(&$vars) {

  $classes = explode(' ', $vars['classes']);
  $classes[] = theme_get_setting('page_bg');
  $classes[] = theme_get_setting('sitename_font_family');
  $classes[] = theme_get_setting('slogan_font_family');
  $classes[] = theme_get_setting('headings_font_family');
  $classes[] = theme_get_setting('paragraph_font_family');
  $vars['classes'] = trim(implode(' ', $classes));
 
}

function photofolio3_preprocess_maintenance_page(&$variables) {
	$color_scheme = theme_get_setting('color_scheme');
	drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
}

function photofolio3_page_alter($page) {
	// <meta name="viewport" content="width=device-width, initial-scale=1"/>
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1'
		)
	);
	drupal_add_html_head($viewport, 'viewport');
}

function photofolio3_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
  
    unset($form['search_block_form']['#title']);
	
    $form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Search...');
    $form['search_block_form']['#default_value'] = $form_default;
 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
  }
}

/**
 * Add Javascript for enable/disable scrollTop action
 */
if (theme_get_setting('scrolltop_display')) {

	drupal_add_js('jQuery(document).ready(function($) { 
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$("#toTop").fadeIn();	
		} else {
			$("#toTop").fadeOut();
		}
	});
	
	$("#toTop").click(function() {
		$("body,html").animate({scrollTop:0},800);
	});	
	
	});',
	array('type' => 'inline', 'scope' => 'header'));

}
//EOF:Javascript

/**
 * Add Javascript for responsive mobile menu
 */
if (theme_get_setting('responsive_menu_state')) {

	if (theme_get_setting('responsive_menu_optgroups')) {
		drupal_add_js(drupal_get_path('theme', 'photofolio3') .'/js/jquery.mobilemenu.js');
	} else {
		drupal_add_js(drupal_get_path('theme', 'photofolio3') .'/js/jquery.mobilemenu-no-optgroups.js');
	}
	
	$responsive_menu_nested=theme_get_setting('responsive_menu_nested');
	$responsive_menu_switchwidth=theme_get_setting('responsive_menu_switchwidth');
	$responsive_menu_topoptiontext=theme_get_setting('responsive_menu_topoptiontext');
	$responsive_menu_nested=theme_get_setting('responsive_menu_nested');
	
	drupal_add_js('jQuery(document).ready(function($) { 
	
	$("#main-navigation ul.main-menu").mobileMenu({
		prependTo: "#main-navigation",
		combine: false,
		nested: '.$responsive_menu_nested.',
		switchWidth: '.$responsive_menu_switchwidth.',
		topOptionText: "'.$responsive_menu_topoptiontext.'"
	});
	
	});',
	array('type' => 'inline', 'scope' => 'header'));

}
//EOF:Javascript
?>