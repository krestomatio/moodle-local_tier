# Repository guidance

Before working, read these optional instruction files in order,
resolving these paths from this repository's root:

1. `.agents/organization/AGENTS.md`
2. `.agents/workspace/AGENTS.md`

Read each file if it resolves to a readable regular file.
Skip absent files; report broken or unreadable links.
Read each resolved file only once to avoid duplicate loading and cycles.

Resolve references inside imported files relative to their real target
directory after following symlinks.

Apply organization guidance, then workspace guidance, then the repository
instructions below. More specific applicable instructions take precedence.

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
