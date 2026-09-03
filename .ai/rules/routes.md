---
paths:
  - 'routes/**'
  - routes/console.php
---

# Routes

## Group shared middleware
Assign shared web middleware to route groups and keep related routes together.

## Blade, Livewire, and Flux frontend
The frontend is Laravel Blade + class-based Livewire + Flux. Do not add a separate SPA without an explicit architecture decision.

## APIs only for external clients
Do not add an internal REST API merely to connect the application's own Livewire frontend to its backend.

## Scheduler for recurring tasks
Prefer Laravel's scheduler so cPanel production can use a standard `schedule:run` cron entry.
