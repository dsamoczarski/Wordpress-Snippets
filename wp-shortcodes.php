<?php
// muss in der functions.php hinterlegt werden

function secure_iframe() { 
  $iframe_url = get_field('url_datenschutzerklarung', 'options'); 
  $return = '<iframe class="dsa-frame" src="'.$iframe_url.'"></iframe>'; 
  // $return kann alles sein, - die Telefonnummer, eine Textpassage, oder Informationen aus der Datenbank.
  return $return;
  } 
  // register shortcode
  add_shortcode('secure_frame', 'secure_iframe');


  // Für erweiterte Shortocde siehe https://bit.ly/35UB9K6
  ?>