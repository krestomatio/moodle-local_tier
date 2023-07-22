<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_tier
 * @category    string
 * @copyright   2022 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'תוסף טייר';
$string['privacy:metadata'] = 'תוסף טייר אינו אוסף נתונים אישיים';
$string['totaluserstaskname'] = 'משימת משתמשים כוללים';
$string['totalstoragetaskname'] = 'משימת אחסון כולל';
$string['errormaxstorageuploadfailed'] = 'העלאת הקובץ נכשלה עקב הגעתך לגבול האחסון המרבי. הגבול המרבי לאחסון הוא {$a->maxstoragebytes} בייטים בעוד שהקובץ {$a->filename} בגודל של {$a->filesize} בייטים והסך הכולל של האחסון הנוכחי הוא {$a->totalstoragebytes} בייטים (כולל בסיס הנתונים)';
$string['errormaxstoragecreateuserfailed'] = 'יצירת המשתמש נכשלה עקב הגעתך לגבול המשתמשים המרבי. הגבול המרבי למשתמשים רשומים הוא {$a->maxregisteredusers} משתמשים בעוד שהמספר הכולל הנוכחי של משתמשים רשומים הוא {$a->totalregisteredusers} משתמשים';
$string['restrictedadminsettingssection'] = 'מדובר כרגע בסעיף הגדרות מנהל המוגבל לכל המשתמשים כהזהרה למניעת הגדרות שגויות של ביצועיות והתאמות';
$string['restrictedadminsettingscategory'] = 'מדובר כרגע בקטגוריית הגדרות מנהל המוגבלת לכל המשתמשים כהזהרה למניעת הגדרות שגויות של ביצועיות והתאמות';
$string['restrictedadminpage'] = 'מדובר כרגע בדף הגדרות מנהל המוגבל לכל המשתמשים כהזהרה למניעת הגדרות שגויות של ביצועיות והתאמות';
