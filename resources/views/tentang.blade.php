
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - Kelana</title>

   @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 30px;
    }

    body {
      margin: 0;
      font-family: 'DM Sans', sans-serif;
      overflow-x: hidden;
    }

    .display {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: -0.035em;
      line-height: 0.9;
    }

    .hero-bg {
      background: linear-gradient(
        180deg,
        #15394b 0%,
        #527e95 40%,
        #cce7f5 100%
      );
    }

    .story-bg {
      background: linear-gradient(
        180deg,
        #cce7f5 0%,
        #a8c9d9 25%,
        #537e94 72%,
        #153849 100%
      );
    }

    .team-bg {
      background: linear-gradient(
        180deg,
        #153849 0%,
        #163c4e 100%
      );
    }

    .closing-bg {
      background: linear-gradient(
        180deg,
        #163849 0%,
        #c4dce6 100%
      );
    }

    .glass {
      background: rgba(255, 255, 255, 0.13);
      border: 1px solid rgba(255, 255, 255, 0.16);
      backdrop-filter: blur(12px);
    }

    /* NAVBAR */
    .nav-link {
      transition: color 0.25s ease;
    }

    .nav-link:hover {
      color: #bae6fd;
    }

    #nilai {
      padding-top: 120px;
      padding-bottom: 130px;
    }

    #nilai .section-title {
      max-width: 950px;
      margin-bottom: 72px;
    }

    #nilai .gallery {
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      align-items: end;
      gap: 40px;
    }

    #nilai .gallery-item {
      overflow: hidden;
      border-radius: 16px;
      background: #173744;
    }

    #nilai .gallery-item img {
      display: block;
      width: 100%;
      height: 320px;
      object-fit: cover;
      transition: transform 0.45s ease;
    }

    #nilai .gallery-item:hover img {
      transform: scale(1.04);
    }

    #nilai .gallery-item:nth-child(2) {
      margin-top: 80px;
    }

    .team-card {
      background: #d8dadd;
      padding: 8px;
      border-radius: 12px;
      transition: transform 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-5px);
    }

    /* GAMBAR CERITA */
    .story-image {
      overflow: hidden;
      border-radius: 16px;
    }

    .story-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .story-image:hover img {
      transform: scale(1.04);
    }

    .closing-title {
      font-size: clamp(3rem, 11vw, 10rem);
    }

    @media (max-width: 768px) {
      #nilai {
        padding: 85px 24px 95px;
      }

      #nilai .section-title {
        margin-bottom: 44px;
      }

      #nilai .gallery {
        grid-template-columns: 1fr;
        gap: 24px;
      }

      #nilai .gallery-item:nth-child(2) {
        margin-top: 0;
      }

      #nilai .gallery-item img {
        height: 250px;
      }
    }

    @media (max-width: 480px) {
      .nav-link {
        font-size: 12px;
      }

      .team-card {
        padding: 5px;
      }

      #nilai .gallery-item img {
        height: 220px;
      }
    }
  </style>
</head>

<body class="bg-[#102e3b] text-[#153849]">

<!-- nav -->
  <header id="beranda"
    class="hero-bg min-h-[590px] overflow-hidden md:min-h-[680px]">

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

    <div class="mx-auto mt-24 flex w-[88%] max-w-5xl flex-col items-center gap-7 sm:flex-row sm:justify-center sm:gap-10 md:mt-28 md:gap-12">

      <h1 class="display text-center text-7xl text-white sm:text-left sm:text-8xl md:text-9xl">
        Tentang
        <span class="block text-[#e3eff5]">Kami</span>
      </h1>

      <p class="max-w-xs text-center text-sm leading-6 text-white/90 sm:mt-12 sm:text-left md:mt-16 md:leading-7">
        Kelana lahir dari satu pertanyaan sederhana:
        bagaimana merencanakan liburan di Indonesia
        harus serumit ini?
      </p>

    </div>

  </header>


  <main>
<!-- cerita -->
    <section id="cerita"
      class="story-bg px-6 py-24 sm:px-10 md:px-16 md:py-32 lg:px-24">

      <div class="mx-auto max-w-7xl">

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 md:gap-20 lg:gap-24">

          <div>
            <h2 class="display text-6xl text-[#153849] sm:text-7xl md:text-8xl">
              Dimulai
              <span class="block">Dari</span>
              <span class="block">Tiket Yang</span>
              <span class="block">Salah</span>
              <span class="block">Musim</span>
            </h2>
          </div>

          <div class="flex flex-col gap-6 md:pt-3">

            <p class="text-sm leading-7 text-slate-700 md:text-base md:leading-8">
              Kami pernah tiba di Labuan Bajo saat kapal
              tidak berlayar karena cuaca, dan membayar
              tiga kali lipat untuk penginapan di Bali
              pada akhir pekan panjang. Informasinya ada,
              tapi tersebar di puluhan tempat.
            </p>

            <p class="text-sm leading-7 text-slate-700 md:text-base md:leading-8">
              Kelana mengumpulkan rute, perkiraan harga,
              dan waktu terbaik untuk tiap destinasi dalam
              satu halaman, supaya kamu bisa memutuskan
              dengan tenang sebelum berangkat.
            </p>

            <div class="story-image mt-3 h-48 md:mt-5 md:h-60">
              <img
                src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1000&q=85"
                alt="Pemandangan alam untuk inspirasi perjalanan"
                loading="lazy"
              >
            </div>

          </div>

        </div>

      </div>
    </section>


    <section id="nilai" class="story-bg">

      <div class="mx-auto max-w-7xl">

        <h2 class="section-title display text-6xl text-[#153849] sm:text-7xl md:text-8xl">
          Nilai Yang Kami
          <span class="block">Pegang</span>
        </h2>

        
        <div class="mt-20 grid grid-cols-1 gap-10 text-white sm:grid-cols-3 md:mt-28 md:gap-12">

          <article>
            <p class="mb-5 text-sm tracking-widest text-sky-300">
              01 / TRANSPARAN
            </p>

            <h3 class="mb-4 text-xl font-bold md:text-2xl">
              Jujur & Terbuka
            </h3>

            <p class="text-sm leading-7 text-slate-200">
              Informasi perjalanan yang jelas agar kamu
              dapat merencanakan liburan dengan percaya diri.
            </p>
          </article>

          <article>
            <p class="mb-5 text-sm tracking-widest text-sky-300">
              02 / LOKAL
            </p>

            <h3 class="mb-4 text-xl font-bold md:text-2xl">
              Dekat dengan Lokal
            </h3>

            <p class="text-sm leading-7 text-slate-200">
              Menghargai budaya, masyarakat, dan cerita
              unik di setiap tempat yang kita kunjungi.
            </p>
          </article>

          <article>
            <p class="mb-5 text-sm tracking-widest text-sky-300">
              03 / KEBEBASAN
            </p>

            <h3 class="mb-4 text-xl font-bold md:text-2xl">
              Bebas Menjelajah
            </h3>

            <p class="text-sm leading-7 text-slate-200">
              Membantu setiap orang menemukan perjalanan
              yang sesuai dengan keinginan dan rencananya.
            </p>
          </article>

        </div>

      </div>
    </section>

<!-- tim -->
    <section id="tim"
      class="team-bg px-6 py-24 text-white sm:px-10 md:px-16 md:py-32 lg:px-24">

      <div class="mx-auto max-w-7xl">

        <p class="mb-6 text-xs font-semibold uppercase tracking-[0.25em] text-sky-300 md:text-sm">
          Kenalan lebih dekat
        </p>

        <h2 class="display text-5xl sm:text-6xl md:text-7xl lg:text-8xl">
          Orang Orang Baik
          <span class="block">Di Balik Kelana</span>
        </h2>

        <p class="mt-8 max-w-xl text-sm leading-7 text-slate-300 md:text-base md:leading-8">
          Kami percaya perjalanan yang berkesan dimulai
          dari orang-orang yang peduli pada setiap detail.
        </p>

        <!-- Kartu tim -->
        <div class="mt-14 grid grid-cols-2 gap-5 sm:grid-cols-4 md:mt-20 md:gap-8">

          <article class="team-card">
            <div class="aspect-square overflow-hidden rounded-lg bg-[#173744]">
              <img
                src="{{ asset('image/roblox.jpeg') }}"
                alt=""
                loading="lazy"
                class="h-full w-full object-cover"
              >
            </div>

            <div class="px-2 pb-4 pt-4 text-[#153849]">
              <h3 class="font-bold md:text-lg">Aditya</h3>
              <p class="mt-2 text-xs text-slate-600">Pendiri</p>
            </div>
          </article>

          <article class="team-card">
            <div class="aspect-square overflow-hidden rounded-lg bg-[#173744]">
              <img
                src="{{ asset('image/roblox.jpeg') }}"
                alt=""
                loading="lazy"
                class="h-full w-full object-cover"
              >
            </div>

            <div class="px-2 pb-4 pt-4 text-[#153849]">
              <h3 class="font-bold md:text-lg">Nadia</h3>
              <p class="mt-2 text-xs text-slate-600">Penulis</p>
            </div>
          </article>

          <article class="team-card">
            <div class="aspect-square overflow-hidden rounded-lg bg-[#173744]">
              <img
                src="{{ asset('image/roblox.jpeg') }}"
                alt=""
                loading="lazy"
                class="h-full w-full object-cover"
              >
            </div>

            <div class="px-2 pb-4 pt-4 text-[#153849]">
              <h3 class="font-bold md:text-lg">Rizky</h3>
              <p class="mt-2 text-xs text-slate-600">Riset Destinasi</p>
            </div>
          </article>

          <article class="team-card">
            <div class="aspect-square overflow-hidden rounded-lg bg-[#173744]">
              <img
                src="{{ asset('image/roblox.jpeg') }}"
                alt=""
                loading="lazy"
                class="h-full w-full object-cover"
              >
            </div>

            <div class="px-2 pb-4 pt-4 text-[#153849]">
              <h3 class="font-bold md:text-lg">Putri</h3>
              <p class="mt-2 text-xs text-slate-600">Desainer</p>
            </div>
          </article>

        </div>

      </div>
    </section>


    <!-- penutup -->
    <section id="blog"
      class="ending-bg overflow-hidden px-4 py-16 text-center md:py-24">

      <p class="mb-6 text-xs font-semibold uppercase tracking-[0.3em] text-white md:text-sm">
        Cerita perjalananmu dimulai di sini
      </p>

      <marquee  scrollamount="6" class="display whitespace-nowrap text-[12vw] text-white">
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


  <!-- javascrip -->
  <script>
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
      link.addEventListener('click', (event) => {
        const targetId = link.getAttribute('href');

        if (targetId === '#') return;

        const target = document.querySelector(targetId);

        if (target) {
          event.preventDefault();

          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });

          history.replaceState(null, '', targetId);
        }
      });
    });
  </script>

</body>
</html>
