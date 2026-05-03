<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title>Home - Kelompok 1</title>
    <style>
        body { background-color: #0f1117; color: #ffffff; font-family: 'Inter', sans-serif; }

        .hero-section {
            min-height: 90vh;
            background: linear-gradient(135deg, #0f1117 0%, #1a1d2e 50%, #0f1117 100%);
            display: flex;
            align-items: center;
            padding: 80px 20px;
        }
        .hero-badge {
            background: rgba(99,102,241,0.2);
            border: 1px solid rgba(99,102,241,0.4);
            color: #818cf8;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: inline-block;
            margin-bottom: 20px;
        }
        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        .hero-title span {
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-desc {
            color: #9ca3af;
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 35px;
            max-width: 500px;
        }
        .btn-primary-custom {
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: opacity 0.2s;
        }
        .btn-primary-custom:hover { opacity: 0.85; color: white; }
        .btn-outline-custom {
            background: transparent;
            color: #9ca3af;
            border: 1px solid #374151;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-left: 12px;
            transition: all 0.2s;
        }
        .btn-outline-custom:hover { border-color: #6366f1; color: #818cf8; }
        .stats-card {
            background: #1a1d2e;
            border: 1px solid #2d3148;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
        }
        .stats-number {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .stats-label { color: #6b7280; font-size: 0.85rem; margin-top: 4px; }
        .dark-card {
            background: #1a1d2e;
            border: 1px solid #2d3148;
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: border-color 0.2s, transform 0.2s;
        }
        .dark-card:hover { border-color: #6366f1; transform: translateY(-5px); }
        .feature-icon {
            width: 50px; height: 50px;
            border-radius: 12px;
            background: rgba(99,102,241,0.15);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }
        .member-avatar {
            width: 70px; height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem; font-weight: 800;
            margin: 0 auto 15px;
            color: white;
        }
        .member-badge {
            background: rgba(99,102,241,0.15);
            color: #818cf8;
            border: 1px solid rgba(99,102,241,0.3);
            border-radius: 20px;
            padding: 3px 12px;
            font-size: 0.75rem;
            margin-top: 8px;
            display: inline-block;
        }
        section { padding: 80px 0; }
        .section-title { font-size: 2rem; font-weight: 800; margin-bottom: 10px; }
        .section-sub { color: #6b7280; margin-bottom: 50px; }
        .cta-section {
            background: linear-gradient(135deg, #1a1d2e, #16192b);
            border-top: 1px solid #2d3148;
            border-bottom: 1px solid #2d3148;
            text-align: center;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .row { display: flex; flex-wrap: wrap; margin: -12px; }
        .col { padding: 12px; }
        .col-half { width: 50%; padding: 12px; }
        .col-third { width: 33.333%; padding: 12px; }
        .col-fifth { width: 20%; padding: 12px; }
        @media(max-width: 768px) {
            .col-half, .col-third, .col-fifth { width: 100%; }
            .hero-section { min-height: auto; padding: 40px 20px; }
            .hero-title { font-size: 2rem; }
            section { padding: 40px 0; }
            .btn-outline-custom { margin-left: 0; margin-top: 12px; display: block; text-align: center; }
            .btn-primary-custom { display: block; text-align: center; }
        }
        @media(max-width: 480px) {
            .col-fifth { width: 100%; }
            .hero-title { font-size: 1.75rem; }
        }
    </style>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Logo" class="size-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                                <a href="{{ url('/home') }}" aria-current="page"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
                                <a href="{{ url('/contact') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                                <a href="{{ url('/blog') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                                <a href="{{ url('/about') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button type="button" command="--toggle" commandfor="mobile-menu"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mobile menu --}}
            <el-disclosure id="mobile-menu" hidden class="block md:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="{{ route('home') }}" aria-current="page"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
                    <a href="{{ route('about') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                    <a href="{{ route('blog') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                    <a href="{{ route('profile') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                </div>
            </el-disclosure>
        </nav>

        {{-- HERO --}}
        <section class="hero-section">
            <div class="container">
                <div class="row" style="align-items:center;">
                    <div class="col-half">
                        <h1 class="hero-title">
                            Selamat Datang di<br>
                            <span>Tim Kelompok I (4A)</span>
                        </h1>
                        <p style="color: #9ca3af; font-size: 0.875rem; margin-top: -10px; margin-bottom: 20px;">
                            Semester 4 Kelas TI C
                        </p>
                        <p class="hero-desc">
                            Kami adalah tim mahasiswa yang bersemangat belajar dan berkarya di bidang teknologi informasi. Bersama kami, belajar jadi lebih seru!
                        </p>
                         <p class="hero-desc">
                            KAMI MEMBANGUN SOLUSI DIGITAL YANG BERMAKNA
                        </p>
                        <a href="{{ route('blog') }}" class="btn-primary-custom">Baca Blog →</a>
                        <a href="{{ route('about') }}" class="btn-outline-custom">Tentang Kami</a>

                        <div class="row" style="margin-top:24px;">
                            <div class="col" style="width:33.333%">
                                <div class="stats-card">
                                    <div class="stats-number">4</div>
                                    <div class="stats-label">Anggota</div>
                                </div>
                            </div>
                            <div class="col" style="width:33.333%">
                                <div class="stats-card">
                                    <div class="stats-number">4</div>
                                    <div class="stats-label">Artikel</div>
                                </div>
                            </div>
                            <div class="col" style="width:33.333%">
                                <div class="stats-card">
                                    <div class="stats-number">1</div>
                                    <div class="stats-label">Project</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-half">
                        <div class="dark-card">
                            <div style="color:#6b7280; font-size:0.8rem; margin-bottom:12px;">📁 laravel13-kelompok1</div>
                            <div style="font-family:monospace; font-size:0.9rem; line-height:2.2;">
                                <span style="color:#6b7280;">01</span>&nbsp;&nbsp;<span style="color:#818cf8;">Route</span><span style="color:#fff;">::get(</span><span style="color:#34d399;">'/'</span><span style="color:#fff;">, fn() =></span><br>
                                <span style="color:#6b7280;">02</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#fff;">view(</span><span style="color:#34d399;">'home'</span><span style="color:#fff;">));</span><br>
                                <span style="color:#6b7280;">03</span><br>
                                <span style="color:#6b7280;">04</span>&nbsp;&nbsp;<span style="color:#818cf8;">Route</span><span style="color:#fff;">::get(</span><span style="color:#34d399;">'/blog'</span><span style="color:#fff;">,</span><br>
                                <span style="color:#6b7280;">05</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#fff;">[PageController::</span><span style="color:#f472b6;">class</span><span style="color:#fff;">,</span><br>
                                <span style="color:#6b7280;">06</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#34d399;">'blog'</span><span style="color:#fff;">]);</span><br>
                                <span style="color:#6b7280;">07</span><br>
                                <span style="color:#6b7280;">08</span>&nbsp;&nbsp;<span style="color:#6b7280;">// Server running... ✓</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FITUR --}}
        <section style="background:#0f1117; padding:80px 0;">
            <div class="container"> 
                <div style="text-align:center;">
                    <h2 class="section-title">Apa yang Kami Hadirkan</h2>
                    <p class="section-sub">Konten berkualitas dari mahasiswa untuk mahasiswa</p>
                </div>
                <div class="row">
                    <div class="col-third">
                        <div class="dark-card">
                            <div class="feature-icon">📝</div>
                            <div style="font-weight:700; margin-bottom:10px;">Blog Teknologi</div>
                            <div style="color:#6b7280; font-size:0.9rem; line-height:1.7;">Artikel seputar coding, tips developer, dan teknologi terkini yang mudah dipahami.</div>
                        </div>
                    </div>
                    <div class="col-third">
                        <div class="dark-card">
                            <div class="feature-icon">👥</div>
                            <div style="font-weight:700; margin-bottom:10px;">Tim Solid</div>
                            <div style="color:#6b7280; font-size:0.9rem; line-height:1.7;">Lima anggota dengan keahlian berbeda yang saling melengkapi dan bekerja sama.</div>
                        </div>
                    </div>
                    <div class="col-third">
                        <div class="dark-card">
                            <div class="feature-icon">🚀</div>
                            <div style="font-weight:700; margin-bottom:10px;">Project Nyata</div>
                            <div style="color:#6b7280; font-size:0.9rem; line-height:1.7;">Tidak hanya teori — kami belajar sambil membangun project yang bisa dipakai langsung.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.footer')

    </div>{{-- end min-h-full --}}

</body>
</html>