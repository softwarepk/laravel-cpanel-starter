<x-layouts.app :title="__('UI Patterns')">
    <main class="ui-page">
        <header class="ui-page-header">
            <div>
                <div class="ui-eyebrow">Living reference</div>
                <h1 class="ui-page-title">UI Pattern Gallery</h1>
                <p class="ui-page-description">Use these as the default visual and interaction patterns for conventional application screens. Adapt them when the product needs something genuinely different.</p>
            </div>
            <div class="ui-page-actions">
                <flux:button variant="primary">Primary action</flux:button>
            </div>
        </header>

        <section class="ui-section">
            <div class="ui-section-header">
                <div>
                    <h2 class="ui-section-title">Summary surface</h2>
                    <p class="ui-section-description">A compact way to show a few important values without turning the page into a dashboard of cards.</p>
                </div>
            </div>
            <div class="ui-summary-surface">
                <div class="ui-summary-stat"><div class="ui-summary-label">Open</div><div class="ui-summary-value">24</div></div>
                <div class="ui-summary-stat"><div class="ui-summary-label">In progress</div><div class="ui-summary-value">8</div></div>
                <div class="ui-summary-stat"><div class="ui-summary-label">Completed</div><div class="ui-summary-value">116</div></div>
            </div>
        </section>

        <section class="ui-section">
            <div class="ui-section-header">
                <div>
                    <h2 class="ui-section-title">Filters and list table</h2>
                    <p class="ui-section-description">Keep filters close to the data and make the primary action obvious.</p>
                </div>
            </div>
            <div class="ui-filter-bar grid gap-3 md:grid-cols-[minmax(0,1fr)_13rem_13rem_auto]">
                <flux:input label="Search" placeholder="Search records…" />
                <flux:select label="Status"><option>Active</option><option>All</option></flux:select>
                <flux:select label="Page size"><option>20</option><option>50</option><option>100</option></flux:select>
                <div class="flex items-end"><flux:button class="w-full">Clear</flux:button></div>
            </div>
            <div class="ui-table-shell">
                <table>
                    <thead><tr><th>Record</th><th>Owner</th><th>Status</th><th class="text-right">Amount</th></tr></thead>
                    <tbody>
                        <tr><td class="font-medium">Example record A</td><td>Alex Morgan</td><td><flux:badge color="blue">Active</flux:badge></td><td class="text-right tabular-nums">12,500</td></tr>
                        <tr><td class="font-medium">Example record B</td><td>Sam Lee</td><td><flux:badge color="amber">Pending</flux:badge></td><td class="text-right tabular-nums">8,250</td></tr>
                        <tr><td class="font-medium">Example record C</td><td>Jordan Patel</td><td><flux:badge color="green">Complete</flux:badge></td><td class="text-right tabular-nums">4,800</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="ui-section">
            <div class="ui-section-header"><div><h2 class="ui-section-title">Form pattern</h2><p class="ui-section-description">Group related fields, keep labels visible, and separate the save action from destructive or secondary actions.</p></div></div>
            <div class="ui-form-panel">
                <div class="ui-form-grid">
                    <flux:input label="Name" placeholder="Example name" />
                    <flux:input type="email" label="Email" placeholder="name@example.com" />
                    <div class="md:col-span-2"><flux:textarea label="Notes" rows="3" placeholder="Optional notes" /></div>
                </div>
                <div class="ui-form-actions">
                    <div><flux:button variant="ghost">Cancel</flux:button></div>
                    <div class="ui-form-actions-primary"><flux:button variant="primary">Save changes</flux:button></div>
                </div>
            </div>
        </section>

        <section class="ui-section">
            <div class="ui-section-header"><div><h2 class="ui-section-title">Tabs and empty states</h2><p class="ui-section-description">Tabs are for closely related views; empty states explain what is missing and what to do next.</p></div></div>
            <div class="ui-form-panel p-0">
                <div class="ui-tabs px-4"><span class="ui-tab ui-tab-active">Overview</span><span class="ui-tab">History</span><span class="ui-tab">Documents</span></div>
                <div class="ui-empty-state">
                    <div class="ui-empty-state-mark">+</div>
                    <div><div class="font-semibold">No documents yet</div><p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">Add a document when the workflow requires supporting material. Do not show large decorative empty states for ordinary tables.</p></div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>
