# AI Development Guide

This repository is a starter for rapidly built Laravel applications deployed on conventional cPanel hosting.

When working in a project based on this starter:

- Inspect the existing project before proposing structural changes.
- Reuse the established UI patterns before inventing new ones.
- Prefer Laravel, Livewire, Flux, and existing project facilities before adding packages.
- Keep the deployed application compatible with its documented cPanel environment.
- Do not introduce Redis, permanent queue workers, websockets, SPA frameworks, containers, or external infrastructure without a product-driven reason.
- Make small coherent changes rather than unrelated rewrites.
- Preserve working behavior outside the requested change.
- Add or update tests when behavior changes or a bug is fixed.
- Run formatting, static analysis, and relevant tests before considering a change complete.
- Review the actual browser experience; passing tests do not prove that a UI change is usable.
- Prefer a working vertical slice and iteration over speculative flexibility.

Project-specific requirements override this guide. When a project deliberately departs from the starter, follow the project decision rather than fighting it.
