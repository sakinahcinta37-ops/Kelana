<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Kelana</title>

  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['Anton', 'Impact', 'sans-serif'],
            sans: ['Montserrat', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          },
          colors: {
            kelana: { deep: '#1d3d63', sky: '#cfe4f4', card: '#5ba9d3', ink: '#14293a' },
          },
        },
      },
    }
  </script>

  <style>
    html {
      scroll-behavior: smooth;
    }

    /* navbar: sama persis dengan Home & Destinasi */
    footer {
      font-family: 'DM Sans', sans-serif;
    }

    .glass {
      font-family: 'DM Sans', sans-serif;
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

<body id="beranda" class="min-h-screen bg-kelana-sky font-sans text-kelana-ink bg-no-repeat bg-[length:100%_520px] bg-[linear-gradient(to_bottom,#1d3d63_0%,#3b6a94_18%,#cfe4f4_42%)]">


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


  <main class="mx-auto w-[92%] max-w-6xl pb-20">

    <!-- hero -->
    <header class="pt-16 md:pt-24">
      <h1 class="font-display text-7xl uppercase leading-none tracking-wide text-white md:text-9xl">
        Blog
      </h1>
      <p class="mt-4 max-w-xl text-sm leading-relaxed text-white/90 md:text-base">
        Catatan perjalanan, rute antarpulau, dan perkiraan biaya dari seluruh Indonesia,
        ditulis supaya liburanmu lebih mudah direncanakan.
      </p>
    </header>

    <!-- FILTER -->
    <div class="mt-12 flex flex-wrap gap-3 md:mt-16" role="tablist" aria-label="Kategori blog">
      <button type="button" role="tab" aria-selected="true"
        class="rounded-full bg-kelana-ink px-7 py-2.5 text-sm font-semibold text-white transition">
        Jawa Timur
      </button>
      <button type="button" role="tab" aria-selected="false"
        class="rounded-full bg-kelana-ink/80 px-7 py-2.5 text-sm font-semibold text-white transition hover:bg-kelana-ink">
        Jawa Tengah
      </button>
      <button type="button" role="tab" aria-selected="false"
        class="rounded-full bg-kelana-ink/80 px-7 py-2.5 text-sm font-semibold text-white transition hover:bg-kelana-ink">
        Bali
      </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-10">
     @foreach($featureds as $featured)
        <a href="{{ route('blog.show', $featured->id) }}">
            <div class="relative border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
                <div class="bg-primary text-white rounded-full w-fit px-5 py-1 text-sm absolute ml-2 mt-2">
                    {{ $featured->newsCategory->title }}
                </div>
                <img src="{{ asset('storage/'.$featured->thumbnail) }}" alt="" class="w-full aspect-video object-cover rounded-xl mb-3">
                <!-- <p class="text-xs text-red-500">{{ $featured->thumbnail }}</p> -->
                <p class="font-bold text-base mb-1">{{ $featured->title }}</p>
                <p class="text-slate-400 text-sm">
                    {{ $featured->author->name }} • {{ \Carbon\Carbon::parse($featured->created_at)->format('d F Y') }}
                </p>
            </div>
        </a>
     @endforeach
   </div>

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