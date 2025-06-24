<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace local_tier\task;

/**
 * Adhoc task that keep track of total sessions used.
 *
 * @package     local_tier
 * @category    task
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @author     Job Céspedes Ortiz <jobcespedes@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Adhoc task that keep track of total sessions used.
 *
 * @package    local_tier
 * @copyright  2025 Krestomatio <https://krestomatio.com/>
 * @author     Job Céspedes Ortiz <jobcespedes@krestomatio.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class total_sessions_task extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return new \core\lang_string('totalsessionstaskname', 'local_tier');
    }

    /**
     * Run the scheduled task and store the totals.
     */
    public function execute() {
        \local_tier\tier::set_total_sessions();
    }
}
