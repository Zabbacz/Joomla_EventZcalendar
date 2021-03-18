<?php
/**
 * ZCalendar Module Entry Point
 * 
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * mod_ZCalendar is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$next_actions = modEventZCalendarHelper::getNext_actions();
require JModuleHelper::getLayoutPath('mod_eventzcalendar');