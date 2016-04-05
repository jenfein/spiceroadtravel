<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_testimonials','sp_testimonials_addon');
AddonParser::addAddon('sp_testimonials_item','sp_testimonials_item_addon');

$sppbTestimonialsArray = array();
function sp_testimonials_addon($atts, $content){
	global $sppbTestimonialsArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '		<section class="t-review-section scroll-to-block">
            				<div class="t-title-block">';
	if($image) $output .= '		<img src="'. $image .'" alt="img"/>';
	$output .='                		<h2 class="block-title t-about-title">'. $title .'</h2>
                				<p class="sub-title t-sub-title">'. $body .'</p>
             				</div>
                			<div class="testimonials-container">
                    				<div class="swiper-container testimonials-slider" data-loop="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="5" data-md-slides="7" data-lg-slides="7"  data-mode="horizontal">
							<div class="swiper-wrapper">';
	$output .= 						AddonParser::spDoAddon($content);
	$output .= '					</div>
                        				<div class="pagination pagination-hide"></div>
                        				<div class="swiper-arrow-left"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-l-arrow.png" alt="img"/></div>
                        				<div class="swiper-arrow-right"><img src="'. JURI::base() .'templates/nrgtravel/images/travel/h-arrow.png" alt="img"/></div>
                    				</div>
                    				<div class="testimonials-block">';
	foreach ($sppbTestimonialsArray as $key=>$testimonials) {
		$output .='				<div class="testimonials-item">
                            					<div>';
	if(($testimonials['stars']) == ccn1star) {
	$output .= '						<i class="t-star"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>';
	}
	if(($testimonials['stars']) == ccn2star) {
	$output .= '						<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>';
	}
	if(($testimonials['stars']) == ccn3star) {
	$output .= '						<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star-n"></i>
								<i class="t-star-n"></i>';
	}
	if(($testimonials['stars']) == ccn4star) {
	$output .= '						<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star-n"></i>';
	}
	if(($testimonials['stars']) == ccn5star) {
	$output .= '						<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>
								<i class="t-star"></i>';
	}
       $output .= '                     		</div>
                            					<h3>'. $testimonials['title'].'</h3>
                            					<blockquote class="blockquote">'. $testimonials['body'].'</blockquote>
                                			</div>';
	}
	$output .= '				</div>
                			</div>
        			</section>';

	$sppbTestimonialsArray = array();


	return $output;
}


function sp_testimonials_item_addon( $atts ){
	global $sppbTestimonialsArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		"stars"=>'',
		), $atts));

	$output   = '	 	<div class="swiper-slide client-slide">';
	if($image) $output .= '  	<img  src="'. $image .'" alt="img"/>';
	$output .= '          	</div>';


	$sppbTestimonialsArray[] = array('title'=>$title, 'body'=>$body, 'stars'=>$stars);

	return $output;
}
