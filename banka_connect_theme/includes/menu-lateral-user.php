

<div class="menu-lateral-user">
	
	<?php 
		global $user;

		if ($user->picture!=0) {
			$picture= $user->picture;
		}else{
			$picture = file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/images/user_default.png');
		}
 	?>

 	<div>
 		<img id="user-img-sm" src="<?php echo($picture); ?>">
 		<?php print drupal_render(menu_tree('user-menu')); ?>
 	</div>
</div>