<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/header.php'; ?>


<div id="columns" <?php print $page['menu_bar'] ? 'class="no-menu-bar"' : ''; ?>>
	<?php print $messages; ?>
	<?php print render($page['help']); ?>
	<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/menu-soporte.php'; ?>


	<div class="pages-soporte main-view-contact">
	          <?php if ($content = render($page['content'])): ?>
	            <div class="content-soporte">
	            	<h1>Contáctanos</h1>
	              <?php print $content; ?>
	            </div>
	          <?php endif; ?>

		
	</div>

	<div id="notificationBox"></div>
</div>
<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/footer.php'; ?>
	 
