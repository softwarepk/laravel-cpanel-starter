@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => $title])
    </head>
    <body class="min-h-screen bg-zinc-50 text-zinc-950 dark:bg-zinc-950 dark:text-zinc-50">
        <main class="mx-auto flex min-h-screen w-full max-w-md flex-col justify-center px-6 py-10">
            <div class="mb-8 flex justify-center">
                <x-app-logo />
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-6 shadow-sm shadow-zinc-950/[0.03] dark:border-zinc-800 dark:bg-zinc-900 sm:p-7">
                {{ $slot }}
            </div>
        </main>

        @fluxScripts
    </body>
</html>
