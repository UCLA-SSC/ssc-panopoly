<?php if (theme_get_setting('scrolltop_display')): ?>
<div id="toTop"></div>
<?php endif; ?>

<div id="wrapper" class="container_12">
    
    <div id="header" class="clearfix">
        
        <div class="grid_4">
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
        
        <div class="grid_8">
        	<div id="header-right" class="clearfix">
            
                <div id="main-navigation" class="clearfix">
                <?php if ($page['navigation']) :?>
                <?php print drupal_render($page['navigation']); ?>
                <?php else : ?>
                <div id="main-menu">
                <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>
                </div>
                <?php endif; ?>
                </div>
                
                <?php if ($page['header']) :?>
                <?php print render($page['header']); ?>
                <?php endif; ?>
            
            </div><!--EOF:#header-right-->
        
        </div>
        
    </div><!--EOF:#header-->

    <!-- #banner -->
    <?php if ($page['banner']):?>
    <div id="banner" class="clearfix">
        <div class="grid_12">
        <?php print render($page['banner']); ?>
        </div>
    </div>
    <?php endif; ?>
    <!-- EOF: #banner -->

    <div id="page" class="clearfix">
    
		<?php if ($page['sidebar_first']) { ?>
        <div class="grid_8">
        <?php } else { ?>
        <div class="grid_12">
        <?php } ?>
        
            <div id="main" class="clearfix">
            
                <!-- #highlighted -->
                <?php if ($page['highlighted']):?>
                <div id="highlighted" class="clearfix">
                <?php print render($page['highlighted']); ?>
                </div>
                <?php endif; ?>
                <!-- EOF: #highlighted -->
                
                <!-- #messages-console -->
                <?php if ($messages):?>
                <div id="messages-console" class="clearfix">
                <?php print $messages; ?>
                </div>
                <?php endif; ?>
                <!-- EOF: #messages-console -->
                
 				<?php if ($breadcrumb && theme_get_setting('breadcrumb_display')):?>
                <div id="breadcrumb">
                <?php print $breadcrumb; ?>
                </div>
                <?php endif; ?>
                
                <?php if ($tabs):?>
                <div class="tabs">
                <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title):?>
                <h1 class="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                
                <?php if ($action_links):?>
                <ul class="action-links">
                <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                <?php print render($page['content']); ?>
             
             	<?php if (theme_get_setting('feed_icons_display')):?>
                <?php print $feed_icons; ?>
                <?php endif; ?>

            </div><!-- EOF:#main -->
            
        </div>

        <!-- #sidebar -->
        <?php if ($page['sidebar_first']):?>
        <div class="grid_4">
        <div id="sidebar" class="clearfix">
        <?php print render($page['sidebar_first']); ?>
        </div>
        </div>
        <?php endif; ?>
        <!-- EOF: #sidebar -->
    
    </div><!-- EOF: #content -->
  
  	<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']):?>
    <div id="footer" class="clearfix">
    
    	<div class="grid_12">
        	
            <div id="footer-inside-wrapper" class="clearfix">
            
                <div id="footer-inside" class="clearfix">
           
                    <div class="grid_4">
                        <!-- #footer-first -->
                        <?php if ($page['footer_first']):?>
                        <div class="footer-area">
                        <?php print render($page['footer_first']); ?>
                        </div>
                        <?php endif; ?>
                        <!-- EOF: #footer-first -->
                    </div>
                    
                    <div class="grid_4 alpha omega">
                        <!-- #footer-second -->
                        <?php if ($page['footer_second']):?>
                        <div class="footer-area">
                        <?php print render($page['footer_second']); ?>
                        </div>
                        <?php endif; ?>
                        <!-- EOF: #footer-second -->
                    </div>
                    
                    <div class="grid_4">
                        <!-- #footer-third -->
                        <?php if ($page['footer_third']):?>
                        <div class="footer-area">
                        <?php print render($page['footer_third']); ?>
                        </div>
                        <?php endif; ?>
                        <!-- EOF: #footer-third -->
                    </div>
            
            	</div>
            
            </div>
        
        </div>
             
    </div><!-- EOF:#footer -->
    <?php endif; ?>

	<?php if ($page['footer'] || $page['footer_bottom']):?>
    <div id="footer-bottom" class="clearfix">
    
    	<div class="grid_12">
    
    		<div id="footer-bottom-inside" class="clearfix">
    
                <div class="grid_8 alpha">
                    <!-- #footer-bottom-left -->
                    <?php if ($page['footer']):?>
                    <div id="footer-bottom-left" class="footer-area">
                    <?php print render($page['footer']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- EOF: #footer-bottom-left -->
                </div>
                
                <div class="grid_4 omega">
                    <!-- #footer-bottom-right -->
                    <?php if ($page['footer_bottom']):?>
                    <div id="footer-bottom-right" class="footer-area">
                    <?php print render($page['footer_bottom']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- EOF: #footer-bottom-right -->
                </div>
            
            </div>
        
        </div>
    
    </div><!-- EOF:#footer-bottom -->
    <?php endif; ?>

</div>