<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_hotel_reviews','sp_hotel_reviews_addon');
AddonParser::addAddon('sp_hotel_reviews_item','sp_hotel_reviews_item_addon');

$sppbHotel_ReviewsArray = array();
function sp_hotel_reviews_addon($atts, $content){
	global $sppbHotel_ReviewsArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '	<section class="hotel-section scroll-to-block">
        			<div class="container">
            				<div class="t-title-block">';
	if($image) $output .= '       		<img src="'. $image .'" alt="img"/>';
	$output .= '                		<h2 class="block-title t-about-title">'. $title .'</h2>
                				<p class="sub-title t-sub-title">'. $body .'</p>
            				</div>
        			</div>
        			<div class="tab-wrapper">
            				<div class="tabs-content clearfix">';
	$output .= 				AddonParser::spDoAddon($content);
	$output .= '			</div>
					<div class="tab-nav-wrapper container">
                				<div class="nav-tab nav-tab-serv nav-doctor clearfix">';
	foreach ($sppbHotel_ReviewsArray as $key=>$hotel_reviews) {
		$output .='				<div class="nav-tab-item nav-item-serv">'. $hotel_reviews['title'].'</div>';
	}
	$output .= '				</div>
                			</div>
				</div>
        		</section>';

	$sppbHotel_ReviewsArray = array();


	return $output;
}


function sp_hotel_reviews_item_addon( $atts ){
	global $sppbHotel_ReviewsArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"body_title"=>'',
		"body"=>'',
		"testimonial_name"=>'',
		"testimonial_body"=>'',
		"image"=>'',
		"image_2"=>'',
		"image_3"=>'',
		"image_4"=>'',
		"image_5"=>'',
		"image_6"=>'',
		"stars"=>'',
		), $atts));

	$output   = '	<div class="tab-info"><div class="team-container"><div class="team-info"><div class="team-member-container active clearfix">
				<div class="hotel-block clearfix">
					<div class="hotel-slider">
						<div class="swiper-container" data-slides-per-view="1" data-loop="1" data-mode="vertical">
							<div class="swiper-wrapper ">';
	if($image) $output .= '				<div class="swiper-slide vertical-slide background-parent">
									<img class="center-image" src="'. $image .'" alt="img"/>
								</div>';
	if($image_2) $output .= '				<div class="swiper-slide vertical-slide background-parent">
									<img class="center-image" src="'. $image_2 .'" alt="img"/>
								</div>';
	if($image_3) $output .= '				<div class="swiper-slide vertical-slide background-parent">
									<img class="center-image" src="'. $image_3 .'" alt="img"/>
                                                		</div>';
	if($image_4) $output .= '                          	<div class="swiper-slide vertical-slide background-parent">
                                                    			<img class="center-image" src="'. $image_4 .'" alt="img"/>
								</div>';
	if($image_5) $output .= '                         	<div class="swiper-slide vertical-slide background-parent">
                                                    			<img class="center-image" src="'. $image_5 .'" alt="img"/>
								</div>';
	if($image_6) $output .= '                         	<div class="swiper-slide vertical-slide background-parent">
                                                    			<img class="center-image" src="'. $image_6 .'" alt="img"/>
								</div>';
	$output .= '                                	</div>
                                            		<div class="pagination vertical-pagination"></div>
                                        	</div>
                                    	</div>
                                    	<div class="hotel-info">
						<div class="hotel-info-container">
							<div>';
	if(($stars) == ccn1star) {
	$output .= '						<span class="t-star"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>';
	}
	if(($stars) == ccn2star) {
	$output .= '						<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>';
	}
	if(($stars) == ccn3star) {
	$output .= '						<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star-n"></span>
								<span class="t-star-n"></span>';
	}
	if(($stars) == ccn4star) {
	$output .= '						<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star-n"></span>';
	}
	if(($stars) == ccn5star) {
	$output .= '						<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>
								<span class="t-star"></span>';
	}
	$output .= '                              	</div>
                                            		<h3>'. $body_title .'</h3>
							'. $body .'
                                            		<div class="t-testimonials-slider">
                                                      	<div class="hotel-testimonials-slide">
                                                            		<h4>'. $testimonial_name .'</h4>
                                                            		<p>'. $testimonial_body .'</p>
                                                        	</div>
                                                	</div>
                                            	</div>
					</div>
                           	</div>
                    	</div></div></div></div>';

	$sppbHotel_ReviewsArray[] = array('title'=>$title);

	return $output;
}
