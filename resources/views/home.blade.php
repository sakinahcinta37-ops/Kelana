
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Kelana</title>

  @vite('resources/css/app.css')


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'DM Sans', sans-serif;
    }

    .display {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: -0.035em;
      line-height: 0.88;
    }

    html {
      scroll-behavior: smooth;
    }

    .hero-bg {
      background: linear-gradient(
        180deg,
        #12394c 0%,
        #416c83 45%,
        #cce7f5 100%
      );
    }

    .journey-bg {
      background: linear-gradient(
        180deg,
        #cce7f5 0%,
        #7ea6bb 25%,
        #173d50 65%,
        #102f3e 100%
      );
    }

    .ending-bg {
      background: linear-gradient(
        180deg,
        #163d50 0%,
        #c4e0ed 100%
      );
    }

    .glass {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(14px);
    }

    .destination-card {
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .destination-card img {
      transition: transform 0.5s ease;
    }

    .destination-card:hover img {
      transform: scale(1.07);
    }

    .destination-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 18px 35px rgba(14, 47, 61, 0.18);
    }

    .destination-card::after {
      content: "";
      position: absolute;
      inset: 35% 0 0;
      background: linear-gradient(
        transparent,
        rgba(7, 30, 41, 0.8)
      );
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .destination-card:hover::after,
    .destination-card.selected::after {
      opacity: 1;
    }

    .destination-name {
      opacity: 0;
      transform: translateY(8px);
      transition: all 0.3s ease;
    }

    .destination-card:hover .destination-name,
    .destination-card.selected .destination-name {
      opacity: 1;
      transform: translateY(0);
    }

    .destination-card.selected {
      outline: 3px solid white;
      outline-offset: 3px;
    }

    .trip-image {
      transition: transform 0.4s ease;
    }

    .trip-image:hover {
      transform: translateY(-6px);
    }

    .toast {
      opacity: 0;
      pointer-events: none;
      transform: translate(-50%, 15px);
      transition: all 0.3s ease;
    }

    .toast.show {
      opacity: 1;
      transform: translate(-50%, 0);
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

      .destination-name {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body class="bg-slate-900 text-slate-900">

  <!-- hero -->
  <header id="beranda" class="hero-bg relative min-h-180 overflow-hidden md:min-h-200">

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

    <!-- gambar -->
     <div class="pointer-events-none absolute left-0 top-28 h-[350px] w-full opacity-60 md:left-[3%] md:top-28 md:h-[500px] md:w-[55%] md:opacity-90">

      <img
        src="{{ asset('image/home.png') }}"
        alt="Keindahan arsitektur dan budaya Indonesia"
        class="h-full w-full object-contain drop-shadow-2xl"
      >

    </div>

    <div class="relative z-10 mx-auto mt-36 w-[88%] max-w-7xl pb-20 md:mt-40 md:pl-[36%]">

      <h1 class="display text-7xl text-white sm:text-8xl md:text-9xl lg:text-[9rem]">
        Wisata
        <span class="block text-slate-100">
          Nusantara
        </span>
      </h1>

      <p class="mt-8 max-w-md text-sm leading-7 text-white/90 md:text-base">
        Dari Bali hingga Raja Ampat: temukan rute, harga,
        dan waktu terbaik untuk menjelajahi Indonesia.
      </p>

      <a href="#destinasi"
        class="mt-7 inline-flex items-center gap-3 rounded-full border border-white/30 bg-slate-900/30 px-7 py-4 text-sm font-semibold text-white transition hover:-translate-y-1 hover:bg-slate-900/60">
        Mulai Jelajah
        <span>↗</span>
      </a>

    </div>
  </header>

  <main>

    <!-- destinasi -->
    <section id="destinasi"
      class="bg-[#cce7f5] px-6 py-20 sm:px-10 md:px-16 md:py-28 lg:px-24">

      <div class="mx-auto max-w-7xl">

        <p class="mb-5 text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 md:text-sm">
          Temukan tempat favoritmu
        </p>

        <h2 class="display text-6xl text-[#153849] sm:text-7xl md:text-8xl lg:text-9xl">
          Pilih Pulau
          <span class="block">Tujuanmu</span>
        </h2>

        <p class="mt-7 max-w-xl text-sm leading-7 text-slate-600 md:text-base">
          Temukan destinasi impianmu dan mulailah perjalanan
          untuk menjelajahi keindahan Indonesia.
        </p>

        <!-- grid -->
        <div class="mt-12 grid grid-cols-1 gap-5 sm:grid-cols-2 md:mt-16 md:gap-7">

          <!-- bali -->
          <button
            type="button"
            class="destination-card group h-64 rounded-2xl bg-slate-900 text-left sm:h-72 md:h-80"
            data-island="Bali"
            aria-pressed="false">

            <img
              src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1000&q=85"
              alt="Pemandangan Bali"
              loading="lazy"
              class="absolute inset-0 h-full w-full object-cover"
            >

            <span class="destination-name absolute bottom-7 left-7 z-10 text-3xl font-bold text-white md:text-4xl">
              Bali ↗
            </span>

          </button>

         
          <button
            type="button"
            class="destination-card group h-64 rounded-2xl bg-slate-900 text-left sm:h-72 md:h-80"
            data-island="Raja Ampat"
            aria-pressed="false">

            <img
              src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?auto=format&fit=crop&w=1000&q=85"
              alt="Laut biru dan pulau tropis"
              loading="lazy"
              class="absolute inset-0 h-full w-full object-cover"
            >

            <span class="destination-name absolute bottom-7 left-7 z-10 text-3xl font-bold text-white md:text-4xl">
              Raja Ampat ↗
            </span>

          </button>

        
          <button
            type="button"
            class="destination-card group h-64 rounded-2xl bg-slate-900 text-left sm:h-72 md:h-80"
            data-island="Yogyakarta"
            aria-pressed="false">

            <img
              src="https://images.unsplash.com/photo-1584810359583-96fc3448beaa?auto=format&fit=crop&w=1000&q=85"
              alt="Candi dan warisan budaya Indonesia"
              loading="lazy"
              class="absolute inset-0 h-full w-full object-cover"
            >

            <span class="destination-name absolute bottom-7 left-7 z-10 text-3xl font-bold text-white md:text-4xl">
              Yogyakarta ↗
            </span>

          </button>

      
          <button
            type="button"
            class="destination-card group h-64 rounded-2xl bg-slate-900 text-left sm:h-72 md:h-80"
            data-island="Lombok"
            aria-pressed="false">

            <img
              src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=1000&q=85"
              alt="Pemandangan alam tropis"
              loading="lazy"
              class="absolute inset-0 h-full w-full object-cover"
            >

            <span class="destination-name absolute bottom-7 left-7 z-10 text-3xl font-bold text-white md:text-4xl">
              Lombok ↗
            </span>

          </button>

        </div>

        <p id="island-hint"
          aria-live="polite"
          class="mt-8 rounded-xl bg-white/50 px-5 py-4 text-sm leading-6 text-slate-700 md:text-base">
          Pilih salah satu destinasi untuk memulai petualanganmu.
        </p>

      </div>
    </section>

    <!-- rencana perjalanan -->
    <section id="tentang"
      class="journey-bg overflow-hidden px-6 pt-20 sm:px-10 md:px-16 md:pt-28 lg:px-24">

      <div class="mx-auto max-w-7xl">

        <p class="mb-6 text-xs font-semibold uppercase tracking-[0.3em] text-slate-600 md:text-sm">
          Perjalanan dimulai dari sini
        </p>

        <h2 class="display max-w-4xl text-6xl text-[#153849] sm:text-7xl md:text-8xl lg:text-9xl">
          Satu Tempat
          <span class="block">Untuk Rencana</span>
          <span class="block">Perjalananmu</span>
        </h2>

        <p class="mt-8 max-w-xl text-sm leading-7 text-slate-700 md:text-base">
          Temukan inspirasi perjalanan, jelajahi tempat baru,
          dan ciptakan kenangan yang tidak terlupakan.
        </p>

        <!-- galeri -->
        <div class="mb-24 mt-12 grid grid-cols-1 items-end gap-5 sm:grid-cols-3 md:mt-16 md:gap-7">

          <div class="trip-image h-64 overflow-hidden rounded-2xl sm:h-56 md:h-72">
            <img
              src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=85"
              alt="Pemandangan alam"
              loading="lazy"
              class="h-full w-full object-cover"
            >
          </div>

          <div class="trip-image h-64 overflow-hidden rounded-2xl sm:h-48 md:h-60">
            <img
              src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=800&q=85"
              alt="Danau dan pegunungan"
              loading="lazy"
              class="h-full w-full object-cover"
            >
          </div>

          <div class="trip-image h-64 overflow-hidden rounded-2xl sm:h-40 md:h-48">
            <img
              src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=85"
              alt="Pegunungan yang indah"
              loading="lazy"
              class="h-full w-full object-cover"
            >
          </div>

        </div>

        <!-- cta -->
        <div class="pb-24 md:pb-32">

          <p class="mb-5 text-sm font-medium tracking-widest text-sky-100">
            SAATNYA MENJELAJAH
          </p>

          <h2 class="display text-7xl text-white sm:text-8xl md:text-9xl">
            Siap
            <span class="block">Berangkat?</span>
          </h2>

          <a href="#destinasi"
            class="mt-10 inline-flex items-center gap-4 rounded-full bg-white px-8 py-4 text-sm font-bold text-[#153849] transition hover:-translate-y-1 hover:bg-sky-100 md:text-base">
            Pilih Destinasi
            <span>↗</span>
          </a>

        </div>

      </div>
    </section>

    <!-- penutup -->
    <section id="blog"
      class="ending-bg overflow-hidden px-4 py-16 text-center md:py-24">

      <p class="mb-6 text-xs font-semibold uppercase tracking-[0.3em] text-white md:text-sm">
        Cerita perjalananmu dimulai di sini
      </p>

      <marquee  scrollamount="6" class="display whitespace-nowrap text-[12vw] text-[#153849]">
        Wisata Nusantara
      </marquee>

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
          <a class="transition hover:text-white" href="#destinasi">Destinasi</a>
          <a class="transition hover:text-white" href="#destinasi">Rute & Harga</a>
          <a class="transition hover:text-white" href="#destinasi">Tips Liburan</a>
          <a class="transition hover:text-white" href="#blog">Inspirasi</a>
        </div>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">
          Perusahaan
        </h3>

        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="#tentang">Tentang Kami</a>
          <a class="transition hover:text-white" href="#tentang">Cerita Kami</a>
          <a class="transition hover:text-white" href="#tentang">Karier</a>
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
          <a class="transition hover:text-white" href="#blog">
            Instagram
          </a>
          <a class="transition hover:text-white" href="#blog">
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
        <a href="#tentang" class="hover:text-white">
          Syarat dan Ketentuan
        </a>
        <a href="#tentang" class="hover:text-white">
          Kebijakan Privasi
        </a>
      </div>

    </div>

  </footer>

  <!-- NOTIFIKASI DESTINASI -->
  <div id="toast"
    role="status"
    aria-live="polite"
    class="toast fixed bottom-6 left-1/2 z-50 w-max max-w-[90%] rounded-xl bg-white px-6 py-4 text-sm font-medium text-[#153849] shadow-2xl">
  </div>

  <!-- JAVASCRIPT -->
  <script>
    const cards = document.querySelectorAll('.destination-card');
    const hint = document.getElementById('island-hint');
    const toast = document.getElementById('toast');

    let toastTimer;

    cards.forEach((card) => {
      card.addEventListener('click', () => {

        cards.forEach((item) => {
          item.classList.remove('selected');
          item.setAttribute('aria-pressed', 'false');
        });

        card.classList.add('selected');
        card.setAttribute('aria-pressed', 'true');

        const destination = card.dataset.island;

        hint.textContent =
          `Kamu memilih ${destination}. Saatnya merencanakan perjalananmu!`;

        toast.textContent =
          `Destinasi ${destination} berhasil dipilih!`;

        toast.classList.add('show');

        clearTimeout(toastTimer);

        toastTimer = setTimeout(() => {
          toast.classList.remove('show');
        }, 2800);

      });
    });
  </script>

</body>
</html>
