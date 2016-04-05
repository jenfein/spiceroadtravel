<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_services','sp_services_addon');
AddonParser::addAddon('sp_services_item','sp_services_item_addon');

function sp_services_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output  = '			<section class="t-service scroll-to-block">
            					<div class="container">
                					<div class="t-title-block">';
       	if($image) $output .= '            			<img src="'. $image .'" alt="img"/>';
 	$output .='                   				<h2 class="block-title t-about-title">'. $title .'</h2>
                    						<p class="sub-title t-sub-title">'. $body .'</p>
                					</div>
                					<div class="row">';
	$output .= 						AddonParser::spDoAddon($content);
	$output .= '					</div>
            					</div>
        				</section>';
	return $output;
}

function sp_services_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"=>'',
		"body"=>'',
		"image"=>'',
		), $atts));

	$output   = '	 	<div class="col-md-3 t-col-serv">';
	if($image) $output .= '      	<img src="'. $image .'" alt="img"/>';
	$output .= '                	<h3>'. $title .'</h3>
                        		<p>'. $body .'</p>
                    		</div>';
	return $output;
}
