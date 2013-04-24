<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header" role="header">
<div id="top-container">
		<div id="top-logo">
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
		</div>
		
		<div class="hidden-mobile hidden-tablet" id="social-buttons">
			<img src="<?php print $front_page; ?>sites/all/themes/radix_divisional_dark/images/twitter_white.png">
			<img src="<?php print $front_page; ?>sites/all/themes/radix_divisional_dark/images/facebook_white.png">
			<img src="<?php print $front_page; ?>sites/all/themes/radix_divisional_dark/images/google_white.png">
		</div>

		
</header>
  <div class="container">

    <div id="navigation" class="navbar">
      <div class="navbar-inner">
        <div class="container clearfix">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar btn-navbar-menu" data-toggle="collapse" data-target=".nav-menu-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="btn btn-navbar btn-navbar-search" data-toggle="collapse" data-target=".nav-search-collapse">
            <span class="icon-search"></span>
          </a>

          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="pull-left brand">
              <?php print $site_name; ?>
            </a>
          <?php endif; ?>

          <div class="nav-collapse nav-menu-collapse">
            <div class="inner">
              <?php if ($main_menu): ?>
                <nav id="main-menu" class="main-menu" role="navigation">
                  <?php print render($main_menu); ?>
                </nav> <!-- /#main-menu -->
              <?php endif; ?>
            </div>
          </div>

          <div class="nav-collapse nav-search-collapse">
            <div class="inner">
              <?php if ($search_form): ?>
                <?php print $search_form; ?>
              <?php endif; ?>
            </div>
          </div>

      </div>
    </div> <!-- /#navigation -->
  </div>

<div id="main-wrapper">
  <div id="main" class="main <?php if (!$is_panel) { print 'container'; } ?>">
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="visible-desktop">
        <div class="container">
          <?php print $breadcrumb; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($messages): ?>
      <div id="messages">
        <div class="container">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>
    <div id="content">
      <a id="main-content"></a>
      <div id="page-header">
          <div class="container">
            <?php if ($title): ?>
              <div class="page-header">
                <h1 class="title"><?php print $title; ?></h1>
              </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
      </div>
      <?php print render($page['content']); ?>
    </div>
  </div>
</div>

<?php print render($page['footer']); ?>
