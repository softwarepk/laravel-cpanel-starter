<x-layouts::auth :title="__('Create account')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details to get started')" />
        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-5">
            @csrf
            <flux:input name="name" :label="__('Name')" :value="old('name')" required autofocus autocomplete="name" />
            <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email" required autocomplete="email" />
            <flux:input name="password" :label="__('Password')" type="password" required viewable autocomplete="new-password" />
            <flux:input name="password_confirmation" :label="__('Confirm password')" type="password" required viewable autocomplete="new-password" />
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Create account') }}</flux:button>
        </form>
        <div class="text-center text-sm text-zinc-600 dark:text-zinc-400">{{ __('Already have an account?') }} <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link></div>
    </div>
</x-layouts::auth>
