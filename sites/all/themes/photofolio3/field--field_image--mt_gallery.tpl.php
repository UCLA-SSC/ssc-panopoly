<?php if (!$label_hidden) : ?>
<div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
<?php endif; ?>

<?php
// Reduce number of images in teaser view mode to single image
if ($element['#view_mode'] == 'teaser') : ?>
<div class="field-item field-type-image even"<?php print $item_attributes[0]; ?>><?php print render($items[0]); ?></div> 
<?php return; endif; ?>

<?php $node=$element['#object']; $lang="und"; ?>

<div class="gallery-node yoxview clearfix">

	<?php foreach ($node->field_image[$lang] as $key=>$file) { ?>
    
    <div class="gallery-item">
        <div><a href="<?php print file_create_url($node->field_image[$lang][$key]['uri']) ?>">
        <img src="<?php print image_style_url('large', $node->field_image[$lang][$key]['uri']); ?>" alt="<?php print $node->field_image[$lang][$key]['alt']; ?>" title="<?php print $node->field_image[$lang][$key]['title']; ?>"/>
        </a></div>
        
        <?php if ($node->field_image[$lang][$key]['title'] || $node->field_image[$lang][$key]['alt']) :?>
        <div class="gallery-content">
            <div class="gallery-title"><h2><?php print $node->field_image[$lang][$key]['title']; ?></h2></div>
            <div class="gallery-body"><?php print $node->field_image[$lang][$key]['alt']; ?></div>
        </div>
        <?php endif; ?>
    </div>
    
    <?php } ?>

</div>

<?php
drupal_add_js(drupal_get_path('theme', 'photofolio3') .'/js/yoxview/yoxview-init.js');

drupal_add_js('jQuery(document).ready(function($) {

$(".yoxview").yoxview({
lang : "en",
autoHideMenu: false
});

});',
array('type' => 'inline', 'scope' => 'footer')); 
?>