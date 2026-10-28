<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $news->title }} | Kelana</title>

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
    html { scroll-behavior: smooth; }
    footer { font-family: 'DM Sans', sans-serif; }
    .glass {
      font-family: 'DM Sans', sans-serif;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(14px);
    }
    #isiBerita p { margin-bottom: 1rem; }
    #isiBerita h2, #isiBerita h3 { font-weight: 700; margin: 1.5rem 0 .5rem; }
    #isiBerita ul { list-style: disc; padding-left: 1.5rem; }
    #isiBerita ol { list-style: decimal; padding-left: 1.5rem; }
    #isiBerita a { color: #2563eb; text-decoration: underline; }
    @media (max-width: 640px) {
      .mobile-nav { flex-wrap: wrap; gap: 16px; }
      .mobile-menu { width: 100%; justify-content: space-between; gap: 10px; flex-wrap: wrap; }
    }
  </style>
</head>

<body id="beranda" class="min-h-screen bg-kelana-sky font-sans text-kelana-ink bg-no-repeat bg-[length:100%_520px] bg-[linear-gradient(to_bottom,#1d3d63_0%,#3b6a94_18%,#cfe4f4_42%)]">

  <!-- navbar -->
  <nav class="glass relative z-20 mx-auto mt-5 flex w-[92%] max-w-7xl flex-wrap items-center justify-between gap-5 rounded-2xl px-6 py-4 md:w-[94%] md:flex-nowrap md:rounded-full md:px-10">
    <a href="/home" class="shrink-0 text-2xl font-bold tracking-tight text-white md:text-3xl">
      <span class="text-blue-500">Ke</span>lana
    </a>

    <div class="mobile-menu flex items-center gap-5 text-sm font-medium text-white/90 md:gap-8 md:text-base lg:gap-12">
      <a href="/home" class="transition hover:text-white">Beranda</a>
      <a href="/tentang" class="transition hover:text-white">Tentang Kami</a>
      <a href="/destinasi" class="transition hover:text-white">Destinasi</a>
      <a href="/blog" class="transition hover:text-white">Blog</a>
    </div>

    <a href="/no/login" class="shrink-0 rounded-full bg-blue-500 px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-600 md:px-7 md:text-base">
      Masuk
    </a>
  </nav>

  <main class="mx-auto w-[92%] max-w-3xl pb-20 pt-12 md:pt-16">

    <a href="/blog" class="inline-flex items-center gap-2 text-sm font-semibold text-white/90 transition hover:text-white">
      ← Kembali ke Blog
    </a>

    <header class="mt-6">
      <span class="inline-block rounded-full bg-blue-500 px-5 py-1 text-sm font-semibold text-white">
        {{ $news->newsCategory->title }}
      </span>

      <h1 id="judul" class="mt-4 text-3xl font-bold leading-tight text-white md:text-5xl">
        {{ $news->title }}
      </h1>

      <p class="mt-3 text-sm text-white/80">
        {{ $news->author->name }} • {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}
      </p>
    </header>

    <article class="mt-8 rounded-2xl bg-white p-5 shadow-lg md:p-8">
      <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}"
           class="mb-6 aspect-video w-full rounded-xl object-cover">

      <!-- tombol baca -->
      <div class="mb-6 flex gap-3">
        <button id="btnBaca" type="button"
                class="rounded-full bg-blue-500 px-5 py-2 text-sm font-semibold text-white transition hover:bg-blue-600">
          🔊 Bacakan
        </button>
        <button id="btnStop" type="button"
                class="rounded-full bg-kelana-ink/80 px-5 py-2 text-sm font-semibold text-white transition hover:bg-kelana-ink">
          ⏹ Stop
        </button>
      </div>

      <!-- isi berita -->
      <div id="isiBerita" class="space-y-4 text-base leading-8 text-kelana-ink">
        {!! $news->content !!}
      </div>
    </article>

  </main>

  <!-- footer -->
  <footer class="bg-[#102e3b] px-6 py-12 text-slate-300 sm:px-10 md:px-16 md:py-16 lg:px-24">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-4 md:gap-12">
      <div>
        <a href="/home" class="text-3xl font-bold text-white"><span class="text-blue-500">Ke</span>lana</a>
        <p class="mt-5 max-w-xs text-sm leading-7 text-slate-400">
          Menemani perjalananmu menemukan keindahan, budaya, dan cerita di seluruh Indonesia.
        </p>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">Jelajahi</h3>
        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="/destinasi">Destinasi</a>
          <a class="transition hover:text-white" href="/destinasi">Rute & Harga</a>
          <a class="transition hover:text-white" href="/destinasi">Tips Liburan</a>
          <a class="transition hover:text-white" href="/blog">Inspirasi</a>
        </div>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">Perusahaan</h3>
        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="/tentang">Tentang Kami</a>
          <a class="transition hover:text-white" href="/tentang">Cerita Kami</a>
          <a class="transition hover:text-white" href="/tentang">Karier</a>
        </div>
      </div>

      <div>
        <h3 class="mb-5 text-base font-bold text-white">Hubungi Kami</h3>
        <div class="flex flex-col gap-4 text-sm">
          <a class="transition hover:text-white" href="mailto:halo@kelana.id">halo@kelana.id</a>
          <a class="transition hover:text-white" href="/blog">Instagram</a>
          <a class="transition hover:text-white" href="/blog">TikTok</a>
        </div>
      </div>
    </div>

    <div class="mx-auto mt-12 flex max-w-7xl flex-col gap-4 border-t border-white/15 pt-6 text-xs leading-6 text-slate-400 md:mt-16 md:flex-row md:items-center md:justify-between">
      <p>© 2026 Kelana. Semua hak cipta dilindungi.</p>
      <div class="flex flex-wrap gap-x-6 gap-y-2">
        <a href="/tentang" class="hover:text-white">Syarat dan Ketentuan</a>
        <a href="/tentang" class="hover:text-white">Kebijakan Privasi</a>
      </div>
    </div>
  </footer>

  <script>
    const judul = @json($news->title);
    const isi = document.getElementById('isiBerita').innerText;

    document.getElementById('btnBaca').onclick = () => {
      if (!('speechSynthesis' in window)) {
        alert('Browser tidak mendukung fitur baca suara.');
        return;
      }
      speechSynthesis.cancel();
      const u = new SpeechSynthesisUtterance(judul + '. ' + isi);
      u.lang = 'id-ID';
      u.rate = 0.95;
      speechSynthesis.speak(u);
    };

    document.getElementById('btnStop').onclick = () => speechSynthesis.cancel();
    window.addEventListener('beforeunload', () => speechSynthesis.cancel());
  </script>

</body>
</html>