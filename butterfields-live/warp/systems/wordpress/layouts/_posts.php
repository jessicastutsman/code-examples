<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// init vars
$colcount = is_front_page() ? $this['config']->get('multicolumns', 1) : 1;
$posts_fp = $this['config']->get('posts_on_frontpage');
$count    = $this['system']->getPostCount();
$rows     = ceil($count / $colcount);
$columns  = array();
$row      = 0;
$column   = 0;
$i        = 0;

if (is_front_page() && ($posts_fp && $posts_fp !== 'default')) {
    query_posts( 'posts_per_page='.$posts_fp );
}

// create columns
while (have_posts()) {
    the_post();

    if ($this['config']->get('multicolumns_order', 1) == 0) {
        // order down
        if ($row >= $rows) {
            $column++;
            $row  = 0;
            $rows = ceil(($count - $i) / ($colcount - $column));
        }
        $row++;
    } else {
        // order across
        $column = $i % $colcount;
    }

    if (!isset($columns[$column])) {
        $columns[$column] = '';
    }

    $columns[$column] .= $this->render('_post', array('is_column_item' => ($colcount > 1)));
    $i++;
}

// render columns
if ($count = count($columns)) {
    echo '<div class="uk-grid" data-uk-grid-match data-uk-grid-margin>';
    for ($i = 0; $i < $count; $i++) {
        echo '<div class="uk-width-medium-1-'.$count.'">'.$columns[$i].'</div>';
    }
    echo '</div>';
}
