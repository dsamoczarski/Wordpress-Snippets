<?php
// muss in der functions.php hinterlegt werden

function dsa_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'dsa_custom_excerpt_length', 999 );
?>