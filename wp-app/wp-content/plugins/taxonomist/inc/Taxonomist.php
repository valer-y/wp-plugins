<?php

class Taxonomist {

	public function __construct() {
		$this->register();
	}

	public static function activation() {
		flush_rewrite_rules();
	}

	public static function deactivation() : void {

		flush_rewrite_rules();

	}

	public function register () {
		add_action('init', [$this, 'taxonomist_post_type']);
	}

	public function taxonomist_post_type() {

		$labels = array(
			'name'                  => _x( 'Taxonomist', 'Post type general name', 'taxonomist' ),
			'singular_name'         => _x( 'Book', 'Post type singular name', 'taxonomist' ),
			'menu_name'             => _x( 'Books', 'Admin Menu text', 'taxonomist' ),
			'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'taxonomist' ),
			'add_new'               => __( 'Add New', 'taxonomist' ),
			'add_new_item'          => __( 'Add New Book', 'taxonomist' ),
			'new_item'              => __( 'New Book', 'taxonomist' ),
			'edit_item'             => __( 'Edit Book', 'taxonomist' ),
			'view_item'             => __( 'View Book', 'taxonomist' ),
			'all_items'             => __( 'All Books', 'taxonomist' ),
			'search_items'          => __( 'Search Books', 'taxonomist' ),
			'not_found'             => __( 'No books found.', 'taxonomist' ),
			'not_found_in_trash'    => __( 'No books found in Trash.', 'taxonomist' ),
			'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'taxonomist' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'taxonomist' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor'),
		);

		register_post_type( 'taxonomist', $args );
	}

}