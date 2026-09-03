---
name: livewire-development
description: "Use for Livewire components, wire directives, reactivity, forms, loading states, navigation, and Livewire testing."
license: MIT
metadata:
  author: laravel
---

# Livewire Development

This starter intentionally uses **class-based Livewire components** with matching Blade views. Follow that established convention even though Livewire 4 supports additional component formats.

- Keep state server-side.
- Validate state in component actions.
- Authorize protected reads/writes server-side.
- Use `wire:key` in loops.
- Use `wire:loading` / disabled states for long-running actions.
- Use `wire:model.live` only when live updates are actually required; ordinary `wire:model` is deferred.
- Use `Route::livewire()` for full-page Livewire screens when appropriate.
- Do not add a separate SPA frontend for ordinary application screens.

Check installed Livewire configuration/version before relying on version-sensitive behavior and use framework documentation search when needed.
