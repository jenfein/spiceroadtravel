<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php foreach ($list as $item) :  ?>
<?php $images = json_decode($item->images); ?>
	<div class="col-md-4 col-sm-4 post a-post">
		<a href="<?php echo $item->link; ?>">
			<?php if($images->image_intro): ?>
				<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt=""/>
			<?php endif; ?>
		</a>
		<h5>
			<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
		</h5>
		<p><?php echo $item->author; ?> | <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?></p>
		<a class="read-more" href="<?php echo $item->link; ?>">Read more</a>
	</div>
<?php endforeach; ?>
