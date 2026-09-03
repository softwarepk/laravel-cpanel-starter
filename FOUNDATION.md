# Foundation

## Purpose

This repository is a practical starting point for conventional database-backed web applications that need to be built quickly and deployed on existing cPanel/Linux hosting.

It is not intended to define how every application should be engineered. The hosting model is part of the design constraint.

## Default stack

- Laravel
- Livewire for server-driven interactivity
- Flux UI components
- Tailwind CSS
- Vite for frontend builds
- MySQL/MariaDB in production
- SQLite in automated tests
- Git/GitHub for source control
- Pest, Pint, and Larastan for routine quality checks
- Laravel Boost as optional development/AI context tooling

The default is deliberately conventional. A new project should depart from it only when the product has a concrete need that the default stack does not serve well.

## Tooling approach

Use ordinary local development tools, Git, browser developer tools, automated tests, and an AI coding agent where useful. The tools are accelerators; they are not a reason to complicate the deployed application.

## Guiding principles

- **Fit the hosting environment.** The application should remain comfortable on ordinary cPanel hosting unless the project explicitly chooses another target.
- **Simple before sophisticated.** Do not add infrastructure because it is fashionable or theoretically cleaner.
- **Visible software early.** Build the first useful vertical slice and review it in the browser early.
- **Iterate from use.** Improve what users actually encounter rather than attempting to predict every requirement in advance.
- **Convention before customization.** Reuse established framework and UI patterns unless there is a clear reason not to.
- **Native before additional dependencies.** Prefer Laravel, Livewire, Flux, browser, and database capabilities already in the stack.
- **Consistency matters.** New screens should normally feel like the rest of the application.
- **Complexity must earn its place.** Redis, background workers, SPAs, websockets, external services, and similar additions are choices, not defaults.

## cPanel-safe defaults

The starter uses file sessions, file caching, and synchronous jobs by default. These work without Redis or a permanently running worker. Projects can switch to database or Redis-backed facilities when their actual workload justifies it.

## When not to use this starter

Choose a different foundation when the application fundamentally depends on high-volume realtime processing, dedicated worker fleets, GPU/AI compute, complex streaming, a mobile-native client, or an architecture that cannot reasonably live on conventional cPanel hosting.
