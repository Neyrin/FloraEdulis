<?php
declare(strict_types=1);

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ccc3f6f80711',
	'title' => 'PlantInfo',
	'fields' => array(
		array(
			'key' => 'field_5ccc3f8b0ed87',
			'label' => 'Author',
			'name' => 'author',
			'type' => 'text',
			'instructions' => 'The name of the botanist who validly published the name.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ccc417f0ed88',
			'label' => 'Color',
			'name' => 'plant_color',
			'type' => 'color_picker',
			'instructions' => 'The most common color of the plant.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5ccc433f34e0c',
			'label' => 'Main Photo',
			'name' => 'plant_photo',
			'type' => 'image',
			'instructions' => 'The first image shown on the individual plant page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, jpeg, png',
		),
		array(
			'key' => 'field_5ccc439434e0d',
			'label' => 'Latin Name',
			'name' => 'latin_name',
			'type' => 'text',
			'instructions' => 'The botanical latin name.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'plant',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;