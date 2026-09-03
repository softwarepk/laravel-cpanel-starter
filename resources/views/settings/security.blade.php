<main class="ui-page">
    <header class="ui-page-header"><div><div class="ui-eyebrow">Account</div><h1 class="ui-page-title">Settings</h1><p class="ui-page-description">Security actions should be clear, deliberate, and separate from ordinary profile edits.</p></div></header>

    <div class="ui-settings-shell">
        <aside class="ui-settings-sidebar">
            <nav class="ui-settings-nav">
                <a href="{{ route('profile.edit') }}" wire:navigate class="ui-settings-nav-link">Profile</a>
                <a href="{{ route('security.edit') }}" wire:navigate class="ui-settings-nav-link ui-settings-nav-link-active">Security</a>
            </nav>
        </aside>
        <section class="ui-settings-workspace">
            <h2 class="text-lg font-semibold">Change password</h2>
            <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">Use a strong password you do not reuse elsewhere.</p>

            @if (session('status'))
                <div class="mt-4 text-sm font-medium text-green-700 dark:text-green-300">{{ session('status') }}</div>
            @endif

            <form wire:submit="updatePassword" class="mt-6 space-y-5">
                <flux:input wire:model="current_password" type="password" label="Current password" required viewable autocomplete="current-password" />
                <flux:input wire:model="password" type="password" label="New password" required viewable autocomplete="new-password" />
                <flux:input wire:model="password_confirmation" type="password" label="Confirm new password" required viewable autocomplete="new-password" />
                <div class="ui-form-actions"><div></div><div class="ui-form-actions-primary"><flux:button type="submit" variant="primary">Update password</flux:button></div></div>
            </form>
        </section>
    </div>
</main>
