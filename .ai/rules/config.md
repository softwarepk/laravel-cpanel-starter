---
paths:
  - 'config/**'
---

# Config

## Production database
Production targets MySQL/MariaDB. Local development may use SQLite for zero-setup testing, but production configuration must remain MySQL-compatible.

## Conventional cPanel runtime
Production targets conventional cPanel hosting with Apache/PHP. Node is build-time only; do not require a persistent Node process.

## Infrastructure changes require approval
Do not introduce Redis, Horizon, persistent queue infrastructure, external authentication platforms, Supabase, Firebase, or similar infrastructure without a concrete requirement.
