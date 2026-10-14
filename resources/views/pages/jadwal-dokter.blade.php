<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.portal')] class extends Component {
    public $title = 'Jadwal Dokter Spesialis';
};
?>

<section class="mx-auto max-w-7xl px-6 py-16">
    <p class="font-semibold text-teal-700">Informasi Publik</p>
    <h1 class="mt-3 text-4xl font-bold text-slate-900">Jadwal Dokter Spesialis</h1>
    <p class="mt-4 max-w-2xl leading-7 text-slate-600">
        Jadwal dapat berubah. Silakan konfirmasi kepada Bagian Informasi RS sebelum berkunjung.
    </p>

    <div class="mt-8 overflow-x-auto rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-teal-50 text-teal-950">
                <tr>
                    <th class="p-4">Dokter / Poliklinik</th>
                    <th class="p-4">Hari</th>
                    <th class="p-4">Waktu</th>
                    <th class="p-4">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="p-6 text-center text-slate-500">
                        Data jadwal dokter akan ditambahkan pada tahap berikutnya.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <a href="https://wa.me/6285150763480"
       class="mt-6 inline-block rounded-lg bg-teal-700 px-5 py-3 font-semibold text-white">
        Konfirmasi melalui WhatsApp
    </a>
</section>
