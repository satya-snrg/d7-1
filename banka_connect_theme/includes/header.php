  <header id="header" class="clearfix" role="banner">
    <div class="columns-inner">
      <div class="brand">
        <div class="logo-main hide-in-mobile"><a href="<?php print $base_url; ?>"><img src="<?php echo (file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/images/logo-bancolombia_main.png')); ?>" /></a></div>
        <div class="logo-mobile show-in-mobile"><a href="<?php print $base_url; ?>"><img src="<?php echo(file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/images/logo-bancolombia_mobile.svg')); ?>"/></a></div>
        <div class="menu-mobile_toggle show-in-mobile">
          <i class="fas fa-bars"></i>
        </div>
        <div class="menu-apis_toggle">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <!--<?php if ($site_logo || $site_name || $site_slogan): ?>
        <div id="branding" class="branding-elements clearfix">

          <?php if ($site_logo): ?>
            <div id="logo">
              <?php print $site_logo; ?>
            </div>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <div id="name-and-slogan"<?php print $hgroup_attributes; ?>>

              <?php if ($site_name): ?>
                <h1 id="site-name"<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
              <?php endif; ?>

              <?php if ($site_slogan): ?>
                <h2 id="site-slogan"<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
              <?php endif; ?>



          <?php endif; ?>

        </div>
      <?php endif; ?>-->

      <?php print render($page['menu_bar']); ?>
      <?php print render($page['header']); ?>
      <div class="search-bar">
        <div class="search__toggle"><i class="fas fa-search"></i></div>
        <div class="search__box">
          <?php $block = module_invoke('search', 'block_view', 'search');
          print render($block); ?>
        </div>
      </div>
    </div>
  </header>
  <div class="main-menu_overlay">
    <div class="main-menu_mobile">
      <div class="logo-main"><a href=""><img src="<?php echo (file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/images/logo-bancolombia_main.svg')); ?>" /></a></div>
      <?php print render($page['menu_bar']); ?>
    </div>
  </div>