<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_services',
		'category'=>'NRGtravel',
		'title'=>JText::_('Services'),
		'desc'=>JText::_('Services section, 4 columns.'),
		'attr'=>array(		
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the services section.'),
				'std'=>'Our Services', 			
				),
			'body'=>array(
				'type'=>'text', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the services section.'),
				'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.', 			
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Display a small icon above the title. Recommended size is 150 x 50px.'),
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_services_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Title'),
						'desc'=>JText::_('Title for the service'),
						'std'=>'Ticket Ordering',
						),
					'body'=>array(
						'type'=>'textarea', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('Body for the service'),
						'std'=>'Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoncus nisi sed, pulvinar ex.',
						),
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Icon'),
						'desc'=>JText::_('Icon for the service. Recommended size is 60 x 60px.'),
						),
					)
				),
			)
		)
	);

