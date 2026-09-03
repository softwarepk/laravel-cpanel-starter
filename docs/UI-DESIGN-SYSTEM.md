# UI Design System

## Direction

The starter's product UI combines:

- **GitHub Primer** for action hierarchy, navigation, tables, and enterprise affordance;
- **Atlassian** for administrative information architecture and predictable task actions;
- **Linear** for density, polish, rhythm, and restrained interaction feedback;
- **Flux + Livewire + Tailwind** as the implementation stack.

The result should be restrained but clearly interactive, information-dense without feeling cramped, and visually consistent.

## Interaction grammar

### Primary actions
Use one dominant primary action per logical area. Primary actions receive the solid accent treatment.

### Secondary actions
Normal operational actions should look actionable: a visible button surface or border. Do not make important standalone actions look like plain text.

### Destructive actions
Use danger treatment and explicit confirmation when consequences are material.

### Ghost/subtle actions
Reserve ghost styling for controls whose context already communicates interactivity, such as compact toolbar utilities, dropdown triggers, pagination controls, or tightly grouped tertiary actions.

### Navigation
Page-to-page movement is navigation, not pseudo-tabs. Use breadcrumbs for nested records. Use persistent local navigation for related administration/settings pages. Reserve tabs for alternate panels within the same route/context.

### Row actions
One high-frequency row action may be visible. When a row has multiple object-level actions, use an action menu and keep destructive actions visually secondary to the main task.

## Visual language

- quiet zinc/slate-neutral application surfaces;
- cobalt/blue interaction accent;
- green for success/current/finalized;
- amber for attention/warning;
- red for destructive/error;
- neutral for inactive/read-only/draft;
- color reinforces meaning but never carries meaning alone.

Typography uses Instrument Sans where available, sentence case, compact enterprise sizing, and tabular numerals for financial/numeric data. Surfaces use restrained borders, 8–12px radii, and subtle functional shadows. Avoid gradients, glassmorphism, decorative animation, and oversized marketing headings inside the application.

## Density and layout

- controls roughly 36–40px high;
- compact table actions roughly 32px;
- table rows roughly 44–48px;
- desktop page padding roughly 24–32px;
- use `x-ui.page` width variants instead of page-specific arbitrary max widths;
- avoid page-wide horizontal overflow; tables may scroll within `x-ui.table-shell` when necessary.

## Shared presentation primitives

Use these before creating new patterns:

- `x-ui.page`
- `x-ui.page-header`
- `x-ui.breadcrumbs`
- `x-ui.section`
- `x-ui.metric`
- `x-ui.status-badge`
- `x-ui.empty-state`
- `x-ui.table-shell`
- `x-ui.page-size-controls`
- `x-ui.form-actions`
- `x-ui.record-header`

Components remain thin and presentation-focused. Flux remains the underlying control system.

## Page archetypes

### Queue / data list
Page header, operational filters/toolbars, structured table, obvious row task, status, empty state, and pagination. Default filters should favor useful/active records rather than blindly showing everything.

### Record detail
Breadcrumb orientation, strong record identity, compact metadata/status, structured sections, and predictable actions.

### Form / edit workflow
Group related fields, keep labels visible, integrate file uploads with save state, and use a consistent action footer. Save/submit actions must operate on the current form state rather than behaving as disconnected workflows.

### Settings workspace
Persistent local navigation identifies related routed settings pages, with the selected page rendered in a dedicated work surface.

### Decision workspace
Make current state, relevant context, and the required decision immediately obvious. Sticky desktop action panels are acceptable when useful.

### Report workspace
Use compact selectors/exports and true tabs only for alternate panels within the same context.

## Tables and paging

Use readable column priorities, avoid unnecessary horizontal width, align numeric values with tabular numerals, and use page sizes 20/50/100 with 20 as the normal default. Show clear result ranges such as “Showing X to Y of Z results.”

## Icons

Flux includes Heroicons. Search/confirm the exact Heroicon name rather than guessing. For icons not available in Heroicons, use Lucide:

```bash
php artisan flux:icon crown grip-vertical github
```

This generates Blade icon components under `resources/views/flux/icon/`; commit those files. Reuse already committed custom icons before importing new ones.

## Accessibility and finish

WCAG 2.2 AA is the target. Keyboard focus must be visible; tiny text-only click targets are avoided; loading actions disable and communicate progress; disabled states remain legible; hover is never the only affordance; semantic status text is always present; responsive layouts must work at desktop, laptop, tablet, and mobile widths.

## Acceptance rules

- no standalone ghost/text-looking operational actions;
- no routed navigation disguised as tabs;
- maximum one primary action per logical area;
- multiple row actions use an action menu;
- nested pages use breadcrumbs;
- tables share one toolbar/action/pagination grammar;
- substantial forms share one action-footer grammar;
- destructive actions are differentiated;
- long-running actions expose loading/disabled state;
- no page-wide horizontal overflow;
- light and dark presentation remain coherent;
- visual acceptance is based on rendered screens, not automated tests alone.
