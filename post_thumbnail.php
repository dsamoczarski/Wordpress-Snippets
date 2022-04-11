<?php 
// Direkte Ausgabe als fertiges Bild im Template

the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );          // Full resolution (original size uploaded
the_post_thumbnail( 'customsizename' );     // Thumbnailgröße, die zuvor in der functions.php definiert wurde

// Abrufen und zwischenspeichern der Thumbnaildaten
$image_data = get_the_post_thumbnail( get_the_id(), 'thumbnail' );