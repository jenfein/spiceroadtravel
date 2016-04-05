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
		'addon_name'=>'sp_latest_articles',
		'category'=>'NRGtravel',
		'title'=>JText::_('Latest Articles'),
		'desc'=>JText::_('Latest blog posts/articles'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the section.'),
				'std'=>  'From the blog'
				),
			'desc'=>array(
				'type'=>'text', 
				'title'=>JText::_('Description'),
				'desc'=>JText::_('Description for the section.'),
				'std'=>  'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.'
				),	
			'id'=>array(
				'type'=>'module', 
				'title'=>JText::_('Latest Articles Module'),
				'desc'=>JText::_('Select the module to display the latest articles.'),
				),
			)

		)
	);