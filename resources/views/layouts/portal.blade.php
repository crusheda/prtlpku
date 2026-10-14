<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'RS PKU Muhammadiyah Sukoharjo' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a href="/" wire:navigate class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-teal-700 text-2xl font-bold text-white">+</span>
                <span class="font-bold text-teal-900">RS PKU Muhammadiyah<br><span class="font-normal text-slate-600">Sukoharjo</span></span>
            </a>

            <nav class="hidden items-center gap-6 text-sm font-medium md:flex">
                <a href="/" wire:navigate class="hover:text-teal-700">Beranda</a>
                <a href="/tentang/profil" wire:navigate class="hover:text-teal-700">Profil RS</a>
                <a href="/publik/jadwal-dokter" wire:navigate class="hover:text-teal-700">Jadwal Dokter</a>
                <a href="/publik/tempat-tidur" wire:navigate class="hover:text-teal-700">Tempat Tidur</a>
            </nav>

            <a href="https://wa.me/6285150763480"
               class="rounded-lg bg-teal-700 px-4 py-2.5 text-sm font-semibold text-white hover:bg-teal-800">
                Hubungi Kami
            </a>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="mt-16 bg-slate-900 px-6 py-8 text-slate-200">
        <div class="mx-auto max-w-7xl">
            <p class="font-bold text-white">RS PKU Muhammadiyah Sukoharjo</p>
            <p class="mt-2 text-sm">Jl. Mayor Sunaryo No. 37, Sukoharjo · IGD 24 Jam: (0271) 599 1165</p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
