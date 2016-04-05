<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_hero_image',
		'category'=>'NRGtravel',
		'title'=>JText::_('Hero Image'),
		'desc'=>JText::_('Hero Image Only.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for this Section.'),
				'std'=> 'Hero'
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Hero Image'),
				'desc'=>JText::_('Recommended size is 1400 x 800px.'),
				),

			)
		)
	);

