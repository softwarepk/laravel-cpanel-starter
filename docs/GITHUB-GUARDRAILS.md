# GitHub Delivery Guardrails

## Main branch

`main` is the releasable integration branch. Implementation work should normally enter `main` through a pull request rather than direct feature development.

## Quality gate

Before merge:

- relevant focused tests pass;
- `composer ci:check` passes locally (and in CI when CI capacity is available);
- no blocking review findings remain unresolved;
- acceptance criteria are satisfied;
- the branch is mergeable with current `main`;
- migration/deployment implications are identified where applicable.

GitHub Actions is helpful automation, not the source of truth. If Actions minutes/capacity are unavailable, run the same quality gate locally rather than weakening it.

## Review

Implementation work should receive independent review before merge. Review requirements, authorization, security, data integrity, migration safety, regression risk, tests, maintainability, and consistency with repository rules.

## Merge strategy

Use **squash merge** by default so each completed work item produces one coherent commit on `main`.

## Branch naming

Preferred naming:

- `feature/<issue>-<short-description>`
- `fix/<issue>-<short-description>`
- `chore/<short-description>`

## Recommended main-branch protection

When repository settings and plan support it:

- require a pull request before merging;
- require configured status checks when CI is active;
- require conversation resolution;
- block force pushes;
- block branch deletion;
- avoid routine bypass of the ruleset.

## Production

Merging to `main` does not itself grant unrestricted production access. Production deployment is a separate operational step with environment configuration, backup/rollback awareness, migrations, asset build, and post-deploy verification.
