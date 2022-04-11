<?php 
// Ermittlung der aktuellen Kategorie-ID in der category.php

$my_cat_id = $cat;  // $cat ist eine von WP bereitgestellte Variable, die auf Kategorieseiten mit der Kategorie-ID versehen ist

// Namen der Kategorie ermitteln
$cat_name = get_cat_name($my_cat_id);

// Kategorie-Beschreibung ermitteln
$cat_description = category_description($my_cat_id);
