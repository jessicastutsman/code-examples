<?php
/**
* @package   Avanti
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// check compatibility
if (version_compare(PHP_VERSION, '5.3', '>=')) {

    // bootstrap warp
    require(__DIR__.'/warp.php');
}


//allow php in widgets

add_filter('widget_text','execute_php',100);

add_filter('the_content','execute_php',100);

function execute_php($html){

     if(strpos($html,"<"."?php")!==false){

          ob_start();

          eval("?".">".$html);

          $html=ob_get_contents();

          ob_end_clean();

     }

     return $html;

}