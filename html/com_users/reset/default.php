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
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<div class="reset<?php echo $this->pageclass_sfx?> span8 offset2">
	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate well form-inline">
		<div class="alert alert-block alert-info"><?php echo JText::_('Please enter the email address for your account. A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.'); ?></div>
		<fieldset class="offset2">
			<div class="control-group">
				<div class="controls">
					<input type="text" class="validate-username required input-large" value="" id="jform_email" name="jform[email]" aria-required="true" required="required" placeholder="Enter your email address">
					<button type="submit" class="validate btn"><?php echo JText::_('JSUBMIT'); ?></button>
				</div>
			</div>
		</fieldset>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
