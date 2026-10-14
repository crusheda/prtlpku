<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.portal')] class extends Component {
    public $title = 'Profil RS';
};
?>

<section class="mx-auto max-w-7xl px-6 py-16">
    <p class="font-semibold text-teal-700">Tentang Kami</p>
    <h1 class="mt-3 text-4xl font-bold text-slate-900">Profil RS PKU Muhammadiyah Sukoharjo</h1>

    <div class="mt-8 max-w-3xl space-y-5 text-lg leading-8 text-slate-600">
        <p>
            RS PKU Muhammadiyah Sukoharjo berkomitmen memberikan pelayanan kesehatan
            yang profesional, terintegrasi, dan berlandaskan nilai-nilai Islami.
        </p>
        <p>
            Kami berupaya melayani masyarakat dengan Amanah, Santun, Ramah, dan Ikhlas.
        </p>
    </div>
</section>
