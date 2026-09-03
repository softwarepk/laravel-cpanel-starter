<x-layouts.app :title="__('Dashboard')">
    <main class="ui-page">
        <header class="ui-page-header">
            <div>
                <div class="ui-eyebrow">Starter workspace</div>
                <h1 class="ui-page-title">Starter Dashboard</h1>
                <p class="ui-page-description">A neutral landing page that can be replaced as soon as the new product has its first real workflow.</p>
            </div>
            <div class="ui-page-actions">
                <flux:button variant="primary" :href="route('patterns')" wire:navigate>View UI patterns</flux:button>
            </div>
        </header>

        <section class="ui-summary-surface">
            <div class="ui-summary-stat">
                <div class="ui-summary-label">Platform</div>
                <div class="ui-summary-value">Laravel 13</div>
            </div>
            <div class="ui-summary-stat">
                <div class="ui-summary-label">UI</div>
                <div class="ui-summary-value">Livewire + Flux</div>
            </div>
            <div class="ui-summary-stat">
                <div class="ui-summary-label">Deployment target</div>
                <div class="ui-summary-value">cPanel</div>
            </div>
        </section>

        <section class="grid gap-4 lg:grid-cols-2">
            <div class="ui-form-panel">
                <div class="ui-eyebrow">Start here</div>
                <h2 class="mt-1 text-lg font-semibold">Build the first useful workflow</h2>
                <p class="mt-2 text-sm leading-6 text-zinc-600 dark:text-zinc-400">Keep the shell, replace the starter content, and get the new application in front of users early. Do not design the whole product before the first usable vertical slice exists.</p>
            </div>
            <div class="ui-form-panel">
                <div class="ui-eyebrow">Consistency</div>
                <h2 class="mt-1 text-lg font-semibold">Reuse before redesigning</h2>
                <p class="mt-2 text-sm leading-6 text-zinc-600 dark:text-zinc-400">The pattern gallery captures the list, filter, table, form, empty-state, tab, and settings treatments that should be the default starting point.</p>
            </div>
        </section>
    </main>
</x-layouts.app>
