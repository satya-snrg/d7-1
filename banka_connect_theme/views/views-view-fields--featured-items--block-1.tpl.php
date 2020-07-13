<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>



<div class="item">
	<div class="item__image">
		<img typeof="foaf:Image" class="image-style-none" src="<?php print file_create_url(drupal_get_path('theme', 'banka_connect_theme') . '/img_front/' . product_random_image($fields['title']->content)); ?>" alt="">
	</div>
	<div class="item__description">
		<h3><?php print $fields['title']->content; ?></h3>
		<div class="item__rating">
			<?php print $fields['field_productrating']->content; ?>
		</div>
		<?php print $fields['product_description']->content;?>


        <a href="/node/<?php print $fields['nid']->content; ?>" class="btn btn-primary btn-small btn-full">Ir a...</a>

	</div>
</div>