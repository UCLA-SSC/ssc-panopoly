<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php $blog_created_day = date('d', $created); ?>
<?php $blog_created_month = date('M', $created); ?>

<?php if ($page == 0) { ?>

    <div class="blog-title clearfix">
    
    	<?php if ($display_submitted): ?>
        <div class="blog-date">
            <div class="blog-date-inside">
            <div class="day"><?php print $blog_created_day; ?></div>
            <div class="month"><?php print $blog_created_month; ?></div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php print render($title_prefix); ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php print render($title_suffix); ?>
        
        <?php if ($display_submitted): ?>
        <div class="submitted">
        <?php print t('Submitted by !username', array('!username' => $name)); ?>
        </div>
        <?php endif; ?>
        
    </div> 

<?php } else { ?>
    
    <div class="blog-title clearfix">
    
    	<?php if ($display_submitted): ?>
        <div class="blog-date">
            <div class="blog-date-inside">
            <div class="day"><?php print $blog_created_day; ?></div>
            <div class="month"><?php print $blog_created_month; ?></div>
            </div>
        </div>
        <?php endif; ?>
        
		<?php print render($title_prefix); ?>
        <h1<?php print $title_attributes; ?> class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
        
        <?php if ($display_submitted): ?>
        <div class="submitted">
        <?php print t('Submitted by !username', array('!username' => $name)); ?>
        </div>
        <?php endif; ?>
        
    </div>
    
<?php }  ?>

	<div class="content clearfix"<?php print $content_attributes; ?>>
    <?php print $user_picture; ?>
	<?php
	// We hide the comments and links now so that we can render them later.
	hide($content['comments']);
	hide($content['links']);
	print render($content);
	?>
	</div>
	
	<?php print render($content['links']); ?>
	
	<?php print render($content['comments']); ?>

</div>