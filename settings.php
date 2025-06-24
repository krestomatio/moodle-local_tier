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

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $category = new admin_category('local_tier', new \core\lang_string('pluginname', 'local_tier'));
    $ADMIN->add('localplugins', $category);
    $statuspage = new admin_settingpage('local_tier_status', new \core\lang_string('statuspage', 'local_tier'));
    $ADMIN->add('local_tier', $statuspage);
    $settingspage = new admin_settingpage('local_tier_settings', new \core\lang_string('settingspage', 'local_tier'));
    $ADMIN->add('local_tier', $settingspage);

    // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
    if ($ADMIN->fulltree) {
        // TO-DO: Define actual plugin settings page and add it to the tree - {@link https://docs.moodle.org/dev/Admin_settings}.

        // Introductory explanation that all the settings are defaults for the add lesson form.
        $statuspage->add(new admin_setting_heading('local_tier/statusheading', new \core\lang_string('statusheading', 'local_tier'), new \core\lang_string('statusheadinginfo', 'local_tier', [
            'totalconcurrentsessions' => \local_tier\tier::get_total_sessions_from_config(),
            'totalstoragebytes' => \local_tier\tier::get_total_storage_from_config(),
            'totalregisteredusers' => \local_tier\tier::get_total_registered_users_from_config(),
        ])));

        // Introductory explanation that all the settings are defaults for the add lesson form.
        $settingspage->add(new admin_setting_heading('local_tier/settingsheading', new \core\lang_string('settingsheading', 'local_tier'), new \core\lang_string('settingsheadinginfo', 'local_tier')));

        // Add settings for max concurrent sessions.
        $settingspage->add(new admin_setting_configtext('local_tier/maxconcurrentsessions', new \core\lang_string('maxconcurrentsessions', 'local_tier'), new \core\lang_string('maxconcurrentsessionsdesc', 'local_tier'), 0, PARAM_INT));

        // Add settings for maximum registered users.
        $settingspage->add(new admin_setting_configtext(
            'local_tier/maxregisteredusers',
            new \core\lang_string('maxregisteredusers', 'local_tier'),
            new \core\lang_string('maxregisteredusersdesc', 'local_tier'),
            0,
            PARAM_INT
        ));

        // Add settings for maximum storage.
        $settingspage->add(new admin_setting_configtext(
            'local_tier/maxstoragebytes',
            new \core\lang_string('maxstoragebytes', 'local_tier'),
            new \core\lang_string('maxstoragebytesdesc', 'local_tier'),
            0,
            PARAM_INT
        ));

        // Add settings for restricted admin settings categories.
        $settingspage->add(new admin_setting_configtext(
            'local_tier/restrictedadminsettingscategories',
            new \core\lang_string('restrictedadminsettingscategories', 'local_tier'),
            new \core\lang_string('restrictedadminsettingscategoriesdesc', 'local_tier'),
            '',
            PARAM_RAW,
            100
        ));

        // Add settings for restricted admin settings sections.
        $settingspage->add(new admin_setting_configtext(
            'local_tier/restrictedadminsettingssections',
            new \core\lang_string('restrictedadminsettingssections', 'local_tier'),
            new \core\lang_string('restrictedadminsettingssectionsdesc', 'local_tier'),
            '',
            PARAM_RAW,
            100
        ));

        // Add settings for restricted admin pages.
        $settingspage->add(new admin_setting_configtext(
            'local_tier/restrictedadminpages',
            new \core\lang_string('restrictedadminpages', 'local_tier'),
            new \core\lang_string('restrictedadminpagesdesc', 'local_tier'),
            '',
            PARAM_RAW,
            100
        ));
    }

    // $ADMIN->add('local_tier', $settingspage);
    // $ADMIN->add('local_tier', $statuspage);
    // $ADMIN->add('localplugins', $category);
}
