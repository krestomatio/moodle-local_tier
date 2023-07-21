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

$string['pluginname'] = 'Tier plugin';
$string['privacy:metadata'] = 'Tier plugin does not store any personal data';
$string['totaluserstaskname'] = 'Total Users task';
$string['totalstoragetaskname'] = 'Total Storage task';
$string['errormaxstorageuploadfailed'] = 'File upload failed due to reaching the maximum storage limit. Max storage is {$a->maxstoragebytes} bytes while file {$a->filename} is {$a->filesize} bytes and current total storage is {$a->totalstoragebytes} bytes (including database)';
$string['errormaxstoragecreateuserfailed'] = 'User creation failed due to reaching the maximum users limit. Max registered users is {$a->maxregisteredusers} users while current total registered users is {$a->totalregisteredusers} users';
$string['restrictedadminsettingssection'] = 'This admin section is currently restricted for all users as a precautionary measure to prevent misconfiguring performance and optimization-related settings';
$string['restrictedadminpage'] = 'This admin page is currently restricted for all users as a precautionary measure to prevent misconfiguring performance and optimization-related settings';
