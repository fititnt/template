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

abstract class LibExample {

    public static $subpackage = null;


    /*
     * Return Facebook Object, creating if aready doesent exists
     */

    public static function getSubpackage() {
        if (!self::$subpackage) {
            jimport('libexample.subpackage.load');

            self::$subpackage = LoadSubpackage::getInstance();
        }
        return self::$subpackage;
    }

}
