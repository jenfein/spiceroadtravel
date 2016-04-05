<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_hero_image','sp_hero_image_addon');

function sp_hero_image_addon($atts, $content){

	extract(spAddonAtts(array(
		"image"=>'',
		"icon"=>'',
		"title"=>''
		), $atts));

	$output  = '	<div class="t-banner scroll-to-block">
         
                 				<div class="swiper-slide background-parent">
                     					<img class="center-image" src="'. $image .'" alt="'. $title .'"/>
                  
								</div>
                 	</div>';

	return $output;
}


