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

namespace local_tier;

/**
 * Tier class for managing storage and user limits in Moodle.
 *
 * @package     local_tier
 * @category    tier
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class tier {

    /**
     * Check if max storage has been reached
     * @param mixed $newrecord
     * @param mixed $pathname
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function check_max_storage($newrecord, $filepath = null) {
        global $DB;

        // If empty pathname, nothing to do.
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
        $totalstoragebytes = self::get_total_storage_from_config();
        $proyectedtotalstoragebytes = $filesize + $totalstoragebytes;

        // Check if max storage reached, if so trow an error.
        if ($proyectedtotalstoragebytes >= $maxstoragebytes) {
            throw new \core\exception\moodle_exception('errormaxstorageuploadfailed', 'local_tier', '', [
                'maxstoragebytes' => $maxstoragebytes,
                'filename' => $filename,
                'filesize' => $filesize,
                'totalstoragebytes' => $totalstoragebytes,
            ]);
        }
    }

    /**
     * Calculate total storage in bytes
     * @return void
     */
    public static function set_total_storage() {
        // Get storage totals into variable array from get_storage_totals
        $storagearray = self::get_storage_totals();

        // Store it in moodle config for easy access.
        set_config('totalfilesbytes', $storagearray['totalfilesbytes'], 'local_tier');
        set_config('totaldatabasebytes', $storagearray['totaldatabasebytes'], 'local_tier');
        set_config('totalstoragebytes', $storagearray['totalstoragebytes'], 'local_tier');
    }

    /**
     * Calculate total files in bytes
     * @return mixed
     */
    public static function get_total_files() {
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
    public static function get_total_database() {
        global $CFG, $DB;

        switch ($CFG->dbtype) {
            case 'mysqli':
            case 'mariadb':
            case 'auroramysql':
                $databasebytessql = "SELECT SUM(data_length + index_length)
                                  FROM information_schema.tables
                                  WHERE table_schema = ?";
                break;
            case 'pgsql':
                $databasebytessql = "SELECT pg_database_size(?)";
                break;
            default:
                throw new \core\exception\moodle_exception('dbtypeunsupported', 'local_tier', '', ['dbtype' => $CFG->dbtype]);
        }

        return $DB->get_field_sql($databasebytessql, [$CFG->dbname]);
    }

    /**
     * Get total storage in bytes from config
     * @return mixed
     */
    public static function get_total_storage_from_config() {
        $totalstoragebytes = get_config('local_tier')->totalstoragebytes ?? 0;
        return $totalstoragebytes;
    }

    /**
     * Get total storage in bytes from database
     * @return mixed
     */
    public static function get_total_storage_from_db() {
        // Get total storage in bytes.
        return self::get_total_files() + self::get_total_database();
    }

    /**
     * Get storage totals
     * @return array
     */
    public static function get_storage_totals() {
        // Get total files in bytes from moodle database.
        $totalfilesbytes = self::get_total_files();

        // Get total database size in bytes.
        $totaldatabasebytes = self::get_total_database();

        // If no files or database size, nothing to do.
        $totalstoragebytes = $totalfilesbytes + $totaldatabasebytes;

        return [
            'totalfilesbytes' => $totalfilesbytes,
            'totaldatabasebytes' => $totaldatabasebytes,
            'totalstoragebytes' => $totalstoragebytes,
        ];
    }

    /**
     * Check and set total users
     * @param mixed $user
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function check_max_registered_users($user) {
        if (!$user) {
            return;
        }

        $config = get_config('local_tier');
        // If max storage not set, nothing to do.
        if (empty($config->maxregisteredusers)) {
            return;
        }

        $maxregisteredusers = $config->maxregisteredusers;
        $totalregisteredusers = self::get_total_registered_users_from_config();

        // Check if max storage reached, if so trow an error.
        if ($totalregisteredusers >= $maxregisteredusers) {
            throw new \core\exception\moodle_exception('errormaxstoragecreateuserfailed', 'local_tier', '', [
                'maxregisteredusers' => $maxregisteredusers,
                'totalregisteredusers' => $totalregisteredusers,
            ]);
        }
    }

    /**
     * Get total registered users from config
     * @return int
     */
    public static function set_total_registered_users() {
        // Get total registered users from database.
        $totalregisteredusers = self::get_total_registered_users_from_db();

        // Store it in moodle config for easy access.
        set_config('totalregisteredusers', $totalregisteredusers, 'local_tier');
    }

    /**
     * Get total registered users from config
     * @return int
     */
    public static function get_total_registered_users_from_config() {
        $totalregisteredusers = get_config('local_tier')->totalregisteredusers ?? 0;
        return $totalregisteredusers;
    }

    /**
     * Get total registered users from database
     * @return int
     */
    public static function get_total_registered_users_from_db() {
        global $DB;

        // Get registered users (minus delete ones, guest and admin).
        $registereduserssql = "SELECT COUNT(id) FROM {user} WHERE deleted = 0 AND id > 2";

        return (int) $DB->get_field_sql($registereduserssql);
    }

    /**
     * Check if max sessions has been reached
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function check_max_sessions() {
        $sid = session_id();
        $session = \core\session\manager::get_session_by_sid($sid);
        $timecreated = $session->timecreated ?? 0;
        $timemodified = $session->timemodified ?? 0;

        // if userid is 0 (no user), return
        if ($session->userid === 0) {
            return;
        }

        // if userid is 2 (admin), return
        if ($session->userid === 2) {
            return;
        }

        // Assure this is a new session.
        if ($timemodified > $timecreated) {
            return;
        }

        $config = get_config('local_tier');
        // If max storage not set, nothing to do.
        if (empty($config->maxconcurrentsessions)) {
            return;
        }

        $maxconcurrentsessions = $config->maxconcurrentsessions;
        $totalconcurrentsessions = self::get_total_sessions_from_config();

        // Check if max concurrentsessions reached, if so trow an error.
        if ($totalconcurrentsessions > $maxconcurrentsessions) {
            require_logout();
            throw new \core\exception\moodle_exception('errormaxconcurrentsessions', 'local_tier', '', [
                'maxconcurrentsessions' => $maxconcurrentsessions,
                'totalconcurrentsessions' => $totalconcurrentsessions,
            ]);
        }
    }

    /**
     * Set total sessions in config
     * @return void
     */
    public static function set_total_sessions() {
        $totalconcurrentsessions = self::get_total_sessions_from_db();
        set_config('totalconcurrentsessions', $totalconcurrentsessions, 'local_tier');
    }

    /**
     * Get total sessions from database
     * @return int
     */
    public static function get_total_sessions_from_db() {
        global $DB;

        // Get total sessions from database.
        $sql = "SELECT COUNT(id) FROM {sessions} WHERE userid != 0 AND userid != 2";

        return $DB->count_records_sql($sql);
    }

    /**
     * Get total sessions from config
     * @return int
     */
    public static function get_total_sessions_from_config() {
        $totalconcurrentsessions = get_config('local_tier')->totalconcurrentsessions ?? 0;
        return $totalconcurrentsessions;
    }

    /**
     * Restrict admin pages, if set
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function restrict_admin_page() {
        global $SCRIPT;

        $config = get_config('local_tier');
        // If no restrictedadminsettingssection set, nothing to do.
        if (empty($config->restrictedadminpages)) {
            return;
        }

        $restrictedadminpages = $config->restrictedadminpages;

        if (in_array($SCRIPT, explode(",", $restrictedadminpages))) {
            throw new \core\exception\moodle_exception('restrictedadminpage', 'local_tier');
        }
    }

    /**
     * Restrict admin settings sections, if set
     * @param mixed $courseorid
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function restrict_admin_settings_section($courseorid = null) {
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
            throw new \core\exception\moodle_exception('restrictedadminsettingssection', 'local_tier');
        }
    }

    /**
     * Restrict admin settings categories, if set
     * @param mixed $courseorid
     * @throws \core\exception\moodle_exception
     * @return void
     */
    public static function restrict_admin_settings_category($courseorid = null) {
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
            throw new \core\exception\moodle_exception('restrictedadminsettingscategory', 'local_tier');
        }
    }

    /**
     * Convert bytes to gigabytes
     * @param mixed $bytes
     * @return float
     */
    public static function convert_bytes_to_gb($bytes) {
        return round($bytes / 1024 / 1024 / 1024, 1);
    }

    /**
     * Convert bytes to gibibytes
     * @param mixed $bytes
     * @return float
     */
    public static function convert_bytes_to_gib($bytes) {
        return round($bytes / 1000 / 1000 / 1000, 1);
    }
}
