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
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// TODO: Move to new hook system when available.
/**
 * After login required, restrict admin sections
 * @param mixed $courseorid
 * @return void
 */
function local_tier_after_require_login($courseorid) {
    \local_tier\tier::restrict_admin_settings_section($courseorid);
    \local_tier\tier::restrict_admin_settings_category($courseorid);
    \local_tier\tier::restrict_admin_page();
}
