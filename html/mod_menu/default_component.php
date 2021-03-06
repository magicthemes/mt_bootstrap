<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.

//Additional attributes for parent items
if ($item->parent){
	$class = 'class="dropdown-toggle"';
	$data_toggle = 'data-toggle="dropdown"';
	$caret =  '<b class="caret"></b>';
}

$anchor_class = $item->anchor_css ? '<i class="'.$item->anchor_css.'"></i> ' : '';

$title = $item->anchor_title ? 'title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image) {
		$item->params->get('menu_text', 1 ) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
}
else { $linktype = $item->title; }

switch ($item->browserNav) :
	default:
	case 0:
		?><a class="<?php if( $item->parent ) { echo $dropdown_class; } ?>" <?php if( $item->parent ) { echo $data_toggle; } ?>href="<?php echo $item->flink; ?>" <?php echo $title; ?>><?php echo $anchor_class; echo $linktype; ?> <?php if( $item->parent ) { echo $caret; } ?></a><?php
		break;
	case 1:
		// _blank
		?><a class="<?php if( $item->parent ) { echo $dropdown_class; } ?>" <?php if( $item->parent ) { echo $data_toggle; } ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $anchor_class; echo $linktype; ?> <?php if( $item->parent ) { echo $caret; } ?></a><?php
		break;
	case 2:
		// window.open
		?><a <?php echo $class; ?> <? if( $item->parent ) { echo $data_toggle; } ?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php echo $anchor_class; echo $linktype; ?> <?php if( $item->parent ) { echo $caret; } ?></a><?php
		break;
endswitch;
