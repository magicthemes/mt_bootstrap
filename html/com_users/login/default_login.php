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
?>
<div class="span4 offset4">
    <form class="well" action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post">
        <fieldset>
            <legend>Login</legend>
				<div class="control-group">
	                <div class="controls">
						<input type="text" name="username" id="username" value="" class="validate-username input-xlarge" placeholder="Username">
					</div>
				</div>
				<div class="control-group">
	                <div class="controls">
						<input type="password" name="password" id="password" value="" class="validate-password input-xlarge" placeholder="Password">
					</div>
				</div>
	        <div>
	            <p>Forgot <a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">Username</a> or <a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-primary"><?php echo JText::_('JLOGIN'); ?></button>
	        </div>
			<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php echo JHtml::_('form.token'); ?>
        </fieldset>
	</form>
</div>