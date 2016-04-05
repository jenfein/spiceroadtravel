<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_portfolio','sp_portfolio_addon');

function sp_portfolio_addon($atts){

	extract(spAddonAtts(array(
		'id'					=>'',
		'title'					=>'',
		'image'					=>'',
		), $atts));

	if(!$id) return;
	
	//Query Module
	$app		= JFactory::getApplication();
	$user		= JFactory::getUser();
	$groups		= implode(',', $user->getAuthorisedViewLevels());
	$lang 		= JFactory::getLanguage()->getTag();
	$clientId 	= (int) $app->getClientId();

	$db	= JFactory::getDbo();
	$query = $db->getQuery(true);
	$query->select('m.id, m.title, m.module, m.position, m.ordering, m.content, m.showtitle, m.params');
	$query->from('#__modules AS m');
	$query->where('m.published = 1');
	$query->where('m.id = ' . $id);

	$date = JFactory::getDate();
	$now = $date->toSql();
	$nullDate = $db->getNullDate();
	$query->where('(m.publish_up = '.$db->Quote($nullDate).' OR m.publish_up <= '.$db->Quote($now).')');
	$query->where('(m.publish_down = '.$db->Quote($nullDate).' OR m.publish_down >= '.$db->Quote($now).')');

	$query->where('m.access IN ('.$groups.')');
	$query->where('m.client_id = '. $clientId);	

	// Filter by language
	if ($app->isSite() && $app->getLanguageFilter()) {
		$query->where('m.language IN (' . $db->Quote($lang) . ',' . $db->Quote('*') . ')');
	}

	// Set the query
	$db->setQuery($query);
	$module = $db->loadObject();

	if (!$module) return null;
	$file				= $module->module;
	$custom				= substr($file, 0, 4) == 'mod_' ?  0 : 1;
	$module->user		= $custom;
	$module->name		= $custom ? $module->title : substr($file, 4);
	$module->style		= null;
	$module->position	= strtolower($module->position);
	$clean[$module->id]	= $module;

	$output  = '  	<section class="t-gallery scroll-to-block">
            			<div class="container">
                			<div class="t-title-block">';
	if($image) $output .= '             	<img src="'. $image .'" alt="img"/>';
	$output .= '                    	<h2 class="block-title t-about-title">'. $title .'</h2>
                			</div>
				</div>';
	$output .= JModuleHelper::renderModule(  $module, array('style' => 'none'));
	$output .= '   	</section>';

	return $output;

}