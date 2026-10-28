<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Destinasi | Kelana</title>
  @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Kanit:wght@700;800&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'DM Sans', sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    .glass {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(14px);
    }

    @media (max-width: 640px) {
      .mobile-nav {
        flex-wrap: wrap;
        gap: 16px;
      }

      .mobile-menu {
        width: 100%;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
      }
    }
  </style>
</head>

<body class="bg-[#cde6f3]">

  <!-- Header: navbar + judul halaman, satu latar gradasi -->
  <header id="beranda" class="relative flow-root bg-linear-to-b from-[#12394c] via-[#416c83] to-[#cce7f5]">

  <!-- navbarr -->
    <nav class="glass relative z-20 mx-auto mt-5 flex w-[92%] max-w-7xl flex-wrap items-center justify-between gap-5 rounded-2xl px-6 py-4 md:w-[94%] md:flex-nowrap md:rounded-full md:px-10">
  
      <!-- logo -->
      <a href="#beranda"
        class="shrink-0 text-2xl font-bold tracking-tight text-white md:text-3xl">
        <span class="text-blue-500">Ke</span>lana
      </a>

      <!-- menu -->
      <div class="mobile-menu flex items-center gap-5 text-sm font-medium text-white/90 md:gap-8 md:text-base lg:gap-12">

        <a href="/home"
          class="transition hover:text-white">
          Beranda
        </a>

        <a href="/tentang"
          class="transition hover:text-white">
          Tentang Kami
        </a>

        <a href="/destinasi"
          class="transition hover:text-white">
          Destinasi
        </a>

        <a href="/blog"
          class="transition hover:text-white">
          Blog
        </a>

      </div>

      <!-- admin -->
      <a href="/no/login"
         class="shrink-0 rounded-full bg-blue-500 px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-600 md:px-7 md:text-base">
         Masuk
      </a>


    </nav>

    <!-- judul halaman -->
    <div class="mx-auto max-w-6xl px-6 pb-44 pt-14">
      <h1 class="font-['Kanit'] text-7xl font-extrabold uppercase text-[#dce6ee] md:text-9xl">Destinasi</h1>
      <p class="mt-6 max-w-xl text-lg text-white/85">
        Tempat-tempat terbaik di Indonesia, dikelompokkan per wilayah. Pilih satu dan lihat rute serta biayanya.
      </p>
      <nav aria-label="Wilayah" class="mt-8 flex flex-wrap gap-3">
        <a href="#bali" class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-sm font-medium text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-white">Bali &amp; Nusa Tenggara</a>
        <a href="#jawa" class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-sm font-medium text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-white">Jawa</a>
        <a href="#sumatra" class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-sm font-medium text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-white">Sumatra</a>
        <a href="#sulawesi" class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-sm font-medium text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-white">Sulawesi &amp; Kalimantan</a>
        <a href="#maluku" class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-sm font-medium text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-white">Maluku &amp; Papua</a>
      </nav>
    </div>
  </header>

  <!-- Daftar destinasi -->
  <main class="mx-auto max-w-6xl px-6 pb-16">

    <section id="bali" class="mb-16 scroll-mt-6">
      <h2 class="font-['Kanit'] text-3xl font-bold text-[#16384a]">Bali &amp; Nusa Tenggara</h2>
      <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/bali" class="group block h-56 overflow-hidden bg-linear-to-b from-[#a8d19a] to-[#3f7f4c] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/bali.png') }}" alt="Pemandangan Bali" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Bali</h3>
            <p class="mt-1 text-slate-300">Pantai, sawah berundak, dan budaya.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 2,2 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/lombok-gili" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/lombok.png') }}" alt="Pemandangan Lombok &amp; Gili" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Lombok &amp; Gili</h3>
            <p class="mt-1 text-slate-300">Pantai dan pulau tanpa kendaraan.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 2,4 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/labuan-bajo" class="group block h-56 overflow-hidden bg-linear-to-b from-[#8fb0c6] to-[#d8e4ec] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/labuanbajo.png') }}" alt="Pemandangan Labuan Bajo" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Labuan Bajo</h3>
            <p class="mt-1 text-slate-300">Pulau Komodo dan snorkeling.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 3,0 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/sumba" class="group block h-56 overflow-hidden bg-linear-to-b from-[#c8a47c] to-[#7a563a] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/sumba.png') }}" alt="Pemandangan Sumba" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Sumba</h3>
            <p class="mt-1 text-slate-300">Padang savana dan rumah adat.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 3,8 jt</p>
          </div>
        </article>
      </div>
    </section>

    <section id="jawa" class="mb-16 scroll-mt-6">
      <h2 class="font-['Kanit'] text-3xl font-bold text-[#16384a]">Jawa</h2>
      <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/yogyakarta" class="group block h-56 overflow-hidden bg-linear-to-b from-[#c8a47c] to-[#7a563a] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/candi.png') }}" alt="Pemandangan Yogyakarta" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Yogyakarta</h3>
            <p class="mt-1 text-slate-300">Candi, keraton, dan kuliner.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 1,4 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/gunung-bromo" class="group block h-56 overflow-hidden bg-linear-to-b from-[#6c88a3] via-[#dcc4a2] to-[#e0a63c] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/bromo.png') }}" alt="Pemandangan Gunung Bromo" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Gunung Bromo</h3>
            <p class="mt-1 text-slate-300">Matahari terbit di lautan pasir.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 1,5 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/kawah-ijen" class="group block h-56 overflow-hidden bg-linear-to-b from-[#8fb0c6] to-[#d8e4ec] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/kawahijen.png') }}" alt="Pemandangan Kawah Ijen" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Kawah Ijen</h3>
            <p class="mt-1 text-slate-300">Api biru dan danau kawah.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 1,8 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/karimunjawa" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/karimunjawa.png') }}" alt="Pemandangan Karimunjawa" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Karimunjawa</h3>
            <p class="mt-1 text-slate-300">Pulau berpasir putih.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 2,3 jt</p>
          </div>
        </article>
      </div>
    </section>


    <section id="sulawesi" class="mb-16 scroll-mt-6">
      <h2 class="font-['Kanit'] text-3xl font-bold text-[#16384a]">Sulawesi &amp; Kalimantan</h2>
      <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/bunaken" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/bunaken.png') }}" alt="Pemandangan Bunaken" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Bunaken</h3>
            <p class="mt-1 text-slate-300">Dinding karang yang dalam.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 3,2 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/tana-toraja" class="group block h-56 overflow-hidden bg-linear-to-b from-[#3e5578] via-[#e08f5c] to-[#2c3a4c] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/tanatoraja.png') }}" alt="Pemandangan Tana Toraja" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Tana Toraja</h3>
            <p class="mt-1 text-slate-300">Rumah adat dan upacara.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 2,6 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/wakatobi" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/wakatobi.png') }}" alt="Pemandangan Wakatobi" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Wakatobi</h3>
            <p class="mt-1 text-slate-300">Titik selam kelas dunia.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 5,5 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/derawan" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/derawan.png') }}" alt="Pemandangan Derawan" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Derawan</h3>
            <p class="mt-1 text-slate-300">Penyu dan ubur-ubur tanpa sengat.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 4,5 jt</p>
          </div>
        </article>
      </div>
    </section>

    <section id="maluku" class="mb-16 scroll-mt-6">
      <h2 class="font-['Kanit'] text-3xl font-bold text-[#16384a]">Maluku &amp; Papua</h2>
      <div class="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/raja-ampat" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/rajaampat.png') }}" alt="Pemandangan Raja Ampat" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Raja Ampat</h3>
            <p class="mt-1 text-slate-300">Gugusan pulau dan terumbu karang.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 6,5 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/banda-neira" class="group block h-56 overflow-hidden bg-linear-to-b from-[#3e5578] via-[#e08f5c] to-[#2c3a4c] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/bandaneira.png') }}" alt="Pemandangan Banda Neira" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Banda Neira</h3>
            <p class="mt-1 text-slate-300">Pulau rempah bersejarah.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 4,8 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/lembah-baliem" class="group block h-56 overflow-hidden bg-linear-to-b from-[#a8d19a] to-[#3f7f4c] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/lembahbaliem.png') }}" alt="Pemandangan Lembah Baliem" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Lembah Baliem</h3>
            <p class="mt-1 text-slate-300">Budaya suku pegunungan Wamena.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 5,2 jt</p>
          </div>
        </article>

        <article class="overflow-hidden rounded-3xl bg-[#1d4256] shadow-lg">
          <a href="/destinasi/ambon" class="group block h-56 overflow-hidden bg-linear-to-b from-[#bde3ef] to-[#0e6f88] focus-visible:outline-2 focus-visible:outline-white">
            <img src="{{ asset('image/ambon.png') }}" alt="Pemandangan Ambon" loading="lazy"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
          </a>
          <div class="p-5">
            <h3 class="font-['Kanit'] text-xl font-bold text-white">Ambon</h3>
            <p class="mt-1 text-slate-300">Pantai, kuliner, dan laut biru.</p>
            <p class="mt-3 text-sm font-semibold text-white">Mulai Rp 3,6 jt</p>
          </div>
        </article>
      </div>
    </section>
  </main>

  <!-- footer -->
  <footer class="bg-[#102e3b] px-6 py-12 text-slate-300 sm:px-10 md:px-16 md:py-16 lg:px-24">

    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-4 md:gap-12">

      <div>
        <a href="#beranda" class="text-3xl font-bold text-white">
          <span class="text-blue-500">Ke</span>lana
        </a>

        <p class="mt-5 max-w-xs text-sm leading-7 text-slate-400">
          Menemani perjalananmu menemukan keindahan,
          budaya, dan cerita di seluruh Indonesia.
        </p>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">
          Jelajahi
        </h3>

        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="/destinasi">Destinasi</a>
          <a class="transition hover:text-white" href="/destinasi">Rute & Harga</a>
          <a class="transition hover:text-white" href="/destinasi">Tips Liburan</a>
          <a class="transition hover:text-white" href="/blog">Inspirasi</a>
        </div>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">
          Perusahaan
        </h3>

        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="/tentang">Tentang Kami</a>
          <a class="transition hover:text-white" href="/tentang">Cerita Kami</a>
          <a class="transition hover:text-white" href="/tentang">Karier</a>
        </div>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">
          Hubungi Kami
        </h3>

        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="mailto:halo@kelana.id">
            halo@kelana.id
          </a>
          <a class="transition hover:text-white" href="/blog">
            Instagram
          </a>
          <a class="transition hover:text-white" href="/blog">
            TikTok
          </a>
        </div>
      </div>

    </div>

    <div class="mx-auto mt-12 flex max-w-7xl flex-col gap-4 border-t border-white/15 pt-6 text-xs leading-6 text-slate-400 md:mt-16 md:flex-row md:items-center md:justify-between">

      <p>
        © 2026 Kelana. Semua hak cipta dilindungi.
      </p>

      <div class="flex flex-wrap gap-x-6 gap-y-2">
        <a href="/tentang" class="hover:text-white">
          Syarat dan Ketentuan
        </a>
        <a href="/tentang" class="hover:text-white">
          Kebijakan Privasi
        </a>
      </div>

    </div>

  </footer>

</body>
</html>