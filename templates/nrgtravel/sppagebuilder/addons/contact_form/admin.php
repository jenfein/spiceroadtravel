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
		'addon_name'=>'sp_contact_form',
		'category'=>'NRGtravel',
		'title'=>JText::_('Contact Form'),
		'desc'=>JText::_('Contact form with map'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the contact form section.'),
				'std'=>  'How to find us'
				),
			'desc'=>array(
				'type'=>'text', 
				'title'=>JText::_('Description'),
				'desc'=>JText::_('Description for the contact form section.'),
				'std'=>  'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.'
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Icon to display above the title. Recommended size is 150 x 50px.'),
				),		
			'body'=>array(
				'type'=>'textarea', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the contact form section.'),
				'std'=>  'Cum sociis natoque penatibus et magnis dis parturient montes'
				),
			'latitude'=>array(
				'type'=>'text', 
				'title'=>JText::_('Map Latitude'),
				'desc'=>JText::_('Latitude to display for the map.'),
				'std'=>  '43.653226'
				),	
			'longitude'=>array(
				'type'=>'text', 
				'title'=>JText::_('Map Longitude'),
				'desc'=>JText::_('Longitude to display for the map.'),
				'std'=>  '-79.383184'
				),	
			'marker_text'=>array(
				'type'=>'text', 
				'title'=>JText::_('Marker Text'),
				'desc'=>JText::_('Text to display for the map marker.'),
				'std'=>  '1. Here is some address or email or phone or something else...'
				),	
			'id'=>array(
				'type'=>'module', 
				'title'=>JText::_('Contact Form Module'),
				'desc'=>JText::_('Select the module to display as the contact form.'),
				),
			)

		)
	);