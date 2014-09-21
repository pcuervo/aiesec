<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		//Tipo de noticia
		if( ! taxonomy_exists('tipos-de-noticias')){
			$labels = array(
				'name'              => 'Tipos de noticias',
				'singular_name'     => 'Tipo de noticia',
				'search_items'      => 'Buscar tipo de noticia',
				'all_items'         => 'Todos los tipos de noticias',
				'edit_item'         => 'Editar tipo de noticia',
				'update_item'       => 'Actualizar tipo de noticia',
				'add_new_item'      => 'Nuevo tipo de noticia',
				'new_item_name'     => 'Nombre Nuevo tipo de noticia',
				'menu_name'         => 'Tipos de noticias'
			);
			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'tipos-de-noticias' ),
			);

			register_taxonomy( 'tipos-de-noticias', 'noticias', $args );
		}


		// TERMS
		if ( ! term_exists( 'Eventos', 'tipos-de-noticias' ) ){
			wp_insert_term( 'Eventos', 'tipos-de-noticias' );
		}

		if ( ! term_exists( 'Oportunidades de negocio', 'tipos-de-noticias' ) ){
			wp_insert_term( 'Oportunidades de negocio', 'tipos-de-noticias' );
		}

		if ( ! term_exists( 'Noticias', 'tipos-de-noticias' ) ){
			wp_insert_term( 'Noticias', 'tipos-de-noticias' );
		}

	}