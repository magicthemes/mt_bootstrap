<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_breadcrumbs
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="breadcrumb<?php echo $moduleclass_sfx; ?>">
	<?php if ($params->get('showHere', 1))
		{
			echo '<span class="showHere">' .JText::_('MOD_BREADCRUMBS_HERE').'</span>';
		}
	?>
	<?php for ($i = 0; $i < $count; $i ++) :
		?><li <?php if ($i == $count - 1) { echo 'active'; } ?>><?php
			// If not the last item in the breadcrumbs add the separator
			if ($i < $count -1) {
				if (!empty($list[$i]->link)) {
					echo '<a href="'.$list[$i]->link.'" class="pathway">'.$list[$i]->name.'</a>';
				} else {
					echo '<span>';
					echo $list[$i]->name;
					echo '</span>';
				}
				if($i < $count -2){?>
					<span class="divider">/<?php //echo $separator; ?></span>
				<?php }
			}  elseif ($params->get('showLast', 1)) { // when $i == $count -1 and 'showLast' is true
				if($i > 0){?>
					<span class="divider">/<?php //echo $separator; ?></span>
				<?php }
				echo '<span>';
					echo $list[$i]->name;
				echo '</span>';
			}
		?></li><?php
	endfor; ?>
</ul>
