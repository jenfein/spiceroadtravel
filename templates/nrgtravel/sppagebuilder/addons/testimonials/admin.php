<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_testimonials',
		'category'=>'NRGtravel',
		'title'=>JText::_('Testimonials'),
		'desc'=>JText::_('Client testimonial swiper.'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Title for the testimonials section.'),
				'std'=>'Review from clients',
				),
			'body'=>array(
				'type'=>'text', 
				'title'=>JText::_('Body'),
				'desc'=>JText::_('Body for the testimonials section.'),
				'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus.',
				),
			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Icon to display above the title. Recommended size is 150 x 50px.'),
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_testimonials_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text',
						'title'=>JText::_('Name'),
						'desc'=>JText::_('Name of the client providing the testimonial.'),
						'std'=>'Melani Griffith',
						),
					'body'=>array(
						'type'=>'text', 
						'title'=>JText::_('Body'),
						'desc'=>JText::_('The testimonial body.'),
						'std'=>'Duis non condimentum nunc. Nunc quis turpis eu est tincidunt rutrum. Cras a purus quis sem tincidunt egestas vel id lacus. Nunc sed volutpat erat. Duis sollicitudin ac nisi eget rutrum. Nunc sagittis velit nec sapien blandit molestie.',
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
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image'),
						'desc'=>JText::_('Photo of the client. Recommended size is 170 x 170px.'),
						),
					)
				),
			)
		)
	);

