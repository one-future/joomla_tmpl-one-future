<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.cassiopeia
 *
 * @copyright   (C) 2020 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Log\Log;

$module  = $displayData['module'];
$params  = $displayData['params'];
// $attribs = $displayData['attribs'];

$moduleTag      = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
$moduleClass    = $bootstrapSize !== 0 ? ' span' . $bootstrapSize : '';

// Temporarily store header class in variable
$headerClass    = $params->get('header_class');
$headerClass    = $headerClass ? ' class="' . htmlspecialchars($headerClass, ENT_COMPAT, 'UTF-8') . '"' : '';

Log::add('$moduleTag' . ' $headerTag ' . ' $module->id', Log::INFO, 'debug');

if (!empty($module->content)) : ?>

    <<?php echo $moduleTag; ?> class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8') . $moduleClass . " narrow"; ?>" id="module-<?php echo $module->id ?>">
        <?php if ((bool) $module->showtitle) : ?>
            <<?php echo $headerTag . $headerClass ?>>
                <?php echo $module->title; ?>
            </<?php echo $headerTag; ?>>
        <?php endif; ?>
        <?php echo $module->content; ?>
    </<?php echo $moduleTag; ?>>
<?php endif; ?>