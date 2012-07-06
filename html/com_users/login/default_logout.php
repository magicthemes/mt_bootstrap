<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;
?>
<div class="span4 offset4">
	<form class="well" action="<?php echo JRoute::_('index.php?option=com_users&task=user.logout'); ?>" method="post">
		<div class="alert alert-block alert-warning">
			Log out
		</div>
		<div class="clearfix">
			<button type="submit" class="btn btn-warning btn-large pull-right"><?php echo JText::_('JLOGOUT'); ?></button>
			<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('logout_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
</div>