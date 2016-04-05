<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_portfolio',
		'category'=>'NRGtravel',
		'title'=>JText::_('Portfolio'),
		'desc'=>JText::_('Portfolio items with lightbox popup.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the section.'),
				'std'=>  'Latest Works'
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Icon to display above the title. Recommended size is 150 x 50px.'),
				),
			'id'=>array(
				'type'=>'module', 
				'title'=>JText::_('Latest Articles Module'),
				'desc'=>JText::_('Select the module to display the latest articles.'),
				),
			)

		)
	);