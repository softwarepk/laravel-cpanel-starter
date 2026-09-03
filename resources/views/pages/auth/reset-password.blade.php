<x-layouts.auth :title="__('Reset password')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Reset password')" :description="__('Choose a new password for your account')" />
        <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-5">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <flux:input name="email" :label="__('Email address')" :value="old('email', $request->email)" type="email" required autocomplete="email" />
            <flux:input name="password" :label="__('Password')" type="password" required viewable autocomplete="new-password" />
            <flux:input name="password_confirmation" :label="__('Confirm password')" type="password" required viewable autocomplete="new-password" />
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Reset password') }}</flux:button>
        </form>
    </div>
</x-layouts.auth>
