# cPanel Deployment

The preferred deployment model is intentionally conventional: Git source on the server, dependencies/build performed on the server when the hosting account supports them, and the domain or subdomain document root pointed at Laravel's `public/` directory.

## Recommended layout

Example:

```text
/home/account/apps/example-app/          Laravel project
/home/account/apps/example-app/public/   web document root
```

In cPanel, point the application's domain/subdomain document root to the project's `public` directory when possible. This is safer and simpler than moving Laravel files into `public_html`.

## First deployment

1. Clone the repository into the application directory.
2. Copy `.env.example` to `.env` and set production values.
3. Create the MySQL/MariaDB database and user in cPanel.
4. Run `composer install --no-dev --prefer-dist --optimize-autoloader`.
5. Run `php artisan key:generate` if this is a new environment.
6. Run `npm install` and `npm run build` where Node is available.
7. Run `php artisan migrate --force`.
8. Run `php artisan storage:link` if public file storage is used.
9. Run `php artisan optimize`.
10. Confirm that `storage/` and `bootstrap/cache/` are writable by the PHP process.

Once a new product has generated dependency lockfiles, commit them and use `composer install` / `npm ci` for repeatable deployments.

## Routine deployment

Use the example script in `deployment/deploy.sh.example` as a starting point. Keep production `.env` outside Git and take a database backup before migrations with meaningful risk.

The example script expects Node to be available for the frontend build. If the hosting account does not provide Node, build the assets in a trusted build environment and include a deliberate artifact-deployment step instead of silently skipping the build.

## Cron and queues

The starter does not require a permanent queue worker. `QUEUE_CONNECTION=sync` is the safe default for ordinary cPanel hosting.

If the application uses Laravel's scheduler, add one cPanel cron entry that runs `php artisan schedule:run` every minute if the hosting plan allows it. If a project later adopts database queues, document and configure the worker strategy for that hosting account explicitly.

## Production checks

After deployment, confirm login, a representative authenticated screen, file permissions, outgoing mail if used, scheduled tasks if used, and the Laravel log for unexpected errors.
