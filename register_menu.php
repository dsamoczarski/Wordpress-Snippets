<?php
// muss in der functions.php hinterlegt werden

// Eigene Navigation registrieren
function register_my_menus()
{
      register_nav_menus
      (
        array(
          'header-menu' => __( 'Header Menu' ),
          'footer-menu' => __( 'Footer Menu' ),
          'footer-menu-lp' => __( 'Footer Menu LPs' ),
		  'datenschutz' => __( 'Datenschutz' )
             ) 
      );
}
add_action( 'init', 'register_my_menus' );
?>