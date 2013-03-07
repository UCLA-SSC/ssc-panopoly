<?php

/**
 * @file
 * Override of the default maintenance page.
 *
 * This is an override of the default maintenance page. Used for Garland and
 * Minnelli, this file should not be moved or modified since the installation
 * and update pages depend on this file.
 *
 * This mirrors closely page.tpl.php for Garland in order to share the same
 * styles.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <link rel="stylesheet" type="text/css" href="<?php print drupal_get_path('theme', 'photofolio3') . '/fonts/opensans-font.css' ?>" />
    <?php print $styles ?>
    <?php print $scripts ?>
    </head>
    
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <div id="wrapper" class="container_12">
        
        <div id="header" class="clearfix">
            
            <div class="grid_12">
                <div id="header-left" class="clearfix">
                    <?php if ($logo):?>
                    <div id="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($site_name):?>
                    <div id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($site_slogan):?>
                    <div id="site-slogan">
                    <?php print $site_slogan; ?>
                    </div>
                    <?php endif; ?>
    
                </div><!--EOF:#header-left-->
            </div>
            
        </div><!--EOF:#header-->
    
        <div id="page" class="clearfix">
        
            <div class="grid_12">
            
                <div id="main" class="clearfix">
                
                <?php print $messages; ?>
                <?php if ($title): ?><h1 class="title"><?php print $title; ?></h1> <?php endif; ?>
                <?php print $content; ?>
    
                </div><!-- EOF:#main -->
                
            </div>
        
        </div><!-- EOF: #content -->
    
        <div id="footer-bottom" class="clearfix">
        
            <div class="grid_12">
        
                <div id="footer-bottom-inside" class="clearfix">
                
                </div>
            
            </div>
        
        </div><!-- EOF:#footer-bottom -->
    
    </div>

  </body>
</html>