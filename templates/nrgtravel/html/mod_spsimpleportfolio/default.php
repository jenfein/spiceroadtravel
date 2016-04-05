<?php
/**
 * @package     SP Simple Portfolio
 * @subpackage  mod_spsimpleportfolio
 *
 * @copyright   Copyright (C) 2010 - 2015 JoomShaper. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */

defined('_JEXEC') or die;
jimport( 'joomla.filesystem.file' );
$layout_type = $params->get('layout_type', 'default');

//Params
$cparams 	= JComponentHelper::getParams('com_spsimpleportfolio');
?>


<div id="mod-sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-items layout-<?php echo str_replace('_', '-', $layout_type); ?> <?php echo $moduleclass_sfx; ?>">

	<?php if($params->get('show_filter', 1)) { ?>
			<div id="filters" class="cont-filter">
				<button class="button actual" data-filter="*">all</button>
				<?php
					$filters = SpsimpleportfolioHelper::getTagList( $items );
					foreach ($filters as $filter) {
						?>
							<button class="button" data-filter=".<?php echo $filter->alias; ?>"><?php echo $filter->title; ?></button>
						<?php
					}	
				?>
			</div>
	<?php } ?>

                <div class="container-fluid">
                <div class="row" >
                <div class="isotope allmenu" id="gallery-popap">
                <div class="grid"></div>
		<?php foreach ($items as $item) { ?>
			
			<?php
			$tags = SpsimpleportfolioHelper::getTags( $item->spsimpleportfolio_tag_id );
			$newtags = array();
			$filter = '';
			$groups = array();
			foreach ($tags as $tag) {
				$newtags[] 	 = $tag->title;
				$filter 	.= ' ' . $tag->alias;
				$groups[] 	.= ' ' . $tag->alias . ' ';
			}

			$groups = implode(' ', $groups);

			?>
                    <a class="country-link work-img <?php echo $groups; ?>" data-category="<?php echo $groups; ?>" href="#gallery-box-<?php echo $item->alias; ?>">
                        <img src="<?php echo $item->coverimage; ?>" alt="picture">
                        <div class="work-description">
			    	<div class="hot-price"><?php echo $item->date; ?></div>
                            	<h3 class="country-name"><?php echo $item->title; ?></h3>
                        </div>
                    </a>

    			<div id="gallery-box-<?php echo $item->alias; ?>" class="gallery-box mfp-with-anim mfp-hide">
				<div class="sw-container">
        				<div class="swiper-container" data-mode="horizontal" data-slides-per-view="1" data-loop="1">
          					<div class="swiper-wrapper">
            						<?php if($item->image) { ?><div class="swiper-slide"><div class="plase-box background-parent"><img src="<?php echo $item->image; ?>" alt="" class="center-image" /></div></div><?php } ?>
            						<?php if($item->image2) { ?><div class="swiper-slide"><div class="plase-box background-parent"><img src="<?php echo $item->image2; ?>" alt="" class="center-image" /></div></div><?php } ?>
            						<?php if($item->image3) { ?><div class="swiper-slide"><div class="plase-box background-parent"><img src="<?php echo $item->image3; ?>" alt="" class="center-image" /></div></div><?php } ?>
          					</div>
          					<div class="pagination pagination-hide pagination-gallery"></div>
        				</div>
      				</div>
				<div class="place-info">
  					<div class="hot-price"><?php echo $item->date; ?></div>
  					<h3 class="country-name"><?php echo $item->title; ?></h3>
					<p><?php echo $item->textblock1text; ?></p>
				</div>
    			</div>
		<?php } ?>
		</div>
		</div>
		</div>









</div>
