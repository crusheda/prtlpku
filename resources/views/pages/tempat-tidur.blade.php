<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.portal')] class extends Component {
    public $title = 'Ketersediaan Tempat Tidur';
};
?>

<section class="mx-auto max-w-7xl px-6 py-16">
    <p class="font-semibold text-teal-700">Informasi Publik</p>
    <h1 class="mt-3 text-4xl font-bold text-slate-900">Ketersediaan Tempat Tidur</h1>
    <p class="mt-4 leading-7 text-slate-600">
        Silakan hubungi rumah sakit untuk memastikan ketersediaan terbaru.
    </p>

    <div class="mt-8 overflow-x-auto rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-teal-50 text-teal-950">
                <tr>
                    <th class="p-4">Ruangan</th>
                    <th class="p-4">Kamar</th>
                    <th class="p-4">Tempat Tidur</th>
                    <th class="p-4">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="p-6 text-center text-slate-500">
                        Data ketersediaan tempat tidur akan ditambahkan pada tahap berikutnya.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <a href="tel:0271593979"
       class="mt-6 inline-block rounded-lg bg-teal-700 px-5 py-3 font-semibold text-white">
        Hubungi Informasi RS: (0271) 593 979
    </a>
</section>
