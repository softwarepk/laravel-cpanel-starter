---
name: tailwindcss-development
description: "Use for Tailwind CSS styling, responsive layouts, dark mode, tables, forms, navigation, spacing, and typography."
license: MIT
metadata:
  author: laravel
---

# Tailwind CSS Development

This project uses Tailwind CSS 4 with CSS-first configuration in `resources/css/app.css`.

- Follow existing utilities and `ui-*` component classes before creating another pattern.
- Prefer `gap` for sibling spacing.
- Support dark mode wherever the surrounding UI does.
- Use Tailwind v4 utilities and `@theme`; do not add a v3-style `tailwind.config.js` without a concrete need.
- Extract repeated presentation into thin Blade components that match `x-ui.*` conventions.
- Follow `docs/UI-DESIGN-SYSTEM.md` for density, colors, action hierarchy, tables, forms, and settings workspaces.
