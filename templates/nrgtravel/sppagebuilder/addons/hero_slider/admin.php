<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_hero_slider',
		'category'=>'NRGtravel',
		'title'=>JText::_('Hero Slider'),
		'desc'=>JText::_('Hero slider with images text.'),
		'attr'=>array(
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Default Background Image'),
						'desc'=>JText::_('Recommended size is 1400 x 800px.'),
						),

			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_hero_slider_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Title'),
						'desc'=>JText::_('Title for the slide'),
						'std'=>'Maldives',
						),
					'price'=>array(
						'type'=>'text', 
						'title'=>JText::_('Price'),
						'desc'=>JText::_('Price for the slide. Use the span HTML tag to highlight text.'),
						'std'=>'From $200.00',
						),
					'price_desc'=>array(
						'type'=>'text', 
						'title'=>JText::_('Price Description'),
						'desc'=>JText::_('Description of the price.'),
						'std'=>'per person',
						),
					'body'=>array(
						'type'=>'textarea', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('Body for the slide'),
						'std'=>'Aenean pretium metus id faucibus maximus. Integer volutpat consectetur metus',
						),
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Background Image'),
						'desc'=>JText::_('Recommended size is 1400 x 800px.'),
						),
					'icon'=>array(
						'type'=>'media', 
						'title'=>JText::_('Icon'),
						'desc'=>JText::_('Recommended size is 100 x 100px.'),
						),
					)
				),
			)
		)
	);

