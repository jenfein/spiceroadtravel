<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$tpl_params 	= JFactory::getApplication()->getTemplate(true)->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
JHtml::_('behavior.caption');

$uri = JFactory::getURI();
$absolute_url = $uri->toString();

$useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
	|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author'));

	$post_format = $params->get('post_format', 'standard');

	$has_post_format = $tpl_params->get('show_post_format');

	if($this->print) $has_post_format = false;

?>

<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="block-title"><?php echo $this->item->title; ?></h2>
                <p class="sub-title"><span class="post-meta"><?php echo $this->item->author; ?>  |  <?php echo $this->item->created; ?></span></p>				
      </div>
    </div>
  </div>
</div>
<div class="blog blog-section">
  <div class="container">
  <div class="row"><div class="col-md-12 col-sm-12 single-content post">
	<div class="content-media">
	<?php
		if($post_format=='standard') {
			echo JLayoutHelper::render('joomla.content.full_image', $this->item);
		} else {
			echo JLayoutHelper::render('joomla.content.post_formats.post_' . $post_format, array('params' => $params, 'item' => $this->item));
		}
	?>
	</div>

	<?php if (!$params->get('show_intro')) : echo $this->item->event->afterDisplayTitle; endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>


	<?php echo JLayoutHelper::render('joomla.content.post_formats.icons',  $post_format); ?>

		<?php /* if (!$this->print && $useDefList && ($info == 0 || $info == 2)) : ?>
			<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
		<?php endif; */ ?>
	<?php if (isset ($this->item->toc)) :
		echo $this->item->toc;
	endif; ?>

            <?php echo $this->item->text; ?>



	<?php
if (!empty($this->item->pagination) && $this->item->pagination && $this->item->paginationposition && $this->item->paginationrelative) :
	echo $this->item->pagination;
?>
	<?php endif; ?>

	<?php echo $this->item->event->afterDisplayContent; ?>

	<?php if(!$this->print) : ?>
		<?php echo JLayoutHelper::render('joomla.content.social_share.share', $this->item); //Helix Social Share ?>
		<?php echo JLayoutHelper::render('joomla.content.comments.comments', $this->item); //Helix Comment ?>
	<?php endif; ?>



	<?php if ($info == 0 && $params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
          	<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
		<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>

	<?php endif; ?>
  </div></div>
  </div>
</div>


