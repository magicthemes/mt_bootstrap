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
<div class="remind<?php echo $this->pageclass_sfx?> span8 offset2">
	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="form-validate form-inline well">
		<div class="alert alert-block alert-info"><?php echo JText::_('Please enter the email address associated with your User account. Your username will be emailed to the email address on file.'); ?></div>
		<fieldset class="offset2">
			<div class="control-group">
				<div class="controls">
					<input type="email" value="" id="jform_email" class="validate-email required invalid" name="jform[email]" aria-required="true" required="required" aria-invalid="true" placeholder="Enter email address">
					<button type="submit" class="validate btn"><?php echo JText::_('JSUBMIT'); ?></button>
				</div>
			</div>
		</fieldset>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
