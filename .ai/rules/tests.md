---
paths:
  - 'tests/**'
---

# Tests

## Pest closure syntax
Write tests with Pest `test()` closure-style definitions. Do not introduce PHPUnit test classes or a second test syntax without a reason.

## Feature database reset
Apply `RefreshDatabase` globally to the Feature suite in `tests/Pest.php`, not in individual test files.

## Factory-built records
Create test-owned Eloquent records with model factories and factory states rather than direct inserts or manual model construction.

## Test behavior
Meaningful business rules, authorization rules, calculations, state transitions, and regressions require automated Pest coverage. Tests should verify behavior rather than implementation details.
