<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AOR Kids</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/home" :active="request()->is('/home')">Hem</x-nav-link>
                                <x-nav-link href="/comp" :active="request()->is('comp')">Tävlingar</x-nav-link>
                                <x-nav-link href="/gradings" :active="request()->is('gradings')">Graderingar</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <x-nav-link href="/home" :active="request()->is('/home')">Hem</x-nav-link>
                    <x-nav-link href="/comp" :active="request()->is('comp')">Tävlingar</x-nav-link>
                    <x-nav-link href="/gradings" :active="request()->is('gradings')">Graderingar</x-nav-link>
                </div>
            </div>
        </nav>

        {{-- Header --}}
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>

        {{-- Main --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
