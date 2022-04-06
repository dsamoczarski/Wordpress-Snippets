<?php

// Hinterlegen in der functions.php
function breadcrumb($currentid)
{
    echo ' <ol id="breadcrumb_dsa" itemscope itemtype="https://schema.org/BreadcrumbList">' . "\n";
    $meta_position = 1;
    if (get_post_ancestors($currentid)) :
        $parentids = get_post_ancestors($currentid);
        $parentids = array_reverse($parentids);
        foreach ($parentids as $parent) :
            echo ' <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="' . get_permalink($parent) . '" href="' . get_permalink($parent) . '"><span itemprop="name">' . get_the_title($parent) . '</span></a> <meta itemprop="position" content="' . $meta_position . '" /> >&nbsp;</li>' . "\n";
            $meta_position++;
        endforeach;
    endif;
    echo ' <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="' . get_permalink(get_the_id()) . '" href="' . get_permalink(get_the_id()) . '"><span itemprop="name">' . get_the_title(get_the_id()) . '</span></a> <meta itemprop="position" content="' . $meta_position . '" /></li>';
    echo '</ol>';
}


//Ausgabe im Theme:

breadcrumb(get_the_id()); // Gilt nur für Seiten, Beiträge und Custom-Post-Types