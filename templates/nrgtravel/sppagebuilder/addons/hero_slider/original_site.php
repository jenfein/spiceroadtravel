<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_hero_slider','sp_hero_slider_addon');
AddonParser::addAddon('sp_hero_slider_item','sp_hero_slider_item_addon');

$sppbHero_SliderArray = array();
function sp_hero_slider_addon($atts, $content){
	global $sppbHero_SliderArray;

	extract(spAddonAtts(array(
		"image"=>'',
		), $atts));

	$output  = '	<div class="t-banner scroll-to-block">
         			<div class="swiper-container"  data-slides-per-view="1" data-loop="1" data-mode="horizontal" >
             				<div class="swiper-wrapper ">
                 				<div class="swiper-slide background-parent">
                     					<img class="center-image" src="'. $image .'" alt="img"/>
                     					<div class="container">
                         					<div class="t-banner-content">';
	$output .= 							AddonParser::spDoAddon($content);
	$output .= '                            			<div class="info-img">';
	foreach ($sppbHero_SliderArray as $key=>$hero_slider) {
		$output .='							<img class="travel-click" src="'. $hero_slider['icon'].'" alt="" data-src="'. $hero_slider['image'].'"/>';
	}
	$output .= '		           	      			</div>
								</div>
                     					</div>
                 				</div>
             				</div>
					<div class="pagination pagination-hide t-pagination"></div>
             				<div class="container banner-nav-container"></div>
         			</div>
       			</div>';
	$sppbHero_SliderArray = array();
	return $output;
}


function sp_hero_slider_item_addon( $atts ){
	global $sppbHero_SliderArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"price"=>'',
		"price_desc"=>'',
		"body"=>'',
		"image"=>'',
		"icon"=>'',
		), $atts));

	$output   = '	<div class="banner-info">
				<div class="banner-price">
					'. $price .'<sub>'. $price_desc .'</sub>
				</div>
				<h2>'. $title .'</h2>
				<p>'. $body .'</p>
			</div>';
	$sppbHero_SliderArray[] = array('icon'=>$icon,'image'=>$image);
	return $output;
}
