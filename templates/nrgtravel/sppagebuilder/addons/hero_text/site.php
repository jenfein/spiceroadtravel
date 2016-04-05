<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_hero_text','sp_hero_text_addon');

function sp_hero_text_addon($atts, $content){


	extract(spAddonAtts(array(
		"image"=>'',
		"icon"=>'',
		"title"=>'',
		"body"=>'',
		), $atts));

	$output  = '	<div class="t-banner scroll-to-block">
             			<div class="swiper-wrapper ">
                 			<div class="swiper-slide background-parent">
                     			<img class="center-image" src="'. $image .'" alt="img"/>
                     			<div class="container">
									<div class="t-banner-content">
										<div class="banner-info">
											<h2>'.$title.'</h2>
				   						<p class="banner-shadow">
											'.$body.'
										</p>
										</div>
				     				</div>									
                 				</div>
             				</div>  
      					</div>
       				</div>';

	return $output;
}


