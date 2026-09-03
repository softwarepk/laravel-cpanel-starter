# Laravel cPanel Starter — Agent Guide

This repository is a reusable foundation for conventional Laravel applications deployed to existing cPanel hosting. Preserve its established stack and patterns unless a project requirement clearly justifies changing them.

## Before editing

1. Read `.ai/rules/index.md` and every matching rule file for the paths you will touch.
2. Inspect sibling files and existing components before creating a new pattern.
3. Confirm installed package versions before relying on version-specific APIs (`composer show --direct`, `composer show vendor/package`, and `package.json`).
4. Use Laravel/Boost documentation search when behavior or syntax is version-sensitive.

## Foundation stack

- Laravel 13 / PHP 8.3+
- Blade + class-based Livewire 4
- Flux UI 2 + Livewire Blaze
- Tailwind CSS 4 + Vite 8
- Laravel Fortify authentication
- Pest 5, Pint, Larastan, Laravel Boost
- SQLite for zero-setup local development; MySQL/MariaDB for cPanel production
- File cache/session and synchronous queues by default; persistent infrastructure is opt-in

## UI

Read `docs/UI-DESIGN-SYSTEM.md` before building screens. The visual/interaction direction combines GitHub Primer, Atlassian, and Linear influences while using Flux + Livewire + Tailwind as the implementation stack.

Prefer `x-ui.*` components and existing CSS primitives. Keep application pages restrained, information-dense, accessible, responsive, and consistent.

Flux uses Heroicons by default. Use exact icon names—never invent them. For Lucide icons, use `php artisan flux:icon <name>` and commit the generated component under `resources/views/flux/icon/`. Several reusable Lucide icons are already committed.

## Laravel conventions

- Use Eloquent directly by default; do not add repository layers speculatively.
- Use Policies for protected resources and operations.
- Keep substantial workflows/calculations/state transitions in focused Action or Service classes rather than Livewire components.
- Use migrations for all schema changes and transactions for multi-record critical writes.
- Prefer named routes and Laravel-native features.
- Do not create an internal API solely for this application's own Livewire frontend.
- Do not add Redis, Horizon, external auth platforms, or other infrastructure without a concrete requirement.

## Verification

Every meaningful change must be programmatically verified. Run focused tests first, then `composer ci:check` before considering work complete. Fix Pint, Larastan, Pest, build, or test failures rather than bypassing them.

For frontend changes, also review the rendered screen. Passing tests are necessary but do not substitute for visual acceptance.

## Delivery

Read `docs/GITHUB-GUARDRAILS.md`. Implementation work should normally enter `main` through a pull request, use a focused branch, receive independent review, and be squash-merged after quality gates pass. Do not rely on GitHub Actions when Actions capacity is unavailable; the same `composer ci:check` gate must be run locally.
