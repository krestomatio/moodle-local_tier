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
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbtypeunsupported'] = 'סוג מסד הנתונים "{$a->dbtype}" אינו נתמך';
$string['errormaxconcurrentsessions'] = 'הגבול של הפעלות בו-זמנית הושג. לא ניתן ליצור הפעלה חדשה כעת. אנא נסה שוב מאוחר יותר. המקסימום הוא {$a->maxconcurrentsessions} וההפעלות הפעילות הנוכחיות הן {$a->totalconcurrentsessions}.';
$string['errormaxstoragecreateuserfailed'] = 'יצירת המשתמש נכשלה בשל הגעה למגבלת המשתמשים המרבית. מספר המשתמשים המרבי הוא {$a->maxregisteredusers} משתמשים, וסך המשתמשים הרשומים הנוכחי הוא {$a->totalregisteredusers} משתמשים';
$string['errormaxstorageuploadfailed'] = 'העלאת הקובץ נכשלה בשל הגעה למגבלת האחסון המרבית. האחסון המרבי הוא {$a->maxstoragebytes} בתים בעוד הקובץ {$a->filename} בגודל {$a->filesize} בתים, וסך כל האחסון הנוכחי הוא {$a->totalstoragebytes} בתים (כולל מסד הנתונים)';
$string['maxconcurrentsessions'] = 'מקסימום הפעלות בו-זמנית';
$string['maxconcurrentsessionsdesc'] = 'מקסימום מספר ההפעלות הפעילות בו-זמנית המותר במופע. זהו המספר המרבי של הפעלות פעילות שניתן ליצור בו-זמנית עבור כל המשתמשים. אם יושג מגבלה זו, לא ניתן יהיה ליצור הפעלות חדשות עד שחלק מההפעלות הקיימות יפוגו (ראה "sessiontimeout"), יסגרו, או שהמגבלה תוגדל. המשתמש המנהל הראשי אינו נכלל במגבלה זו.';
$string['maxregisteredusers'] = 'מקסימום משתמשים רשומים';
$string['maxregisteredusersdesc'] = 'מספר המשתמשים המרבי המותר במופע. המשתמש המנהל הראשי אינו נכלל במגבלה זו.';
$string['maxstoragebytes'] = 'מקסימום אחסון בבתים';
$string['maxstoragebytesdesc'] = 'האחסון המרבי המותר במופע בבתים. זה כולל את כל הקבצים שהועלו על ידי המשתמשים ואת גודל מסד הנתונים. אם יושג מגבלה זו, לא ניתן יהיה להעלות קבצים חדשים עד שמספר קבצים קיימים יימחקו לחלוטין (יתרוקנו מהסל, ראה "filescleanupperiod") או עד שהמגבלה תוגדל.';
$string['pluginname'] = 'שכבת מופע';
$string['privacy:metadata'] = 'שכבת המופע אינה מאחסנת נתונים אישיים';
$string['restrictedadminpage'] = 'דף זה של הגדרות הניהול מוגבל כרגע לכל המשתמשים כאמצעי זהירות למניעת תצורה שגויה של הגדרות ביצועים ואופטימיזציה';
$string['restrictedadminpages'] = 'דפי ניהול מוגבלים';
$string['restrictedadminpagesdesc'] = 'רשימה מופרדת בפסיקים של דפי ניהול שמוגבלות כרגע לכל משתמש. לדוגמה: "/cache/testperformance.php,/cache/admin.php"';
$string['restrictedadminsettingscategories'] = 'קטגוריות הגדרות ניהול מוגבלות';
$string['restrictedadminsettingscategoriesdesc'] = 'רשימה מופרדת בפסיקים של קטגוריות הגדרות ניהול שמוגבלות כרגע לכל משתמש. לדוגמה: "cachestores"';
$string['restrictedadminsettingscategory'] = 'קטגוריה זו של הגדרות הניהול מוגבלת כרגע לכל המשתמשים כאמצעי זהירות למניעת תצורה שגויה של הגדרות ביצועים ואופטימיזציה';
$string['restrictedadminsettingssection'] = 'קטע זה של הגדרות הניהול מוגבל כרגע לכל המשתמשים כאמצעי זהירות למניעת תצורה שגויה של הגדרות ביצועים ואופטימיזציה';
$string['restrictedadminsettingssections'] = 'סעיפי הגדרות ניהול מוגבלים';
$string['restrictedadminsettingssectionsdesc'] = 'רשימה מופרדת בפסיקים של סעיפי הגדרות ניהול שמוגבלות כרגע לכל משתמש. לדוגמה: "cachestore_apcu_settings,cachestore_memcached_settings"';
$string['settingsheading'] = 'הגדרות שכבת המופע';
$string['settingsheadinginfo'] = 'ההגדרות הבאות קובעות את המגבלות עבור מופע זה.';
$string['settingspage'] = 'הגדרות שכבת המופע';
$string['statusheading'] = 'מצב שכבת המופע';
$string['statusheadinginfo'] = '
| מדד                                   | ערך                             |
| ------------------------------------- | ------------------------------- |
| סך כל ההפעלות בו-זמנית&nbsp;&nbsp;    | **{$a->totalconcurrentsessions}** |
| סך כל המשתמשים הרשומים&nbsp;&nbsp;   | **{$a->totalregisteredusers}**    |
| סך כל האחסון בשימוש (בתים)&nbsp;&nbsp; | **{$a->totalstoragebytes}**      |
';
$string['statuspage'] = 'מצב שכבת המופע';
$string['totalregistereduserstaskname'] = 'משימת סך כל המשתמשים הרשומים';
$string['totalsessionstaskname'] = 'משימת סך כל ההפעלות';
$string['totalstoragetaskname'] = 'משימת סך כל האחסון';
