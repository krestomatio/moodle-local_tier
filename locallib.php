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

/**
 * Check if max storage has been reached
 * @param mixed $newrecord
 * @param mixed $pathname
 * @throws \moodle_exception
 * @return void
 */
function check_max_storage($newrecord, $pathname = null) {
    global $DB;

    // If empty pathname, nothing to do.
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
    // If max storage not set, nothing to do.
    if (empty($config->maxstoragebytes)) {
        return;
    }

    $maxstoragebytes = $config->maxstoragebytes;
    $totalstoragebytes = $config->totalstoragebytes;
    $proyectedtotalstoragebytes = $filesize + $totalstoragebytes;

    // Check if max storage reached, if so trow an error,
    // else calculate new total storage.
    if ($proyectedtotalstoragebytes >= $maxstoragebytes) {
        throw new moodle_exception('errormaxstorageuploadfailed', 'local_tier', '', array(
            'maxstoragebytes' => $maxstoragebytes,
            'filename' => $filename,
            'filesize' => $filesize,
            'totalstoragebytes' => $totalstoragebytes
        ));
    }
}

/**
 * Check and set total users
 * @param mixed $user
 * @throws \moodle_exception
 * @return void
 */
function check_max_registered_users($user) {
    if (!$user) {
        return;
    }

    $config = get_config('local_tier');
    // If max storage not set, nothing to do.
    if (empty($config->maxregisteredusers)) {
        return;
    }

    $maxregisteredusers = $config->maxregisteredusers;
    $totalregisteredusers = get_total_registered_users();

    // Check if max storage reached, if so trow an error,
    // else calculate new total storage.
    if ($totalregisteredusers >= $maxregisteredusers) {
        throw new moodle_exception('errormaxstoragecreateuserfailed', 'local_tier', '', array(
            'maxregisteredusers' => $maxregisteredusers,
            'totalregisteredusers' => $totalregisteredusers
        ));
    }
}

/**
 * Calculate total storage in bytes
 * @return void
 */
function set_total_storage() {
    global $CFG, $DB;

    // Get total files in bytes from moodle database.
    $filesbytes = get_total_files();

    // Get total database size in bytes.
    $databasebytes = get_total_database();

    set_config('total_filesbytes', $filesbytes, 'local_tier');
    set_config('total_databasebytes', $databasebytes, 'local_tier');
    set_config('totalstoragebytes', $filesbytes + $databasebytes, 'local_tier');
}

/**
 * Calculate total files in bytes
 * @return mixed
 */
function get_total_files() {
    global $DB;

    $filesbytessql = "SELECT SUM(d.filesize) AS value
                        FROM (SELECT DISTINCT f.contenthash, f.filesize
                        FROM {files} f) d";

    return $DB->get_field_sql($filesbytessql);
}

/**
 * Calculate total database in bytes
 * @return mixed
 */
function get_total_database() {
    global $CFG, $DB;

    $databasebytessql = "SELECT pg_database_size(?)";

    return $DB->get_field_sql($databasebytessql, [$CFG->dbname]);
}

/**
 * Calculate total users
 * @return int
 */
function get_total_registered_users() {
    global $DB;

    // Get registered users (minus delete ones, guest and admin).
    $registereduserssql = "SELECT COUNT(id) FROM {user} WHERE deleted = 0 AND id > 2";

    return (int) $DB->get_field_sql($registereduserssql);
}

/**
 * Restrict admin pages, if set
 * @throws \moodle_exception
 * @return void
 */
function restrict_admin_page() {
    global $SCRIPT;

    $config = get_config('local_tier');
    // If no restrictedadminsettingssection set, nothing to do.
    if (empty($config->restrictedadminpages)) {
        return;
    }

    $restrictedadminpages = $config->restrictedadminpages;

    if (in_array($SCRIPT, explode(",", $restrictedadminpages))) {
        throw new moodle_exception('restrictedadminpage', 'local_tier');
    }
}

/**
 * Restrict admin settings sections, if set
 * @param mixed $courseorid
 * @throws \moodle_exception
 * @return void
 */
function restrict_admin_settings_section($courseorid = null) {
    global $FULLME;

    // If not admin context, nothing to do.
    if (!is_int($courseorid) || $courseorid !== 0) {
        return;
    }

    $config = get_config('local_tier');
    // If no restrictedadminsettingssection set, nothing to do.
    if (empty($config->restrictedadminsettingssections)) {
        return;
    }

    // Parse section param.
    $restrictedadminsettingssections = $config->restrictedadminsettingssections;
    $querystring = parse_url($FULLME, PHP_URL_QUERY);
    parse_str($querystring, $params);

    if (isset($params['section']) && in_array($params['section'], explode(",", $restrictedadminsettingssections))) {
        throw new moodle_exception('restrictedadminsettingssection', 'local_tier');
    }
}

/**
 * Restrict admin settings categories, if set
 * @param mixed $courseorid
 * @throws \moodle_exception
 * @return void
 */
function restrict_admin_settings_category($courseorid = null) {
    global $FULLME;

    // If not admin context, nothing to do.
    if (!is_int($courseorid) || $courseorid !== 0) {
        return;
    }

    $config = get_config('local_tier');
    // If no restrictedadminsettingscategory set, nothing to do.
    if (empty($config->restrictedadminsettingscategories)) {
        return;
    }

    // Parse category param.
    $restrictedadminsettingscategories = $config->restrictedadminsettingscategories;
    $querystring = parse_url($FULLME, PHP_URL_QUERY);
    parse_str($querystring, $params);

    if (isset($params['category']) && in_array($params['category'], explode(",", $restrictedadminsettingscategories))) {
        throw new moodle_exception('restrictedadminsettingscategory', 'local_tier');
    }
}

/**
 * Convert bytes to gigabytes
 * @param mixed $bytes
 * @return float
 */
function convert_bytes_to_gb($bytes) {
    return round($bytes / 1024 / 1024 / 1024, 1);
}

/**
 * Convert bytes to gibibytes
 * @param mixed $bytes
 * @return float
 */
function convert_bytes_to_gib($bytes) {
    return round($bytes / 1000 / 1000 / 1000, 1);
}
