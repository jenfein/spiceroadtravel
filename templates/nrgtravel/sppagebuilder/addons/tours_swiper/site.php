<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_tours_swiper','sp_tours_swiper_addon');
AddonParser::addAddon('sp_tours_swiper_item','sp_tours_swiper_item_addon');

function sp_tours_swiper_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '		<section class="hot-tour scroll-to-block">
            				<div class="container">
                				<div class="t-title-block">';
	if($image) $output .= '                    	<img src="'. $image .'" alt="img"/>';
       	$output .= '            			<h2 class="block-title t-about-title">'. $title .'</h2>
                    					<p class="sub-title t-sub-title">'. $body .'</p>
                				</div>
                 				<div class="swiper-container" data-mode="horizontal"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-loop="0">
                     					<div class="swiper-wrapper">';
	$output .= 								AddonParser::spDoAddon($content);
	$output .= '		           	      	</div>
                     					<div class="pagination pagination-hide"></div>
                 				</div>
                				<div class="arrows hot-arrows">
                    					<div class="arrow-left"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-l-arrow.png" alt="arrow"></div>
                    					<div class="arrow-right"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-arrow.png" alt="arrow"></div>
                				</div>
            				</div>
        			</section>';
	return $output;
}


function sp_tours_swiper_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		"price"=>'',
		"btn_text"=>'',
		"btn_link"=>'',
		), $atts));

	$output   = '	     	<div class="swiper-slide">
                             		<div class="hot-container">';
	if($image) $output .=   '           	<img src="'. $image .'" alt="img"/>';
	$output .= '                                 	<div class="hot-place-box">
                                     			<div class="hot-price">'. $price .'</div>
                                     			<h1>'. $title .'</h1>
							<div class="place-det"><p>'. $body .'</p></div>
                                 		</div>';
	if($btn_text) $output .= '          	<div class="place-more">
                                     			<a href="'. $btn_link .'" class="read-more">'. $btn_text .' <i class="w-arrow"></i></a>
                                 		</div>';
	$output .= '                	</div>
                         	</div>';
	return $output;
}

// <a href="'. $btn_link .'" class="read-more">'. $btn_text .' <i class="w-arrow"></i></a>

