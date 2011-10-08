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


abstract class LibExample
{

    public static $facebook = null;
    public static $twitter = null;

    
    /*
    * Return Facebook Object, creating if aready doesent exists
    */
    public static function getFacebook()
	{
		if (!self::$facebook) {
			jimport('helloworld.facebook.load');

			self::$facebook = LoadFacebook::getInstance();
		}
		return self::$facebook;
	}
        

    /*
    * Return Facebook Object, creating if aready doesent exists
    */
    public static function getTwitter()
	{
		if (!self::$twitter) {
			jimport('helloworld.twitter.load');

			self::$twitter = LoadTwitter::getInstance();
		}
		return self::$twitter;
	}
	
}