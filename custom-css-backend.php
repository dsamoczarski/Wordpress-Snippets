<?php 
    // muss in der functions.php hinterlegt werden
    
        function wptutsplus_admin_styles() {
            echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/backend.css?v=1" />'; 
            }
            add_action( 'admin_enqueue_scripts', 'wptutsplus_admin_styles' );
?>







