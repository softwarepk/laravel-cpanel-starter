<x-layouts::auth :title="__('Confirm password')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Confirm your password')" :description="__('This is a secure area. Confirm your password to continue.')" />
        <form method="POST" action="{{ route('password.confirm.store') }}" class="flex flex-col gap-5">
            @csrf
            <flux:input name="password" :label="__('Password')" type="password" required viewable autocomplete="current-password" />
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Confirm') }}</flux:button>
        </form>
    </div>
</x-layouts::auth>
