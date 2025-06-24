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

$string['pluginname'] = 'Instance Tier';
$string['statuspage'] = 'Instance Tier Status';
$string['settingspage'] = 'Instance Tier Settings';
$string['privacy:metadata'] = 'Instance Tier does not store any personal data';
$string['totalregistereduserstaskname'] = 'Total Registered Users task';
$string['totalstoragetaskname'] = 'Total Storage task';
$string['totalsessionstaskname'] = 'Total Sessions task';
$string['errormaxstorageuploadfailed'] = 'File upload failed due to reaching the maximum storage limit. Max storage is {$a->maxstoragebytes} bytes while file {$a->filename} is {$a->filesize} bytes and current total storage is {$a->totalstoragebytes} bytes (including database)';
$string['errormaxstoragecreateuserfailed'] = 'User creation failed due to reaching the maximum users limit. Max registered users is {$a->maxregisteredusers} users while current total registered users is {$a->totalregisteredusers} users';
$string['restrictedadminsettingssection'] = 'This admin settings section is currently restricted for all users as a precautionary measure to prevent misconfiguring performance and optimization-related settings';
$string['restrictedadminsettingscategory'] = 'This admin settings category is currently restricted for all users as a precautionary measure to prevent misconfiguring performance and optimization-related settings';
$string['restrictedadminpage'] = 'This admin settings page is currently restricted for all users as a precautionary measure to prevent misconfiguring performance and optimization-related settings';
$string['statusheading'] = 'Instance Tier Status';
$string['statusheadinginfo'] = '
| Metric                                 | Value                          |
| -------------------------------------- | ------------------------------ |
| Total concurrent sessions&nbsp;&nbsp;  | **{$a->totalconcurrentsessions}** |
| Total registered users&nbsp;&nbsp;     | **{$a->totalregisteredusers}** |
| Total storage used (bytes)&nbsp;&nbsp; | **{$a->totalstoragebytes}**    |
';
$string['settingsheading'] = 'Instance Tier Settings';
$string['settingsheadinginfo'] = 'The following settings control the limits for this instance.';
$string['maxregisteredusers'] = 'Maximum registered users';
$string['maxregisteredusersdesc'] = 'Maximum number of registered users allowed in the instance. The main admin user is not counted in this limit.';
$string['maxstoragebytes'] = 'Maximum storage in bytes';
$string['maxstoragebytesdesc'] = 'Maximum storage allowed in the instance in bytes. This includes all files uploaded by users, as well as the database size. If this limit is reached, no new files can be uploaded until some existing files are completely deleted (emptied from trash, see `filescleanupperiod`), or the limit is increased.';
$string['maxconcurrentsessions'] = 'Maximum concurrent sessions';
$string['maxconcurrentsessionsdesc'] = 'Maximum number of global concurrent sessions allowed in the instance. This is the maximum number of active sessions that can be created at the same across all users. If this limit is reached, no new sessions can be created until some existing sessions expire (see `sessiontimeout`), are closed, or the limit is increased. The main admin user is not counted in this limit.';
$string['errormaxconcurrentsessions'] = 'Maximum concurrent sessions limit reached. You cannot create a new session at this time. Please try again later. Max concurrent sessions is {$a->maxconcurrentsessions} and current total active sessions is {$a->totalconcurrentsessions}';
$string['dbtypeunsupported'] = 'Database type "{$a->dbtype}" is unsupported';
$string['restrictedadminsettingscategories'] = 'Restricted admin settings categories';
$string['restrictedadminsettingscategoriesdesc'] = 'Comma separated list of admin settings categories that are currently restricted for any user. E.g. `cachestores`';
$string['restrictedadminsettingssections'] = 'Restricted admin settings sections';
$string['restrictedadminsettingssectionsdesc'] = 'Comma separated list of admin settings sections that are currently restricted for any user. E.g. `cachestore_apcu_settings,cachestore_memcached_settings`';
$string['restrictedadminpages'] = 'Restricted admin pages';
$string['restrictedadminpagesdesc'] = 'Comma separated list of admin pages that are currently restricted for any user. E.g. `/cache/testperformance.php,/cache/admin.php`';
