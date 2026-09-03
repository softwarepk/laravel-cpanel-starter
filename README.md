# Laravel cPanel Starter

A reusable starting point for rapidly building and deploying conventional Laravel web applications on existing cPanel hosting.

This starter is intentionally narrow: it is for small-to-medium database-backed applications that benefit from a modern Laravel/Livewire UI while remaining simple to host, operate, and iterate on in a conventional cPanel/Linux environment.

## What this starter provides

- Laravel + Livewire + Flux + Tailwind + Vite baseline
- Authentication and account settings foundation
- Neutral responsive application shell
- Reusable UI patterns extracted from a production application
- Pattern gallery for common business-application screens
- cPanel-friendly defaults with no Redis or permanent worker requirement
- Pest, Pint, Larastan, and Laravel Boost development tooling
- Concise guidance for UI, AI-assisted development, and deployment

## What it deliberately does not provide

- Product-specific workflows or data models
- Domain-specific roles, approval flows, policy concepts, or reporting
- Infrastructure that ordinary cPanel hosting does not need
- A universal engineering standard for every kind of application

## Quick start

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

The local seeder creates `starter@example.com` with password `password` so the shell can be reviewed immediately. Registration is also enabled by default and can be disabled with `FORTIFY_REGISTRATION=false`.

For local development, `composer dev` runs the application and Vite together.

A new product repository should normally commit the `composer.lock` and `package-lock.json` generated during its first setup so subsequent deployments are repeatable.

See `FOUNDATION.md`, `UI-GUIDE.md`, `AGENTS.md`, and `DEPLOYMENT.md` for the small amount of guidance that travels with the starter.
