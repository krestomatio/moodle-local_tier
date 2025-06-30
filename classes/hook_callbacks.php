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

use core_files\hook\before_file_created;
use core_user\hook\before_user_created;
use core_user\hook\after_login_completed;

/**
 * Plugin hook listener callbacks.
 *
 * @package     local_tier
 * @category    hook
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {
    /**
     * Execute the before_file_created hook.
     *
     * @param before_file_created $hook
     */
    public static function before_file_created(before_file_created $hook): void {
        $filerecord = $hook->get_filerecord();
        $filepath = $hook->get_filepath();
        \local_tier\tier::check_max_storage($filerecord, $filepath);
    }

    /**
     * Execute the before_user_created hook.
     *
     * @param before_user_created $hook
     */
    public static function before_user_created(before_user_created $hook): void {
        $user = $hook->user;
        \local_tier\tier::check_max_registered_users($user);
    }

    /**
     * Execute the after_login_completed hook.
     *
     * @param after_login_completed $hook
     */
    public static function after_login_completed(
        after_login_completed $hook,
    ): void {
        \local_tier\tier::check_max_sessions();
    }
}
