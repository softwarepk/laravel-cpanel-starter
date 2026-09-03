---
paths:
  - 'app/Livewire/**'
---

# Livewire

## Validate Livewire state in component actions
Validate Livewire state in action methods with `$this->validate(...)`. Reuse shared rule arrays from concerns where available.

## Prefer class-based Livewire components
Application screens use class-based Livewire components with matching Blade views by default. Use `Route::livewire(...)` for full-page Livewire screens where appropriate. Do not introduce a second component format without an explicit reason.

## Frontend architecture
The application frontend is Laravel Blade + class-based Livewire + Flux. Do not introduce React, Vue, Svelte, Inertia, a separate SPA, or a separate frontend application without an explicit architecture decision.
