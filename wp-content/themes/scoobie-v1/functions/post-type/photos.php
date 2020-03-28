<?php
function photos() {
	register_post_type( 'photos',
	array(
		'labels' => array(
			'name' => __( 'Photos' ),
			'singular_name' => __( 'Photo' )
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
	)
  );
}

add_action('init', 'photos'); 


$args = array(
	'labels' => $labels,
	'hierarchical' => true,
	'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
	'publicly_queriable' => true,  // you should be able to query it
	'show_ui' => true,  // you should be able to edit it in wp-admin
	'exclude_from_search' => false,  // you should exclude it from search results
	'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
	'has_archive' => false,  // it shouldn't have archive page
	'rewrite' => false,  // it shouldn't have rewrite rules
);
