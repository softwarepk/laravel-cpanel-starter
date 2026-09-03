---
paths:
  - 'resources/**'
---

# Resources

## Existing stack first
Prefer Flux, Livewire, Tailwind, Laravel Blade components, and existing project primitives before adding frontend dependencies.

## Conventional cPanel runtime
Node is a build-time dependency for Vite assets and must not be required as a persistent production application process.

## Design system
Follow `docs/UI-DESIGN-SYSTEM.md` and reuse `x-ui.*` components before introducing new presentation patterns.
