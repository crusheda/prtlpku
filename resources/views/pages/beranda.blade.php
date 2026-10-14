<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.portal')] class extends Component {
    public $title = 'Beranda';
};
?>

<section class="bg-gradient-to-br from-teal-900 to-cyan-800 text-white">
    <div class="mx-auto max-w-7xl px-6 py-24">
        <p class="font-semibold uppercase tracking-widest text-teal-200">Portal Resmi Rumah Sakit</p>
        <h1 class="mt-4 max-w-3xl text-4xl font-bold leading-tight sm:text-6xl">
            Melayani dengan amanah dan sepenuh hati
        </h1>
        <p class="mt-6 max-w-2xl text-lg leading-8 text-teal-50">
            Selamat datang di RS PKU Muhammadiyah Sukoharjo.
            Amanah, Santun, Ramah, Ikhlas.
        </p>
        <div class="mt-8 flex flex-wrap gap-4">
            <a href="/tentang/profil" wire:navigate class="rounded-lg bg-white px-5 py-3 font-semibold text-teal-900">
                Profil RS
            </a>
            <a href="/publik/jadwal-dokter" wire:navigate class="rounded-lg border border-white/50 px-5 py-3 font-semibold text-white">
                Jadwal Dokter
            </a>
            <a href="/publik/tempat-tidur" wire:navigate class="rounded-lg border border-white/50 px-5 py-3 font-semibold text-white">
                Ketersediaan Tempat Tidur
            </a>
        </div>
    </div>
</section>
