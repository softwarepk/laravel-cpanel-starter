<main class="ui-page">
    <header class="ui-page-header"><div><div class="ui-eyebrow">Account</div><h1 class="ui-page-title">Settings</h1><p class="ui-page-description">Keep account settings compact and separate from product administration.</p></div></header>

    <div class="ui-settings-shell">
        <aside class="ui-settings-sidebar">
            <nav class="ui-settings-nav">
                <a href="{{ route('profile.edit') }}" wire:navigate class="ui-settings-nav-link ui-settings-nav-link-active">Profile</a>
                <a href="{{ route('security.edit') }}" wire:navigate class="ui-settings-nav-link">Security</a>
            </nav>
        </aside>
        <section class="ui-settings-workspace">
            <h2 class="text-lg font-semibold">Profile information</h2>
            <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">Update the name and email used for this account.</p>

            @if (session('status'))
                <div class="mt-4 text-sm font-medium text-green-700 dark:text-green-300">{{ session('status') }}</div>
            @endif

            <form wire:submit="updateProfileInformation" class="mt-6 space-y-5">
                <flux:input wire:model="name" label="Name" required autocomplete="name" />
                <flux:input wire:model="email" type="email" label="Email" required autocomplete="email" />
                <div class="ui-form-actions"><div></div><div class="ui-form-actions-primary"><flux:button type="submit" variant="primary">Save changes</flux:button></div></div>
            </form>
        </section>
    </div>
</main>
