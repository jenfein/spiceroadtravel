<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_hotel_reviews',
		'category'=>'NRGtravel',
		'title'=>JText::_('Hotel Reviews'),
		'desc'=>JText::_('Reviews of hotels with slider.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the Hotel Reviews section.'),
				'std'=>'Hotel Reviews',
				),
			'body'=>array(
				'type'=>'text', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the Hotel Reviews section.'),
				'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.',
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Icon to display above the title. Recommended size is 150 x 50px.'),
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_hotel_reviews_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text',
						'title'=>JText::_('Tab Title'),
						'desc'=>JText::_('Title for the tab.'),
						'std'=>'Europe',
						),
					'body_title'=>array(
						'type'=>'text',
						'title'=>JText::_('Body Title'),
						'desc'=>JText::_('Title for the body section.'),
						'std'=>'Conrad Rangali Island Maldives Hotel',
						),
					'body'=>array(
						'type'=>'editor', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('Description about the hotel.'),
						'std'=>'Nullam bibendum odio a sem bibendum, ut vestibulum ipsum porttitor. Sed finibus nec orci et cursus. Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoncus nisi sed, pulvinar ex augue.',
						),
			'stars'=>array(
				'type'=>'select', 
				'title'=>JText::_('Rating'),
				'desc'=>JText::_('Select the star rating of the hotel.'),
				'values'=>array(
					'ccn1star'=>JText::_('1 Star'),
					'ccn2star'=>JText::_('2 Stars'),
					'ccn3star'=>JText::_('3 Stars'),
					'ccn4star'=>JText::_('4 Stars'),
					'ccn5star'=>JText::_('5 Stars'),
					),
				'std'=>'ccn5star',
			),
					'testimonial_name'=>array(
						'type'=>'text',
						'title'=>JText::_('Testimonial: Client Name'),
						'desc'=>JText::_('Name of the client for the testimonial.'),
						'std'=>'Melani Griffith',
						),
					'testimonial_body'=>array(
						'type'=>'textarea',
						'title'=>JText::_('Testimonial: Body'),
						'desc'=>JText::_('Body text for the testimonial.'),
						'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus. Nunc sed volutpat erat.',
						),
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image'),
						'desc'=>JText::_('Image 1 for the slider. Recommended size is 1000 x 865px.'),
						),
					'image_2'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image 2'),
						'desc'=>JText::_('Image 2 for the slider. Recommended size is 1000 x 865px.'),
						),
					'image_3'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image 3'),
						'desc'=>JText::_('Image 3 for the slider. Recommended size is 1000 x 865px.'),
						),
					'image_4'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image 4'),
						'desc'=>JText::_('Image 4 for the slider. Recommended size is 1000 x 865px.'),
						),
					'image_5'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image 5'),
						'desc'=>JText::_('Image 5 for the slider. Recommended size is 1000 x 865px.'),
						),
					'image_6'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image 6'),
						'desc'=>JText::_('Image 6 for the slider. Recommended size is 1000 x 865px.'),
						),
					)
				),
			)
		)
	);

