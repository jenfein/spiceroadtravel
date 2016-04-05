<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_tours_swiper_2','sp_tours_swiper_2_addon');
AddonParser::addAddon('sp_tours_swiper_2_item','sp_tours_swiper_2_item_addon');

function sp_tours_swiper_2_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '		<section class="popular-tour scroll-to-block">
            				<div class="container">
                				<div class="row">
                    					<div class="col-md-3 col-popular-info">';
	if($image) $output .= '                        	<img src="'. $image .'" alt="img"/>';
	$output .= '                        			<h2 class="block-title t-about-title">'. $title .'</h2>
                        					<p class="sub-title t-sub-title">'. $body .'</p>
							</div>
                    					<div class="col-md-9">
                         					<div class="swiper-container" data-mode="horizontal"   data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="2" data-lg-slides="3" data-loop="0">
                             						<div class="swiper-wrapper ">';
	$output .= 								AddonParser::spDoAddon($content);
	$output .= '		           	      	           	</div>
                             						<div class="pagination pagination-hide"></div>
                         					</div>
                        					<div class="arrows t-popular-arrows">
                            						<div class="arrow-left"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-l-arrow.png" alt="arrow"></div>
                            						<div class="arrow-right"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-arrow.png" alt="arrow"></div>
                        					</div>
                    					</div>
                				</div>
            				</div>
        			</section>';
	return $output;
}


function sp_tours_swiper_2_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		"price"=>'',
		), $atts));

	$output   = '	    	<div class="swiper-slide">
					<div class="t-popular-item">';
	if($image) $output .= '		<img src="'. $image .'" alt="img"/>';
	$output .= '				<div class="t-popular-box">
							<div class="hot-price">'. $price .'</div>
							<h3>'. $title .'</h3>
							<p>'. $body .'</p>
                                         	</div>
                                     	</div>
                         	</div>';
	return $output;
}
