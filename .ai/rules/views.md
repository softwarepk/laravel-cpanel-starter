---
paths:
  - 'resources/views/**'
---

# Views

## Blade and Livewire frontend
Build pages with server-rendered Blade and Livewire; do not introduce an Inertia or JavaScript SPA layer without an architecture decision.

## Reusable components
Build parameterized reusable UI as anonymous Blade components. Reserve `@include` partials for repeated static fragments.

## Flux UI primitives
Use Flux components for controls and UI primitives, composing application-specific presentation with thin anonymous Blade components.

## Existing design language
Read `docs/UI-DESIGN-SYSTEM.md`. Reuse `x-ui.*` primitives and established table, form, status, navigation, empty-state, and settings patterns before inventing new ones.

## Icons
Flux includes Heroicons. Use exact Heroicon names; do not guess. For Lucide icons, run `php artisan flux:icon <name>` and commit the generated `resources/views/flux/icon/*.blade.php` component. Reuse already committed custom icons where possible.

## Literal translation keys
Wrap user-facing Blade text in `__()` using the English source text as the key rather than dotted catalog keys.
