<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="reset-complete<?php echo $this->pageclass_sfx?> span8 offset2">
	<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate form-inline well">
		<div class="alert alert-block alert-info"><?php echo JText::_('To complete the password reset process, please enter a new password.'); ?></div>
		<fieldset class="offset1">
			<div class="control-group">
				<div class="controls">
					<input type="password" class="validate-password required invalid input-large" autocomplete="off" value="" id="jform_password1" name="jform[password1]" aria-required="true" required="required" aria-invalid="true" placeholder="New Password">
					<input type="password" class="validate-password required invalid input-large" autocomplete="off" value="" id="jform_password2" name="jform[password2]" aria-required="true" required="required" aria-invalid="true" placeholder="Confirm Password">
					<button type="submit" class="validate btn"><?php echo JText::_('JSUBMIT'); ?></button>
				</div>
			</div>
		</fieldset>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
