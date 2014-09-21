<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){


		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		if( has_term( 'eventos', 'tipos-de-noticias', $post_id ) ) {
			add_meta_box( 'fecha', 'Fecha', 'fecha_meta_callback', 'noticias', 'side', 'high' );
		}


	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function fecha_meta_callback($post){
		$fecha_inicio = get_post_meta($post->ID, '_fecha_inicio_meta', true);
		$fecha_final = get_post_meta($post->ID, '_fecha_final_meta', true);
		wp_nonce_field(__FILE__, '_fecha_inicio_meta_nonce');
		wp_nonce_field(__FILE__, '_fecha_final_meta_nonce');
echo <<<END
	<label>De:</label>
	<input type="text" class="widefat datepicker" id="fecha_inicio" name="_fecha_inicio_meta" value='$fecha_inicio' />
	<label>A:</label>
	<input type="text" class="widefat datepicker" id="fecha_final" name="_fecha_final_meta" value='$fecha_final'>
END;
	}


// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id))
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE )
			return $post_id;


		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) )
			return $post_id;


		if ( isset($_POST['_fecha_inicio_meta']) and check_admin_referer(__FILE__, '_fecha_inicio_meta_nonce') ){
			update_post_meta($post_id, '_fecha_inicio_meta', $_POST['_fecha_inicio_meta']);
		}
		if ( isset($_POST['_fecha_final_meta']) and check_admin_referer(__FILE__, '_fecha_final_meta_nonce') ){
			update_post_meta($post_id, '_fecha_final_meta', $_POST['_fecha_final_meta']);
		}


		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
