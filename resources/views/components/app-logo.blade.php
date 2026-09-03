@props(['sidebar' => false, 'href' => null])

@php
    $productName = config('app.name', 'Starter');
    $mark = mb_strtoupper(mb_substr($productName, 0, 1));
    $href ??= auth()->check() ? route('dashboard') : route('home');
@endphp

@if ($sidebar)
    <flux:sidebar.brand :name="$productName" :href="$href" wire:navigate>
        <x-slot name="logo" class="flex aspect-square size-9 items-center justify-center rounded-lg bg-zinc-900 text-sm font-semibold text-white dark:bg-white dark:text-zinc-950">
            {{ $mark }}
        </x-slot>
    </flux:sidebar.brand>
@else
    <a href="{{ $href }}" class="inline-flex items-center gap-2 font-semibold text-zinc-950 dark:text-white">
        <span class="flex size-9 items-center justify-center rounded-lg bg-zinc-900 text-sm font-semibold text-white dark:bg-white dark:text-zinc-950">{{ $mark }}</span>
        <span>{{ $productName }}</span>
    </a>
@endif
