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
 * Plugin hook listener callbacks are registered here.
 *
 * @package     local_tier
 * @category    hook
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$callbacks = [
  [
    'hook' => \core_files\hook\before_file_created::class,
    'callback' => '\local_tier\hook_callbacks::before_file_created',
    'priority' => 500,
  ],
  [
    'hook' => \core_user\hook\before_user_created::class,
    'callback' => '\local_tier\hook_callbacks::before_user_created',
    'priority' => 500,
  ],
  [
    'hook' => \core_user\hook\after_login_completed::class,
    'callback' => '\local_tier\hook_callbacks::after_login_completed',
    'priority' => 500,
  ],
];
