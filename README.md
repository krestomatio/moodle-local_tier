## Tier Instance

**Tier Instance** provides Moodle administrators with the ability to enforce limits on user registrations, total storage usage, concurrent active sessions, and administrative page access restrictions. Once configured, these limits apply system-wide, including administrative roles if enforced via `config.php`.

### Features

**1. User Registration Limit**

Administrators can set a maximum number of allowed registered users. Once the limit is reached, additional user registrations will be automatically blocked. **Note**: This functionality requires [MDL-78777](https://tracker.moodle.org/browse/MDL-78777) to be integrated into Moodle core.

**2. Site Storage Limit**

Administrators can specify a storage quota for the entire Moodle instance, covering both uploaded files and database size. When the quota is reached, uploading new files is disabled until existing files are removed to free up space. Total storage usage is recalculated every minute through a scheduled task to minimize database load. A special consideration should be made for the instance trash. Deleted files go to the trash, which is also counted towards the storage limit. Trash is emptied periodically based on the `filescleanupperiod` setting in Moodle, which defaults to 1 day.

**3. Concurrent Sessions Limit**

Set a global limit on the number of concurrent (active) user sessions. Once this threshold is reached, no new sessions will be allowed until active sessions expire, users log out, or the limit is increased. This ensures system resources remain under control.

**4. Admin Page/Section Restrictions**

Restrict access to specific administrative settings sections, categories, or pages. This helps prevent accidental misconfiguration of sensitive settings related to performance and optimization.

### Configuration Example

Below is an example showing how to set the maximum registered users to 500, storage limit to 5 GB, concurrent sessions limit to 50, and restrict specific admin sections and pages through `config.php`:

```php
$CFG->forced_plugin_settings = [
    'local_tier' => [
        'maxstoragebytes' => '5000000000',
        'maxregisteredusers' => '500',
        'maxconcurrentsessions' => '50',
        'restrictedadminsettingscategories' => 'cachestores',
        'restrictedadminsettingssections' => 'debugging',
        'restrictedadminpages' => '/cache/testperformance.php,/cache/admin.php',
    ],
];
```

To prevent modifications to scheduled tasks, use either:

```php
$CFG->preventscheduledtaskchanges = true;
```

or configure explicitly:

```php
$CFG->scheduled_tasks = [
    'local_tier\*' => [
        'schedule' => '* * * * *',
        'disabled' => 0,
    ],
];
```

### Scheduled Tasks & Caching

Scheduled tasks periodically update usage metrics and store data leveraging Moodle’s built-in caching system. Additionally, event observers promptly update these metrics in response to relevant actions.

### Installation

**Install via ZIP upload**

1. Log in as an admin and navigate to: *Site administration > Plugins > Install plugins*.
2. Upload the ZIP file containing the plugin.
3. Follow the on-screen instructions to validate and finalize the installation.

**Manual installation**

Copy the plugin files to:

```
{your/moodle/dirroot}/local/tier
```

Then, log in as admin and navigate to *Site administration > Notifications* to complete the installation.

Alternatively, use CLI:

```
php admin/cli/upgrade.php
```

### License

© 2025 [Krestomatio](https://krestomatio.com) [info@krestomatio.com](mailto:info@krestomatio.com)

This program is free software distributed under the GNU General Public License version 3 or later. It comes without warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the full license at [GNU GPL v3](https://www.gnu.org/licenses/).
