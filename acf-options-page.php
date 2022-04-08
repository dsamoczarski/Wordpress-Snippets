<?php
// muss in der functions.php hinterlegt werden

if( function_exists('acf_add_options_page') ) {

    // add parent
   $parent = acf_add_options_page(array(
       'page_title' 	=> 'Seitenoptionen',
       'menu_title' 	=> 'Optionen',
       'redirect' 		=> false
   ));


   // add sub page
   acf_add_options_sub_page(array(
       'page_title' 	=> 'Kontakt/Impressum',
       'menu_title' 	=> 'Kontakt/Impressum',
       'parent_slug' 	=> $parent['menu_slug'],
   ));



}
?>