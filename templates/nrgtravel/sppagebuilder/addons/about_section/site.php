<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_about_section','sp_about_section_addon');
AddonParser::addAddon('sp_about_section_item','sp_about_section_item_addon');

function sp_about_section_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '		<section class="t-about scroll-to-block">
            				<div class="container clearfix">
                    				<div class="t-about-img-box">';
	if($image) $output .= '                        <img class="t-about-img" src="'. $image .'" alt="img"/>';
	$output .= '                    	</div>
                    				<div class="t-about-info-box">
                        				<div class="t-about-info">
                            					<h2 class="block-title t-about-title">'. $title .'</h2>
                            					<p class="sub-title t-sub-title">'. $body .'</p>
                        				</div>
                    				</div>
            				</div>
        			</section>';
	return $output;
}
