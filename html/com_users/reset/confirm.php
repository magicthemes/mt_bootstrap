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
<div class="reset-confirm<?php echo $this->pageclass_sfx?> span8 offset2">
	<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.confirm'); ?>" method="post" class="form-validate form-inline well">
		<div class="alert alert-block alert-info"><?php echo JText::_('An email has been sent to your email address. The email contains a verification code, please paste the verification code in the field below to prove that you are the owner of this account.'); ?></div>
		<fieldset class="offset1">
			<div class="control-group">
				<div class="controls">
					<input type="text" class="required invalid input-large" value="" id="jform_username" name="jform[username]" aria-required="true" required="required" aria-invalid="true" placeholder="Username">
					<input type="text" class="required input-large" value="" id="jform_token" name="jform[token]" aria-required="true" required="required" placeholder="Verification code">
					<button type="submit" class="validate btn"><?php echo JText::_('JSUBMIT'); ?></button>
				</div>
			</div>
		</fieldset>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
