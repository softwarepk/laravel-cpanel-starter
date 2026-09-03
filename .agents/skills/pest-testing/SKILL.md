---
name: pest-testing
description: "Use whenever writing, editing, fixing, or reviewing Pest tests in this Laravel project."
license: MIT
metadata:
  author: laravel
---

# Pest Testing

This project uses Pest 5. Match the repository convention:

- use `test()` closure-style definitions;
- `RefreshDatabase` is applied globally to the Feature suite in `tests/Pest.php`;
- create Eloquent records with factories and factory states;
- prefer specific response assertions such as `assertOk()`, `assertForbidden()`, and `assertNotFound()`;
- test behavior, authorization, state changes, regression cases, and important boundaries rather than implementation details;
- do not delete tests to make a change pass.

Run focused tests first, then `composer ci:check` before completion.
