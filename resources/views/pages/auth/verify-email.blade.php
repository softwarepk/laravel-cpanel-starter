<x-layouts::auth :title="__('Verify email')">
    <div class="flex flex-col gap-6 text-center">
        <x-auth-header :title="__('Verify your email')" :description="__('Use the link we sent to your email address before continuing')" />
        @if (session('status') === 'verification-link-sent')
            <div class="text-sm font-medium text-green-700 dark:text-green-300">{{ __('A new verification link has been sent.') }}</div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">@csrf<flux:button variant="primary" type="submit" class="w-full">{{ __('Resend verification email') }}</flux:button></form>
        <form method="POST" action="{{ route('logout') }}">@csrf<flux:button variant="ghost" type="submit">{{ __('Log out') }}</flux:button></form>
    </div>
</x-layouts::auth>
