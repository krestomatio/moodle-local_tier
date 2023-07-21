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
 * Plugin administration pages are defined here.
 *
 * @package     local_tier
 * @category    admin
 * @copyright   2022 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Check if max storage has been reached
 * @param mixed $newrecord
 * @param mixed $pathname
 * @throws \moodle_exception
 * @return void
 */
function check_max_storage($newrecord, $pathname = null) {
    global $DB;

    // if empty pathname, nothing to do
    $filepath = $pathname["pathname"];
    if (!$filepath) {
        return;
    }

    $filesize = filesize($filepath);
    $filename = $newrecord->filename;
    if (!$filesize) {
        return;
    }

    $config = get_config('local_tier');
    // if max storage not set, nothing to do
    if (empty($config->max_storage_bytes)) {
        return;
    }

    $max_storage_bytes = $config->max_storage_bytes;
    $total_storage_bytes = $config->total_storage_bytes;
    $proyected_total_storage_bytes = $filesize + $total_storage_bytes;

    // Check if max storage reached, if so trow an error, else calculate new total storage
    if ($proyected_total_storage_bytes >= $max_storage_bytes) {
        throw new moodle_exception('error_maxstorageuploadfailed', 'local_tier', '', array('max_storage_bytes' => $max_storage_bytes, 'filename' => $filename, 'filesize' => $filesize,  'total_storage_bytes' => $total_storage_bytes));
    }
}

/**
 * Check and set total users
 * @param mixed $user
 * @throws \moodle_exception
 * @return void
 */
function check_max_registered_users($user) {
    if(!$user){
        return;
    }

    $config = get_config('local_tier');
    // if max storage not set, nothing to do
    if (empty($config->max_registered_users)) {
        return;
    }

    $max_registered_users = $config->max_registered_users;
    $total_registered_users = get_total_registered_users();

    // Check if max storage reached, if so trow an error, else calculate new total storage
    if ($total_registered_users >= $max_registered_users) {
        throw new moodle_exception('error_maxstoragecreateuserfailed', 'local_tier', '', array('max_registered_users' => $max_registered_users, 'total_registered_users' => $total_registered_users));
    }
}

/**
 * Calculate total storage in bytes
 * @return void
 */
function set_total_storage() {
    global $CFG,$DB;

    # get total files in bytes from moodle database
    $files_bytes = get_total_files();

    # get total database size in bytes
    $database_bytes = get_total_database();

    set_config('total_files_bytes', $files_bytes, 'local_tier');
    set_config('total_database_bytes', $database_bytes, 'local_tier');
    set_config('total_storage_bytes', $files_bytes+$database_bytes, 'local_tier');
}

/**
 * Calculate total files in bytes
 * @return mixed
 */
function get_total_files() {
    global $DB;

    $files_bytes_sql = "SELECT SUM(d.filesize) AS value
                        FROM (SELECT DISTINCT f.contenthash, f.filesize
                        FROM {files} f) d";

    return $DB->get_field_sql($files_bytes_sql);
}

/**
 * Calculate total database in bytes
 * @return mixed
 */
function get_total_database() {
    global $CFG,$DB;

    $database_bytes_sql = "SELECT pg_database_size(?)";

    return $DB->get_field_sql($database_bytes_sql,[$CFG->dbname]);
}

/**
 * Calculate total users
 * @return int
 */
function get_total_registered_users() {
    global $DB;

    # get registered users (minus delete ones, guest and admin)
    $registered_users_sql = "SELECT COUNT(id) FROM {user} WHERE deleted = 0 AND id > 2";

    return (int) $DB->get_field_sql($registered_users_sql);
}

/**
 * Restrict admin pages, if set
 * @throws \moodle_exception
 * @return void
 */
function restrict_admin_page(){
    global $SCRIPT;

    $config = get_config('local_tier');
    // if no restrictedadminsettingssection set, nothing to do
    if (empty($config->restrictedadminpages)) {
        return;
    }

    // parse section param
    $restrictedadminpages = $config->restrictedadminpages;

    if (in_array($SCRIPT, explode(",", $restrictedadminpages))) {
        throw new moodle_exception('restrictedadminpage', 'local_tier');
    }
}

/**
 * Restrict admin sections, if set
 * @param mixed $courseorid
 * @throws \moodle_exception
 * @return void
 */
function restrict_admin_settings_section($courseorid = null){
    global $FULLME;

    // if not admin context, nothing to do
    if (!is_int($courseorid) || $courseorid !== 0) {
        return;
    }

    $config = get_config('local_tier');
    // if no restrictedadminsettingssection set, nothing to do
    if (empty($config->restrictedadminsettingssections)) {
        return;
    }

    // parse section param
    $restrictedadminsettingssections = $config->restrictedadminsettingssections;
    $queryString = parse_url($FULLME, PHP_URL_QUERY);
    parse_str($queryString, $params);

    if (isset($params['section']) && in_array($params['section'], explode(",", $restrictedadminsettingssections))) {
        throw new moodle_exception('restrictedadminsettingssection', 'local_tier');
    }
}


/**
 * Convert bytes to gigabytes
 * @param mixed $bytes
 * @return float
 */
function convertBytesToGB($bytes) {
    return round($bytes / 1024 / 1024 / 1024,1);
}

/**
 * Convert bytes to gibibytes
 * @param mixed $bytes
 * @return float
 */
function convertBytesToGiB($bytes) {
    return round($bytes / 1000 / 1000 / 1000,1);
}
