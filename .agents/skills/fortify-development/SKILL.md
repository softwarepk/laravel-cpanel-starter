---
name: fortify-development
description: "Use for Laravel authentication work: login, registration, password reset, verification, password changes, or Fortify configuration/actions."
license: MIT
metadata:
  author: laravel
---

# Laravel Fortify Development

Fortify provides this starter's authentication backend. Before changing authentication, inspect `config/fortify.php`, `app/Actions/Fortify/`, and `App\Providers\FortifyServiceProvider`.

Keep authentication server-rendered with Blade/Livewire unless a product explicitly requires a different architecture. Preserve rate limiting, validation, password confirmation, and verification semantics. Enable additional features such as 2FA or passkeys only when a project requires them and after checking the installed Fortify version/documentation.

Authentication and authorization are separate concerns: Fortify proves identity; Policies/authorization rules protect application resources and operations.
