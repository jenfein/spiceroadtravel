<?php
/**
 * @package Created by Cocoon
 * Created by Cocoon
 * @author http://createdbycocoon.com
 * @copyright Copyright 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

$doc = JFactory::getDocument();

JHtml::_('jquery.framework');
JHtml::_('bootstrap.framework'); //Force load Bootstrap
unset($doc->_scripts[$this->baseurl . '/media/jui/js/bootstrap.min.js']); // Remove joomla core bootstrap

//Load Helix
$helix3_path = JPATH_PLUGINS.'/system/helix3/core/helix3.php';

if (file_exists($helix3_path)) {
    require_once($helix3_path);
    $this->helix3 = helix3::getInstance();
} else {
    die('Please install and activate helix plugin');
}

//Coming Soon
if($this->helix3->getParam('comingsoon_mode')) header("Location: ".$this->baseUrl."?tmpl=comingsoon");

//Class Classes
$body_classes = '';

if($this->helix3->getParam('sticky_header')) {
    $body_classes .= ' sticky-header';
}

$body_classes .= ($this->helix3->getParam('boxed_layout', 0)) ? ' layout-boxed' : ' layout-fluid';

//Body Background Image
if($bg_image = $this->helix3->getParam('body_bg_image')) {

    $body_style  = 'background-image: url(' . JURI::base(true ) . '/' . $bg_image . ');';
    $body_style .= 'background-repeat: '. $this->helix3->getParam('body_bg_repeat') .';';
    $body_style .= 'background-size: '. $this->helix3->getParam('body_bg_size') .';';
    $body_style .= 'background-attachment: '. $this->helix3->getParam('body_bg_attachment') .';';
    $body_style .= 'background-position: '. $this->helix3->getParam('body_bg_position') .';';
    $body_style  = 'body.site {' . $body_style . '}'; 

    $doc->addStyledeclaration( $body_style );
}

//Body Font
$webfonts = array();

//Navigation Font
if( $this->params->get('enable_navigation_font') ) {
    $webfonts['.sp-megamenu-parent'] = $this->params->get('navigation_font');
}

//Custom Font
if( $this->params->get('enable_custom_font') && $this->params->get('custom_font_selectors') ) {
    $webfonts[ $this->params->get('custom_font_selectors') ] = $this->params->get('custom_font');
}

$this->helix3->addGoogleFont($webfonts);

//Custom CSS
if($custom_css = $this->helix3->getParam('custom_css')) {
    $doc->addStyledeclaration( $custom_css );
}

//Custom JS
if($custom_js = $this->helix3->getParam('custom_js')) {
    $doc->addScriptdeclaration( $custom_js );
}

$config = JFactory::getConfig();
$app = JFactory::getApplication();
$menu = $app->getMenu();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if($favicon = $this->helix3->getParam('favicon')) {
        $doc->addFavicon( JURI::base(true) . '/' .  $favicon);
    } else {
        $doc->addFavicon( $this->helix3->getTemplateUri() . '/images/favicon.ico' );
    }
    ?>

    <jdoc:include type="head" />

    <?php

	$this->helix3->addCSS('bootstrap.min.css, font-awesome.min.css, style.css'); 

//        ->addJS('main.js') // JS Files
//        ->lessInit()->setLessVariables(array(
//            'preset'=>$this->helix3->Preset(),
//            'bg_color'=> $this->helix3->PresetParam('_bg'),
//            'text_color'=> $this->helix3->PresetParam('_text'),
//           'major_color'=> $this->helix3->PresetParam('_major')
//           ))
//        ->addLess('master', 'template');

        //RTL
//        if($this->direction=='rtl') {
//            $this->helix3->addCSS('bootstrap-rtl.min.css')
//            ->addLess('rtl', 'rtl');
//        }

//        $this->helix3->addLess('presets',  'presets/'.$this->helix3->Preset(), array('class'=>'preset'));
        
        //Before Head
        if($before_head = $this->helix3->getParam('before_head')) {
            echo $before_head . "\n";
        }
    ?>
</head>
<body class="travel <?php echo $this->helix3->bodyClass( $body_classes ); ?><?php if ($menu->getActive() == $menu->getDefault()) { ?> front <?php } else { ?> not-front<?php } ?>">
	<div id="loader-wrapper">
		<div class="loader-content">
			<div class="cube1 t-cube"></div>
			<div class="cube2 t-cube"></div>
		</div>
	</div>
	<header class="r-header header" >
		<div class="container clearfix nopadding">
			<div id="logo">
				<a href="<?php echo $this->baseurl; ?>">
					<img src="<?php if($logo_image = $this->helix3->getParam('logo_image')) { ?><?php echo $logo_image . "\n"; ?><?php } else { ?><?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/agency/logo.png<?php } ?>" alt="logo">
				</a>
			</div>
			<div class="menu-button  r-menu-button">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="nav r-nav  clearfix">
				<jdoc:include type="modules" name="mainmenu" />
			</nav>
		</div>
	</header>
	<div class="body-innerwrapper">
		<?php $this->helix3->generatelayout(); ?>
	</div>
	<footer class="footer t-footer">
		<div class="container container-footer">
			<a class="logo-footer" href="<?php echo $this->baseurl; ?>">
				<img src="<?php if($footer_logo_image = $this->helix3->getParam('footer_logo_image')) { ?><?php echo $footer_logo_image . "\n"; ?><?php } else { ?><?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/agency/footer-logo.png<?php } ?>" alt="logo">
			</a>
			<?php if($copyright = $this->helix3->getParam('copyright')) { ?>
				<p class="footer-info s-footer-info">
					<?php echo $copyright . "\n"; ?>
				</p>
			<?php } ?>
			<jdoc:include type="modules" name="footer" />
			<?php if($show_social_icons = $this->helix3->getParam('show_social_icons')) { ?>
			<div class="ftr-social  t-ftr-social">
				<?php if($facebook = $this->helix3->getParam('facebook')) { ?>
				<a target="_blank" class="social-network sc-fb" href="<?php echo $facebook . "\n"; ?>">
					<i class="fa fa-facebook"></i>
				</a>
				<?php } ?>

				<?php if($twitter = $this->helix3->getParam('twitter')) { ?>
				<a target="_blank" class="social-network sc-g" href="<?php echo $twitter . "\n"; ?>">
					<i class="fa fa-twitter"></i>
				</a>
				<?php } ?>

				<?php if($googleplus = $this->helix3->getParam('googleplus')) { ?>
				<a target="_blank" class="social-network sc-tw" href="<?php echo $googleplus . "\n"; ?>">
					<i class="fa fa-google-plus"></i>
				</a>
				<?php } ?>

				<?php if($linkedin = $this->helix3->getParam('linkedin')) { ?>
				<a target="_blank" class="social-network sc-in" href="<?php echo $linkedin . "\n"; ?>">
					<i class="fa fa-linkedin"></i>
				</a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php if($enabled_footer_menu = $this->helix3->getParam('enabled_footer_menu')) { ?>
            	<div class="ftr-nav-container">
                	<div class="container">
                    		<nav class="ftr-nav f-ftr-nav clearfix">
					<jdoc:include type="modules" name="mainmenu" />
				</nav>
			</div>
		</div>
		<?php } ?>
	</footer>
	<jdoc:include type="modules" name="debug" />

	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/cocoon.preprocess.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/idangerous.swiper.min.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/magnific.js"></script>
<!--        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script> --> <!-- JenFein March 2016 -->
<!--	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/map.js"></script> --> <!-- JenFein March 2016 -->
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/placeholder.min.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/jquery.countTo.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/global.js"></script>
</body>
</html>