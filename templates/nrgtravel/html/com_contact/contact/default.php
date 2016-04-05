<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');
$app = JFactory::getApplication();
  $template = $app->getTemplate(true);
  $params = $template->params;
jimport('joomla.html.html.bootstrap');
?>
<div class="<?php echo $this->pageclass_sfx?>">
        <?php if ($params->get('contact_map_enabled')): ?>
        <div class="element clearfix col2-3 home auto">
          <div class="col2-3 auto">
            <div id="map"></div>
          </div>
          <?php if ($params->get('contact_google_map_address')): ?>
          <div class="col2-3 white white-bottom auto">
            <div class="icon-holder map"></div>
            <div class="next-to-icon">
              <h2><?php echo $params->get('contact_google_map_address'); ?></h2>
            </div>
          </div>
          <?php endif; ?>
        </div>
 	<?php endif; ?>

	<?php if ($params->get('contact_icons_enabled')): ?>
        <div class="element  clearfix col1-3 home white">
          <h5>We're Social!</h5>
          <ul class="social-list clearfix">
		<?php if ($params->get('contact_icons_pinterest')): ?>
			<li><a href="<?php echo $params->get('contact_icons_pinterest'); ?>" class="pinterest"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_instagram')): ?>
			<li><a href="<?php echo $params->get('contact_icons_instagram'); ?>" class="instagram"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_googleplus')): ?>
			<li><a href="<?php echo $params->get('contact_icons_googleplus'); ?>" class="gplus"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_behance')): ?>
			<li><a href="<?php echo $params->get('contact_icons_behance'); ?>" class="behance"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_twitter')): ?>
			<li><a href="<?php echo $params->get('contact_icons_twitter'); ?>" class="twitter"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_facebook')): ?>
			<li><a href="<?php echo $params->get('contact_icons_facebook'); ?>" class="facebook"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_git')): ?>
			<li><a href="<?php echo $params->get('contact_icons_git'); ?>" class="git"></a></li>
		<?php endif; ?>
		<?php if ($params->get('contact_icons_vk')): ?>
			<li><a href="<?php echo $params->get('contact_icons_vk'); ?>" class="vkontakte"></a></li>
		<?php endif; ?>
          </ul>
        </div>
	<?php endif; ?>

	<?php if ($this->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) : ?>
        <div class="element clearfix col1-3 home auto white">
		<h3><?php echo $this->contact->name; ?></h3>
		<?php  echo $this->loadTemplate('form');  ?>
	</div>
	<?php endif; ?>

	<?php if ($params->get('contact_info_enabled')): ?>
        <div class="element  clearfix col1-3 home white auto">
          <?php if ($params->get('contact_email_address')): ?><h5><?php echo $params->get('contact_email_address'); ?></h5><?php endif; ?>
          <div class="ct-part">
            <?php if ($params->get('contact_info')): ?><p><?php echo $params->get('contact_info'); ?></p><?php endif; ?>
          </div>
        </div>
	<?php endif; ?>
</div>
