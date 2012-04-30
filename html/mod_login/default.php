<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_login
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive'); ?>

<?php if ($type == 'logout') : ?>
	<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" class="form-horizontal" style="float: right;">
		<?php if ($params->get('greeting')) : ?>
			<label class="control-label">
				<?php if($params->get('name') == 0) : {
					echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name')));
				} else : {
					echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username')));
				} endif; ?>
			</label>
		<?php endif; ?>
			<div class="controls">
				<input type="submit" name="Submit" class="btn" value="<?php echo JText::_('JLOGOUT'); ?>" />
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="user.logout" />
				<input type="hidden" name="return" value="<?php echo $return; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
	</form>
<?php else : ?>
	<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" class="form-inline" style="padding-left: 70px;">

		<?php if ($params->get('pretext')): ?>
			<p class="help-block"><?php echo $params->get('pretext'); ?></p>
		<?php endif; ?>

		<div class="row-fluid">
				<div class="span9">
				<input id="modlgn-username" type="text" name="username" class="input-small" placeholder="Username" />
				<input id="modlgn-passwd" type="password" name="password" class="input-small" placeholder="Password"  />
				<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
					<label for="modlgn-remember" class="checkbox">
						<input id="modlgn-remember" type="checkbox" name="remember" value="yes"/>
						<?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?>
					</label>
				<?php endif; ?>
				<input type="submit" name="Submit" class="btn" value="<?php echo JText::_('JLOGIN') ?>" />

				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="user.login" />
				<input type="hidden" name="return" value="<?php echo $return; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
			<div class="span3">
			    <div class="btn-group">
					<a class="btn" title="<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>"><i class="icon-lock"></i></a>
					<a class="btn" title="<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>"><i class="icon-question-sign"></i></a>
					<?php
					$usersConfig = JComponentHelper::getParams('com_users');
					if ($usersConfig->get('allowUserRegistration')) : ?>
						<a class="btn" title="<?php echo JText::_('MOD_LOGIN_REGISTER'); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"><i class="icon-plus-sign"></i></a>
					<?php endif; ?>
			    </div>
			</div>
		</div>
		<?php if ($params->get('posttext')): ?>
			<p class="help-block"><?php echo $params->get('posttext'); ?></p>
		<?php endif; ?>
	</form>
<?php endif; ?>
