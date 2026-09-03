# Laravel cPanel Starter

A reusable starting point for rapidly building and deploying conventional Laravel web applications on existing cPanel hosting.

The starter is intentionally focused: small-to-medium database-backed applications that benefit from a modern Laravel/Livewire product UI while remaining simple to host, operate, and iterate on in a conventional cPanel/Linux environment.

## Foundation

- Laravel 13 + PHP 8.3+
- Blade + class-based Livewire 4
- Flux UI 2 + Livewire Blaze
- Tailwind CSS 4 + Vite 8
- Fortify authentication and account settings
- Reusable `x-ui.*` presentation primitives and interaction grammar
- GitHub Primer + Atlassian + Linear UI influences
- Heroicons plus committed Lucide Flux icons where needed
- Pest, Pint, Larastan, Laravel Boost, and agent/Cursor guidance
- SQLite zero-setup local development; MySQL/MariaDB cPanel production
- file cache/session and synchronous jobs by default; persistent infrastructure is opt-in
- Git/PR/review/deployment guardrails

The starter deliberately contains no product-specific workflows, role model, approval process, entitlement logic, or reporting domain.

## Quick start

```bash
cp .env.example .env
composer setup
php artisan serve
```

`composer setup` creates the local SQLite database automatically, generates the application key, runs migrations/seeders, installs frontend dependencies, and builds production assets. No local MySQL database/user/password setup is required.

The local seeder creates:

```text
starter@example.com
password
```

For active frontend development, use:

```bash
composer dev
```

Before considering a change complete:

```bash
composer ci:check
```

## Read next

- `docs/UI-DESIGN-SYSTEM.md` — product UI principles and patterns
- `.ai/rules/index.md` — path-specific engineering rules
- `AGENTS.md` — coding-agent operating guidance
- `docs/GITHUB-GUARDRAILS.md` — branch/PR/review conventions
- `DEPLOYMENT.md` — cPanel deployment model
- `/patterns` — living rendered UI reference after login

## Reproducible dependencies

`composer.lock` and `package-lock.json` are committed as part of the validated starter baseline. Use `composer install` and `npm ci` for normal installs and deployments so projects use the known dependency versions rather than silently drifting to newer transitive packages.
