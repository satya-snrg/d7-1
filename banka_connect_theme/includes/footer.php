<footer role="contentinfo">
    <?php if (
      $page['four_first'] ||
      $page['four_second'] ||
      $page['four_third'] ||
      $page['four_fourth']
    ): ?>
      <!-- Four column Gpanel -->
      <div class="at-panel gpanel panel-display four-4x25 clearfix">
        <div class="panel-row row-1 clearfix">
          <?php print render($page['four_first']); ?>
          <?php print render($page['four_second']); ?>
        </div>
        <div class="panel-row row-2 clearfix">
          <?php print render($page['four_third']); ?>
          <?php print render($page['four_fourth']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="scroll-top">
     <i class="fas fa-angle-up"></i>
    </div>

    <ul class="aux-menu-footer">
      <li><a href="/node" title="">Blogs</a></li>
      <li><a href="/forum" title="">Foros</a></li>
      <li><a href="/faq-page" title="">Soporte</a></li>
    </ul>

    <?php if ($page['footer']): print render($page['footer']); endif; ?>

    <img class="img-footer" src="<?php echo (file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/images/logo-bancolombia-footer.svg')); ?>" alt="">
  </footer>