<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# -----------------------------------------------------------------------	
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$app    = JFactory::getApplication();
$path   = JURI::base(true).'/templates/'.$app->getTemplate().'/';
?>
						<div id="sp_quickcontact<?php echo $uniqid ?>" class="sp_quickcontact">
							<div id="sp_qc_status"></div>
							<form id="sp-quickcontact-form">
                                            				<label for="name"><?php echo $name_text ?></label>
									<input placeholder="<?php echo $name_text ?>" class="input-style" type="text" name="name" id="name" required />
                                            				<label for="email"><?php echo $email_text ?></label>
									<input placeholder="<?php echo $email_text ?>" class="input-style" type="email" name="email" id="email" required />
                                            				<label for="subject"><?php echo $subject_text ?></label>
									<input placeholder="<?php echo $subject_text ?>" class="input-style input-style-subject"  type="text" name="subject" id="subject" />
                                            				<label for="message"><?php echo $msg_text ?></label>
									<textarea placeholder="<?php echo $msg_text ?>" class="tx-style" name="message" id="message"></textarea>	
								<?php if($formcaptcha) { ?>
									<input type="text" name="sccaptcha" placeholder="<?php echo $captcha_question ?>" required />
								<?php } ?>	
									<input id="sp_qc_submit" class="send" type="submit" value="<?php echo $send_msg ?>">
							</form>
						</div>