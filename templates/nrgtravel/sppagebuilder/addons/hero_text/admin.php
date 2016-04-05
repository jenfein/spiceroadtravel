<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_hero_text',
		'category'=>'NRGtravel',
		'title'=>JText::_('Hero with text'),
		'desc'=>JText::_('Hero with text.'),
		'attr'=>array(
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Background Image'),
						'desc'=>JText::_('Recommended size is 1400 x 800px.'),
						),

					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Title'),
						'desc'=>JText::_('Title for this Hero Section.'),
						'std'=> 'HERO'
						),
					'body'=>array(
						'type'=>'textarea', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('Body for the Hero Section.'),
						'std'=> 'Nullam bibendum odio a sem bibendum, ut vestibulum ipsum porttitor. Sed finibus nec orci et cursus. Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoncus nisi sed, pulvinar ex. Aenean semper augue at lorem mattis, ac tempor leo mattis. Donec feugiat in sem sed pellentesque. Aliquam id ultricies augue.'
						),
			)
		)
	);

