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
 * Plugin event observers are registered here.
 *
 * @package     local_tier
 * @category    event
 * @copyright   2025 Krestomatio <info@krestomatio.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = [
    // Storage events.
    [
        'eventname' => '\core\event\draft_file_added',
        'callback' => '\local_tier\tier::set_total_storage',
        'priority' => 500,
        'internal' => false,
    ],
    [
        'eventname' => '\core\event\draft_file_deleted',
        'callback' => '\local_tier\tier::set_total_storage',
        'priority' => 500,
        'internal' => false,
    ],
    // Registered user events.
    [
        'eventname' => '\core\event\user_created',
        'callback' => '\local_tier\tier::set_total_registered_users',
        'priority' => 500,
        'internal' => false,
    ],
    [
        'eventname' => '\core\event\user_deleted',
        'callback' => '\local_tier\tier::set_total_registered_users',
        'priority' => 500,
        'internal' => false,
    ],
    // Sessions events.
    [
        'eventname' => 'core\event\user_loggedin',
        'callback' => '\local_tier\tier::set_total_sessions',
        'priority' => 500,
        'internal' => false,
    ],
    [
        'eventname' => 'core\event\user_loggedout',
        'callback' => '\local_tier\tier::set_total_sessions',
        'priority' => 500,
        'internal' => false,
    ],
];
