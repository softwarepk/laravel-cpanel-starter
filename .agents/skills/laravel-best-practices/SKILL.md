---
name: laravel-best-practices
description: "Use whenever writing, reviewing, or refactoring Laravel backend code, including models, controllers, actions, migrations, policies, queries, jobs, validation, and architecture decisions."
license: MIT
metadata:
  author: laravel
---

# Laravel Best Practices

Consistency comes first. Read `.ai/rules/index.md`, inspect sibling files, and follow established repository patterns before introducing another approach.

Core defaults for this starter:

- Eloquent directly; no repository layer by default.
- Policies for protected resources/operations.
- Focused Action/Service classes for substantial workflows and state transitions.
- Migrations for schema changes; transactions for multi-record critical writes.
- MySQL/MariaDB production compatibility, SQLite for zero-setup local development.
- Named routes and Laravel-native features.
- No internal REST API solely for the application's own Livewire frontend.
- No Redis/Horizon/external auth infrastructure without a concrete requirement.
- Factories and Pest tests for behavior.
- Pint + Larastan + Pest via `composer ci:check` before completion.

Verify version-sensitive APIs against installed package versions and Laravel documentation rather than assumptions.
