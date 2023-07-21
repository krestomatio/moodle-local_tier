# Tier plugin #

Tier plugin provides a solution to control user registrations, storage quotas, and administrative access restrictions system-wide in Moodle. By implementing this plugin, site administrators gain the ability to set maximum limits on registered users, file creations, and access to administrative pages and sections based on custom-defined values defined in `config.php`. Once these values are set, the intention is for them to be enforced for all users, even those with administrative roles.

1. User Registration Limitations: Administrators can set a maximum number of registered users. Once the user limit is reached, new users attempting to register will be automatically restricted. __FUNCTION NOT AVAILABLE__ until [MDL-78777](https://tracker.moodle.org/browse/MDL-78777) is integrated in moodle core.

2. Site Storage Cap: Tier plugin enables administrators to assign a system wide storage quota based on total files and database size. When the storage quota is reached, users will not be able to add new files, unless storage is reduced by removing files. Total storage in used is calculated every minute in a cron schedule task, avoiding hitting the database to often.

3. Admin Page/Section Restriction: The plugin allows restricting admin settings sections and/or pages access. This helps prevent misconfiguring performance and optimization-related admin settings.

The following example shows how to set max registered users to 100, max site storage to 5 GB (in bytes) and restrict access to debugging admin section and cache configuration and test pages. Values are set `config.php`

```php
$CFG->forced_plugin_settings = [
    "local_tier" => [
        "max_storage_bytes" => "5000000000",
        "max_registered_users" => "100",
        "restrictedadminsettingssections" => "debugging",
        "restrictedadminpages" => "/cache/testperformance.php,/cache/admin.php",
    ],
];
```
You also want to prevent this plugin scheduled task modifications by setting  `$CFG->preventscheduledtaskchanges = true;` in `config.php` or by setting, also in `config.php`:
```php
$CFG->scheduled_tasks = [
    'local_tier\*' => [
        'schedule' => '* * * * *',
        'disabled' => 0,
    ],
];
```

## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/local/tier

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## License ##

2022 [Krestomatio](https://krestomatio.com) <info@krestomatio.com>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
