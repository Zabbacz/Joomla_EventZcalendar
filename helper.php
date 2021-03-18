<?php
/**
 * Helper class for ZCalendar module
 * 
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_zcalendar is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModEventZCalendarHelper
{
    public static function getNext_actions()
    {
    	$date = new DateTime('now');
//		$cur_date = $date->getTimestamp();
		$cur_date = $date->format('Y-m-d');
//		$cur_date = $date->('now');
//				$cur_date = date("Y-m-d H:i:s"); 

      // Obtain a database connection
$db = JFactory::getDbo();
// Retrieve the shout
$query = $db->getQuery(true)
            ->select($db->quoteName(array('nazev','datum','nazev_typu', 'akce_odkaz')))
            ->from($db->quoteName('#__akce', 'a'))
				 ->join('INNER', $db->quoteName('#__akce_typ', 'b') . ' ON ' . $db->quoteName('a.typ_zavodu') . ' = ' . $db->quoteName('b.typ_zavodu')) 
				 ->where($db->quoteName('a.datum')	.' > '."'".$cur_date."'") 
				->order($db->quoteName('a.datum').' ASC')
				->setlimit('4');
// Prepare the query
$db->setQuery($query);
$results = $db->loadObjectList();
return $results;   
 }
}
