---
paths:
  - 'app/**'
---

# App

## Use Eloquent directly without repositories
Use Eloquent directly at application call sites. Do not introduce repository or dedicated query abstractions unless intentionally changing the architecture.

## Server-side policy authorization
Use Laravel Policies for authorization of protected resources and operations. Do not rely on hiding UI elements or client-side checks as authorization. Avoid scattering role-name comparisons throughout components and views.

## Extract substantial workflows
Simple CRUD may use Eloquent directly. Substantial workflows, calculations, state transitions, or operations involving multiple models belong in focused Action or Service classes. Livewire components should primarily manage UI state, validation, authorization, and invocation of application logic.

## Atomic critical writes
Operations that make multiple related database changes to important state must use database transactions so the operation succeeds or fails atomically.

## Monetary values when applicable
For applications that handle money, never use floating-point types for persisted or calculated monetary values. Prefer integer minor units where practical or fixed-precision DECIMAL columns where required, with explicit tests for boundaries and rounding.

## MySQL is the canonical production database
Production targets MySQL/MariaDB. Local development and automated tests may use SQLite, but application behavior must not depend on SQLite-specific semantics.

## APIs only for external clients
Do not create a separate internal REST API merely to connect this application's own Livewire frontend to its backend. Add APIs when an external client or integration requires one.

## Infrastructure changes require approval
Do not introduce Redis, Horizon, persistent queue infrastructure, external authentication platforms, Supabase, Firebase, or similar infrastructure unless a concrete requirement justifies it.

## Use Laravel scheduler for recurring tasks
Prefer Laravel's scheduler so production can normally use a standard `schedule:run` cron entry rather than separate cron definitions for every task.

## Introduce abstractions only when justified
Prefer clear Laravel conventions and straightforward code over speculative abstractions. Extract abstractions when repeated behavior, complexity, testing needs, or a clear boundary justifies them.
