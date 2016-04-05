<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_tours_swiper',
		'category'=>'NRGtravel',
		'title'=>JText::_('Tours Swiper'),
		'desc'=>JText::_('Tours swiper, 4 columns.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the Tours Swiper section.'),
				'std'=>'Hot Tours',
				),
			'body'=>array(
				'type'=>'text', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the Tours Swiper section.'),
				'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.',
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Display an icon above the title. Recommended size is 150 x 50px.'),
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_tours_swiper_item',
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
						'std'=>'Maecenas vitae venenatis lorem. Pellentesque et lacinia eros, condimentum hendrerit nisl. In iaculis a nunc a euismod. Phasellus aliquam sagittis ytrew congue.',
						),
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image'),
						'desc'=>JText::_('Recommended size is 270 x 300px.'),
						),
					'btn_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Button Text'),
						'desc'=>JText::_('Text for the read more button.'),
						'std'=>'Read more',
						),
					'btn_link'=>array(
						'type'=>'text', 
						'title'=>JText::_('Button Link'),
						'desc'=>JText::_('URL for the read more button.'),
						'std'=>'http://',
						),
					)
				),
			)
		)
	);

