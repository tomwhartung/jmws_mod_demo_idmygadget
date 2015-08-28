<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_demo_idmygadget
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="custom<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
	<?php echo $module->content;?>
	<?php $uri = & JFactory::getURI(); ?>
	<ul>
		<li><a href="<?php print $uri . '?gadgetType=phone'; ?>" title="Emulate Phone">
			Emulate Phone</a></li>
		<li><a href="<?php print $uri . '?gadgetType=tablet'; ?>" title="Emulate Tablet">
			Emulate Tablet</a></li>
		<li><a href="<?php print $uri . '?gadgetType=desktop'; ?>" title="Emulate Desktop">
			Emulate Desktop</a></li>
	</ul>
</div>
