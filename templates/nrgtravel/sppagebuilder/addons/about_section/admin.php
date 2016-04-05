<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_about_section',
		'category'=>'NRGtravel',
		'title'=>JText::_('About Section'),
		'desc'=>JText::_('"About Us" image and text.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the About Section.'),
				'std'=> 'About Us'
				),
			'body'=>array(
				'type'=>'textarea', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the About Section.'),
				'std'=> 'Nullam bibendum odio a sem bibendum, ut vestibulum ipsum porttitor. Sed finibus nec orci et cursus. Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoncus nisi sed, pulvinar ex. Aenean semper augue at lorem mattis, ac tempor leo mattis. Donec feugiat in sem sed pellentesque. Aliquam id ultricies augue.'
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Image'),
				'desc'=>JText::_('Recommended size is 380 x 400px.'),
				),
			)
		)
	);

