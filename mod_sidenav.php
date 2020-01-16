<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_sidenav
 *
 * @copyright   Copyright (C) Billy Somers 2020. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . 'helper.php';

$sidenav = modSideNav::getSideNav($params);

require JModuleHelper::getLayoutPath('mod_sidenav');

