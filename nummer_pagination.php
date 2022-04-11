<?php
// muss in der functions.php hinterlegt werden

function pagination_numbers()
{
    $range = 2;
    $pages = '';

    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class=\"pagination\">";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>1...</a>";


        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<a href='#' class='active'><span class=\"current\">" . $i . "</span></a>" : "<a href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a>";
            }
        }
        if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages);
        echo "</div>\n";
    }
}
