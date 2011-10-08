<?php

/*
 * @package         {packagename}
 * @subpackage      {subpackage}
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @note            Startup based on https://github.com/fititnt/template
 */
defined('JPATH_PLATFORM') or die('Restricted access');

class LoadSubpackage {
    
    /*
     *  @todo: add some description here. 
     */
    public static function getInstance() 
    {
        require_once 'subpackage.php';
        $instance = new LibexampleSubpackage;
        return $instance;
    }

}