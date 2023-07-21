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

/**
 * Adhoc task that keep track of total storage used.
 *
 * @package    local_tier
 * @copyright  2023 Krestomatio <https://krestomatio.com/>
 * @author     Job Céspedes Ortiz <jobcespedes@krestomatio.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_tier\task;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/../../locallib.php');

/**
 * Adhoc task that keep track of total storage used.
 *
 * @package    local_tier
 * @copyright  2023 Krestomatio <https://krestomatio.com/>
 * @author     Job Céspedes Ortiz <jobcespedes@krestomatio.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class total_storage_task extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('total_storage_task_name', 'local_tier');
    }

    /**
     * Run the scheduled task and store the totals.
     */
    public function execute() {
        set_total_storage();
    }
}
