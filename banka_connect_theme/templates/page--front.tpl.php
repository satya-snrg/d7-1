<div id="page" class="container <?php print $classes; ?>">

  <?php print render($page['top_menu']); ?>

  <?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/header.php'; ?>
  <?php //$block = module_invoke('block', 'block_view', '8'); print render ($block['content']); ?>
  <?php print render($page['featured_home']); ?>
  <div class="home__products hide-in-mobile">
    <div class="columns-inner clearfix">
      <?php echo views_embed_view('featured_items', 'block_1'); ?>
    </div>
  </div>

  <div id="columns" <?php print $page['menu_bar'] ? 'class="no-menu-bar"' : ''; ?>>
    <div class="columns-inner clearfix">

      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <?php print render($page['secondary_content']); ?>
      <?php print render($page['home']); ?>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
    <?php print render($page['tertiary_content']); ?>

  </div>
</div>
<div id="home__api-products" class="hide-in-mobile">
  <div class="columns-inner clearfix">
    <div class="section__heading">
      <?php //$block = module_invoke('block', 'block_view', '9'); print render ($block['content']); ?>
      <?php print render($page['products_home']); ?>
    </div>
    <?php echo views_embed_view('featured_items', 'block_2'); ?>
  </div>
</div>

<?php if (
  $page['footer'] ||
  $page['four_first'] ||
  $page['four_second'] ||
  $page['four_third'] ||
  $page['four_fourth']
): ?>
  <?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/footer.php'; ?>
<?php endif; ?>

</div><!-- //End #page, .container -->

<?php if ($collapsible = render($page['collapsible'])): ?>
  <section id="section-collapsible" class="section-collapsible clearfix">
    <h2 class="collapsible-toggle">
      <span class="togglebg">
        <a href="#" title="<?php print t('Toggle collapsible region'); ?>"><?php print t('Toggle collapsible region'); ?></a>
      </span>
    </h2>
    <?php print $collapsible; ?>
  </section>
<?php endif; ?>