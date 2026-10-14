<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RS PKU Muhammadiyah Sukoharjo</title>
    <meta name="description" content="Portal resmi RS PKU Muhammadiyah Sukoharjo. Amanah, Santun, Ramah, Ikhlas.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a href="/" class="flex items-center gap-3">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-700 text-2xl font-bold text-white">+</span>
                <span>
                    <span class="block text-sm font-bold text-teal-800 sm:text-base">RS PKU Muhammadiyah</span>
                    <span class="block text-sm text-slate-600">Sukoharjo</span>
                </span>
            </a>

            <nav class="hidden items-center gap-7 text-sm font-medium md:flex">
                <a href="#beranda" class="hover:text-teal-700">Beranda</a>
                <a href="#tentang" class="hover:text-teal-700">Tentang Kami</a>
                <a href="#layanan" class="hover:text-teal-700">Pelayanan</a>
                <a href="#kontak" class="hover:text-teal-700">Kontak</a>
            </nav>

            <a href="https://wa.me/6285150763480"
               class="rounded-lg bg-teal-700 px-4 py-2.5 text-sm font-semibold text-white hover:bg-teal-800">
                Hubungi Kami
            </a>
        </div>
    </header>

    <main>
        <section id="beranda" class="bg-gradient-to-br from-teal-900 via-teal-800 to-cyan-800 text-white">
            <div class="mx-auto grid max-w-7xl gap-12 px-6 py-20 md:grid-cols-2 md:items-center md:py-28">
                <div>
                    <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-teal-200">
                        Portal Resmi Rumah Sakit
                    </p>
                    <h1 class="text-4xl font-bold leading-tight sm:text-5xl">
                        Melayani dengan amanah dan sepenuh hati
                    </h1>
                    <p class="mt-6 max-w-xl text-lg leading-8 text-teal-50">
                        Selamat datang di RS PKU Muhammadiyah Sukoharjo.
                        Kami berkomitmen memberikan pelayanan kesehatan yang
                        Amanah, Santun, Ramah, dan Ikhlas.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#layanan"
                           class="rounded-lg bg-white px-5 py-3 font-semibold text-teal-800 hover:bg-teal-50">
                            Lihat Pelayanan
                        </a>
                        <a href="https://wa.me/6285150763480"
                           class="rounded-lg border border-white/50 px-5 py-3 font-semibold text-white hover:bg-white/10">
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>

                <div class="rounded-3xl border border-white/20 bg-white/10 p-8 shadow-xl backdrop-blur-sm">
                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-200">
                        Siap melayani Anda
                    </p>
                    <h2 class="mt-3 text-3xl font-bold">IGD 24 Jam</h2>
                    <p class="mt-4 leading-7 text-teal-50">
                        Untuk keadaan darurat, silakan hubungi layanan IGD rumah sakit.
                    </p>
                    <a href="tel:02715991165" class="mt-6 inline-block text-xl font-bold hover:underline">
                        (0271) 599 1165
                    </a>
                </div>
            </div>
        </section>

        <section id="tentang" class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="max-w-3xl">
                <p class="font-semibold text-teal-700">Lebih dekat dengan kami</p>
                <h2 class="mt-3 text-3xl font-bold text-slate-900">Pelayanan kesehatan yang menyeluruh</h2>
                <p class="mt-5 leading-8 text-slate-600">
                    RS PKU Muhammadiyah Sukoharjo menghadirkan tenaga medis profesional,
                    fasilitas kesehatan terintegrasi, dan pelayanan yang mengutamakan
                    keselamatan serta kenyamanan pasien.
                </p>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="text-2xl text-teal-700">✚</div>
                    <h3 class="mt-4 text-lg font-bold">Tenaga Medis Profesional</h3>
                    <p class="mt-2 leading-7 text-slate-600">Didukung tenaga kesehatan yang kompeten dan berpengalaman.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="text-2xl text-teal-700">♡</div>
                    <h3 class="mt-4 text-lg font-bold">Pelayanan Islami</h3>
                    <p class="mt-2 leading-7 text-slate-600">Melayani dengan santun, ramah, ikhlas, dan penuh kepedulian.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="text-2xl text-teal-700">⌂</div>
                    <h3 class="mt-4 text-lg font-bold">Fasilitas Terintegrasi</h3>
                    <p class="mt-2 leading-7 text-slate-600">Beragam layanan kesehatan tersedia untuk mendukung kebutuhan pasien.</p>
                </article>
            </div>
        </section>

        <section id="layanan" class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
                <p class="font-semibold text-teal-700">Layanan Rumah Sakit</p>
                <h2 class="mt-3 text-3xl font-bold text-slate-900">Kami hadir untuk kesehatan Anda</h2>

                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Poliklinik Spesialis</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Instalasi Gawat Darurat</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Rawat Inap</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Laboratorium</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Radiologi</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Farmasi</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Rehabilitasi Medik</div>
                    <div class="rounded-xl bg-teal-50 p-5 font-semibold text-teal-900">Instalasi Bedah Sentral</div>
                </div>
            </div>
        </section>
    </main>

    <footer id="kontak" class="bg-slate-900 text-slate-200">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 py-10 md:grid-cols-2">
            <div>
                <h2 class="text-lg font-bold text-white">RS PKU Muhammadiyah Sukoharjo</h2>
                <p class="mt-3 leading-7">Jl. Mayor Sunaryo No. 37, Sukoharjo, Jawa Tengah 57512</p>
                <p class="mt-2">Email: pku.sukoharjo@gmail.com</p>
            </div>
            <div>
                <h3 class="font-semibold text-white">Informasi dan layanan</h3>
                <p class="mt-3">Informasi RS: <a class="hover:underline" href="tel:0271593979">(0271) 593 979</a></p>
                <p class="mt-2">IGD 24 Jam: <a class="hover:underline" href="tel:02715991165">(0271) 599 1165</a></p>
                <p class="mt-2">WhatsApp: <a class="hover:underline" href="https://wa.me/6285150763480">0851-5076-3480</a></p>
            </div>
        </div>
        <div class="border-t border-white/10 px-6 py-4 text-center text-sm text-slate-400">
            © {{ date('Y') }} RS PKU Muhammadiyah Sukoharjo
        </div>
    </footer>

</body>
</html>
