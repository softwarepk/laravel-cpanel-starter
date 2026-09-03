<x-ui.page width="wide">
    <x-ui.page-header
        :title="__('Settings')"
        :description="__('Security actions should be clear, deliberate, and separate from ordinary profile edits.')"
        :eyebrow="__('Account')"
    />

    <div class="ui-settings-shell">
        <aside class="ui-settings-sidebar">
            <div class="ui-settings-sidebar-intro">
                <div class="ui-settings-sidebar-kicker">{{ __('Account') }}</div>
                <div class="ui-settings-sidebar-copy">{{ __('Manage the current user profile and sign-in security.') }}</div>
            </div>
            <nav class="ui-settings-nav">
                <div class="ui-settings-nav-group">
                    <a href="{{ route('profile.edit') }}" wire:navigate class="ui-settings-nav-link">
                        <span class="ui-settings-nav-title">{{ __('Profile') }}</span>
                        <span class="ui-settings-nav-description">{{ __('Name and email') }}</span>
                    </a>
                    <a href="{{ route('security.edit') }}" wire:navigate class="ui-settings-nav-link ui-settings-nav-link-active">
                        <span class="ui-settings-nav-title">{{ __('Security') }}</span>
                        <span class="ui-settings-nav-description">{{ __('Password') }}</span>
                    </a>
                </div>
            </nav>
        </aside>

        <section class="ui-settings-workspace">
            <div class="ui-settings-workspace-header">
                <div>
                    <div class="ui-settings-context">{{ __('Account') }}</div>
                    <h2 class="text-xl font-semibold">{{ __('Security') }}</h2>
                    <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">{{ __('Change the password used to sign in to this account.') }}</p>
                </div>
            </div>

            <div class="ui-settings-workspace-body">
                @if (session('status'))
                    <div class="rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700 dark:border-emerald-900/80 dark:bg-emerald-950/45 dark:text-emerald-300">{{ session('status') }}</div>
                @endif

                <form wire:submit="updatePassword" class="ui-settings-block">
                    <div class="ui-settings-block-header">
                        <div class="ui-settings-block-title">{{ __('Change password') }}</div>
                        <div class="ui-settings-block-description">{{ __('Use a strong password that is not reused elsewhere.') }}</div>
                    </div>
                    <div class="ui-settings-block-body">
                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="md:col-span-2"><flux:input wire:model="current_password" type="password" :label="__('Current password')" required viewable autocomplete="current-password" /></div>
                            <flux:input wire:model="password" type="password" :label="__('New password')" required viewable autocomplete="new-password" />
                            <flux:input wire:model="password_confirmation" type="password" :label="__('Confirm new password')" required viewable autocomplete="new-password" />
                        </div>
                        <x-ui.form-actions>
                            <flux:button type="submit" variant="primary">{{ __('Update password') }}</flux:button>
                        </x-ui.form-actions>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-ui.page>
