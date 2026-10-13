# Repository guidance

## Repository scope

- This Moodle local plugin enforces managed-plan limits for registered users,
  combined file/database storage, concurrent sessions, and selected admin access.
- Settings, observers/hooks, cache behavior, scheduled tasks, privacy metadata,
  language strings, and tests form the plugin contract. Forced settings are
  supplied through infrastructure-generated Moodle configuration.
- User-limit enforcement depends on the Krestomatio Moodle fork's
  `core_user\hook\before_user_created`; preserve rejection before database insert.

## Validation and delivery

- Mirror `.github/workflows/moodle-ci.yml`: Moodle Plugin CI lint/validation plus
  PHPUnit and Behat across the supported Moodle, PHP, PostgreSQL, and MariaDB
  matrix. Run the narrowest relevant matrix locally when a full matrix is costly.
- Update `version.php`, upgrade steps, strings, and privacy declarations when their
  contracts change. A repository tag is not deployed until the plugin is published,
  the KIO Moodle image is rebuilt, and its deployment digest is updated.
