<x-layouts::auth :title="__('Forgot password')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Forgot your password?')" :description="__('Enter your email and we will send a reset link')" />
        <x-auth-session-status class="text-center" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5">
            @csrf
            <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email" required autofocus autocomplete="email" />
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Email reset link') }}</flux:button>
        </form>
        <div class="text-center"><flux:link :href="route('login')" wire:navigate>{{ __('Back to login') }}</flux:link></div>
    </div>
</x-layouts::auth>
