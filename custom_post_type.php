<?php
// muss in der functions.php hinterlegt werden

add_action( 'init', 'create_post_type' );
function create_post_type()
{
   register_post_type( 'referenzen', array(
											 'labels' => array(
															   'name' => __( 'Referenzen' ),
															   'singular_name' => __( 'Referenz' )
															  ),
										     'public' => true,
											 'has_archive' => true,
											 'rewrite' => true,
											 'menu_icon' => 'dashicons-megaphone',
											 'label' => 'groups',
										  )
					 );
}
?>