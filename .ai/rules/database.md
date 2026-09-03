---
paths:
  - 'database/**'
---

# Database

## Migration-only schema changes
All schema changes must be made through Laravel migrations. Once a migration has been deployed to a shared or production environment, do not rewrite it; create a new migration for subsequent changes.

## MySQL compatibility
MySQL/MariaDB is the canonical production database. SQLite is acceptable for local development and fast tests, but migrations and queries must remain cleanly portable to MySQL.
