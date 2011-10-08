<?php
/*
 * @package         <packagename>
 * @author          <authorname>
 * @version         <version>
 * @copyright       Copyright (C) <year> <copyright>
 * @license         GNU General Public License version 3. See license.txt
 * 
 * @note            Initial template based on https://github.com/fititnt/template via @fititnt
 */
defined('JPATH_PLATFORM') or die('Restricted access');

class LoadTwitter
{

    public static function getInstance()
    {
        require_once dirname(__FILE__) . DS . 'twitter.php';
        $instance = new HELLOWORLDTwitter;
        return $instance;
    }

}