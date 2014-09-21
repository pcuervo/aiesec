<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// Involucramientos
		$labels = array(
			'name'          => 'Involucramientos',
			'singular_name' => 'Involucramiento',
			'add_new'       => 'Nuevo Involucramiento',
			'add_new_item'  => 'Nuevo Involucramiento',
			'edit_item'     => 'Editar Involucramiento',
			'new_item'      => 'Nuevo Involucramiento',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Involucramientos',
			'search_items'  => 'Buscar Involucramientos',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Involucramientos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'involucramientos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'involucramientos', $args );

		// NOTICIAS
		$labels = array(
			'name'          => 'Noticias',
			'singular_name' => 'Noticia',
			'add_new'       => 'Nueva Noticia',
			'add_new_item'  => 'Nueva Noticia',
			'edit_item'     => 'Editar Noticia',
			'new_item'      => 'Nueva Noticia',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Noticia',
			'search_items'  => 'Buscar Noticia',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Noticias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'noticias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'tipos-de-noticias' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'noticias', $args );

		// CONTACTO
		$labels = array(
			'name'          => 'Contacto',
			'singular_name' => 'Contacto',
			'add_new'       => 'Nuevo Contacto',
			'add_new_item'  => 'Nuevo Contacto',
			'edit_item'     => 'Editar Contacto',
			'new_item'      => 'Nuevo Contacto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Contacto',
			'search_items'  => 'Buscar Contacto',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Contacto'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'contacto' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'contacto', $args );

	});