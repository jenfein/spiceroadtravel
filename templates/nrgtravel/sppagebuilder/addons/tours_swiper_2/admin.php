<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_tours_swiper_2',
		'category'=>'NRGtravel',
		'title'=>JText::_('Tours Swiper 2'),
		'desc'=>JText::_('Tours swiper, 3 columns.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the Tours Swiper section.'),
				'std'=>'Popular Tours',
				),
			'body'=>array(
				'type'=>'text', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the Tours Swiper section.'),
				'std'=>'Duis non ipsum volutpat, rhoncus nisi sed, pulvinar ex. Aenean semper augue at lorem mattis, ac tempor leo mattis. Donec feugiat in sem sed pellentesque.',
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Display an icon above the title. Recommended size is 150 x 50px.'),
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_tours_swiper_2_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Title'),
						'desc'=>JText::_('Title for the tour.'),
						'std'=>'Crete, Greece',
						),
					'price'=>array(
						'type'=>'text', 
						'title'=>JText::_('Price'),
						'desc'=>JText::_('Price for the tour.'),
						'std'=>'$450.00',
						),
					'body'=>array(
						'type'=>'textarea', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('Description of the tour.'),
						'std'=>'et orci id purus pretium',
						),
					'btn_text'=>array(
							'type'=>'text', 
							'title'=>JText::_('Button Label'),
							'desc'=>JText::_('Clickable text'),
							'std'=>'',
							),
					'btn_link'=>array(
							'type'=>'text', 
							'title'=>JText::_('Button URL'),
							'desc'=>JText::_('URL to provide more information'),
							'std'=>'',
							),	
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image'),
						'desc'=>JText::_('Recommended size is 270 x 270px.'),
						),
					)
				),
			)
		)
	);

