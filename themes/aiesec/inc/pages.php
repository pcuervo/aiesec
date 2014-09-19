<?php
// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Acerca
		if( ! get_page_by_path('acerca') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Acerca',
				'post_name'   => 'acerca',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});