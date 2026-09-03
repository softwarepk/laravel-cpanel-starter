---
paths:
  - '**'
  - composer.json
  - package.json
  - 'vite.config.*'
---

# General

## Implementation quality gate
Before considering implementation complete, run focused tests and then `composer ci:check`. Fix failures rather than bypassing Pint, Pest, Larastan, or configured checks. Review the final diff for unintended changes.

## Server-side security and secret hygiene
Never commit secrets, credentials, API keys, database passwords, or environment-specific `.env` contents. Validate user-controlled input server-side. Treat authorization and validation as server-side responsibilities regardless of UI restrictions.

## Dependency discipline
Prefer Laravel-native, Livewire-native, Flux, and existing project capabilities before adding dependencies. Add Composer or npm packages only when they provide clear value that cannot reasonably be achieved with the existing stack.

## Conventional cPanel production runtime
Production targets conventional cPanel hosting with Apache/PHP and MySQL/MariaDB. Node is a build-time dependency for frontend assets and must not be required as a persistent production application process.

## Keep changes narrowly scoped
Keep changes scoped to the requested feature or fix. Do not perform unrelated refactoring, package upgrades, architecture changes, or cleanup unless required or explicitly approved.
