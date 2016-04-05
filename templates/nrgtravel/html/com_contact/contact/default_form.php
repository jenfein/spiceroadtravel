<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal form-part">

<?php if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
	<?php echo preg_replace('/>/i', 'placeholder="Name">', (string)$this->form->getInput('contact_name')); ?>
       	<?php echo preg_replace('/>/i', 'placeholder="Email">', (string)$this->form->getInput('contact_email')); ?>
        <?php echo preg_replace('/>/i', 'placeholder="Subject">', (string)$this->form->getInput('contact_subject')); ?>
        <?php echo preg_replace('/><\//i', 'placeholder="Message"></', (string)$this->form->getInput('contact_message')); ?>
			<?php if ($this->params->get('show_email_copy')) : ?>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('contact_email_copy'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('contact_email_copy'); ?></div>
				</div>
			<?php endif; ?>
			
			<?php // Dynamically load any additional fields from plugins. ?>
			<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
				<?php if ($fieldset->name != 'contact') : ?>
					<?php $fields = $this->form->getFieldset($fieldset->name); ?>
					<?php foreach ($fields as $field) : ?>
						<div class="control-group">
							<?php if ($field->hidden) : ?>
								<div class="controls">
									<?php echo $field->input; ?>
								</div>
							<?php else: ?>
								<div class="control-label">
									<?php echo $field->label; ?>
									<?php if (!$field->required && $field->type != "Spacer") : ?>
										<span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL'); ?></span>
									<?php endif; ?>
								</div>
								<div class="controls"><?php echo $field->input; ?></div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			<div class="input-wrapper clearfix">
				<button class="submitButton send-btn validate" type="submit">Send</button>
				<span id="message"></span>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
	</form>
</div>
