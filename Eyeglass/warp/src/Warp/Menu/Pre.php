<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

namespace Warp\Menu;

/**
 * Pre menu renderer.
 */
class Pre
{
    /**
     * Process menu
     * 
     * @param  object $module  
     * @param  object $element 
     * @return object          
     */
    public function process($module, $element)
    {
        return $element;
    }
}
