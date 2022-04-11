<?php 
    // muss in der functions.php hinterlegt werden

function reorder_comment_form($fields)
{
  $ordered_comment_fields = array(
      // Reihenfolge im Array bestimmt die Ausgabe im Formular
    $fields['author'], $fields['email'], $fields['cookies'], $fields['comment']
  );
  return $ordered_comment_fields;
}
add_filter('comment_form_fields', 'reorder_comment_form');