<?php
/*
 * @package         {packagename}
 * @subpackage
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @note            Startup based on https://github.com/fititnt/template
 */
defined('_JEXEC') or die('Restricted access');

// Include helper file once
require_once dirname(__FILE__).'/helper.php';

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content);
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_example', $params->get('layout', 'default'));
