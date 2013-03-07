<div class="camera_wrap camera_charcoal_skin" id="camera_wrap">

	<?php foreach ($rows as $id => $row) { 
    
    $view = views_get_current_view();
    $nid = $view->result[$id]->nid; 
    $node = node_load($nid);
	$lang = 'und';
	
	$data_link = url('node/' . $node->nid);
    
    if ($node->field_mt_slideshow_image):
	//$slideshow_image = image_style_url('mt-slideshow', $node->field_mt_slideshow_image[$lang][0]['uri']);
	
	$image_style = 'mt-slideshow';
	$image_uri = $node->field_mt_slideshow_image[$lang][0]['uri'];
	$derivative_uri = image_style_path($image_style, $image_uri);
	if(!file_exists($derivative_uri)) {
		$style = image_style_load($image_style);
		image_style_create_derivative($style, $image_uri, $derivative_uri);
	}
	$slideshow_image = image_style_url($image_style, $image_uri);

	$slideshow_image_thumb = image_style_url('mt-slideshow-thumbnail', $node->field_mt_slideshow_image[$lang][0]['uri']);
    endif;
	
	$slideshow_text = '';
	if ($node->field_mt_slideshow_text):
	$slideshow_text = $view->render_field('field_mt_slideshow_text', $id);
    endif;
    ?>
    
    <?php if ($node->type=='mt_slideshow_entry') { 
		
		$slideshow_entry_data_link = '';
		if ($node->field_mt_slideshow_entry_path):
		$slideshow_entry_data_link = $node->field_mt_slideshow_entry_path[$lang][0]['value'];
		endif; ?>
		<div data-thumb="<?php print $slideshow_image_thumb; ?>" data-src="<?php print $slideshow_image; ?>" data-link="<?php print $slideshow_entry_data_link; ?>">
        
		<?php } else { ?>
		<div data-thumb="<?php print $slideshow_image_thumb; ?>" data-src="<?php print $slideshow_image; ?>" data-link="<?php print $data_link; ?>">
        
    <?php } ?>
    
        <div class="camera_caption fadeFromBottom">
            <div class="camera_title"><?php print $node->title; ?></div>
            <div class="camera_body"><?php print $slideshow_text; ?></div>
        </div>
    </div>
    
    <?php } ?>

</div>

<?php
drupal_add_js(drupal_get_path('theme', 'photofolio3') .'/js/camera/jquery.easing.1.3.js');
drupal_add_js(drupal_get_path('theme', 'photofolio3') .'/js/camera/camera.js');
drupal_add_css(drupal_get_path('theme', 'photofolio3') . '/camera.css', array('group' => CSS_THEME, 'type' => 'file'));

$slideshow_effect=theme_get_setting('slideshow_effect');
$slideshow_time=theme_get_setting('slideshow_time')*1000;

drupal_add_js('jQuery(document).ready(function($) { 

$("#camera_wrap").camera({
	fx: "'.$slideshow_effect.'",
	time: "'.$slideshow_time.'",
	thumbnails: true,
	hover: false,
	height: "33%",
	loaderColor: "#b7b7b7",
	loaderBgColor: "#ffffff"
});

});',
array('type' => 'inline', 'scope' => 'header'));

?>