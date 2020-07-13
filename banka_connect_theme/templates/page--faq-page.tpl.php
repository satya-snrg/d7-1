<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/header.php'; ?>
<div id="columns" <?php print $page['menu_bar'] ? 'class="no-menu-bar"' : ''; ?>>
	<?php print $messages; ?>
	<?php print render($page['help']); ?>
	<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/menu-soporte.php'; ?>

	<div class="pages-soporte main-view-faq">
		<div class="content-soporte">
			<h1>Preguntas Frecuentes</h1>
			<?php echo views_embed_view('faq', 'faq_recent'); ?>
		</div>
		
	</div>
 
	<div id="notificationBox"></div>
</div>
<?php include_once drupal_get_path('theme', 'banka_connect_theme') . '/includes/footer.php'; ?>