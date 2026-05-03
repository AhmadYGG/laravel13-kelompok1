<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Contact - Kelompok 1</title>
</head>

<body class="bg-gray-900 text-white">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company" class="size-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ url('/home') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
                                <a href="{{ url('/contact') }}" aria-current="page"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                                <a href="{{ url('/blog') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                                <a href="{{ url('/about') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" command="--toggle" commandfor="mobile-menu"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <el-disclosure id="mobile-menu" hidden class="block md:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="{{ url('/home') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
                    <a href="{{ url('/contact') }}" aria-current="page"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Contact</a>
                    <a href="{{ url('/blog') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                    <a href="{{ url('/about') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                </div>
                <div class="border-t border-white/10 pt-4 pb-3">
                    <div class="mt-3 space-y-1 px-2">
                    </div>
                </div>
            </el-disclosure>
        </nav>

        <header class="relative bg-gradient-to-r from-indigo-600 to-purple-600">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
                <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white">Hubungi Kami</h1>
                <p class="mt-2 text-lg text-indigo-100">Ada pertanyaan, masukan, atau ingin berkolaborasi? Kami terbuka untuk diskusi dan peluang baru.</p>
            </div>
        </header>

        <!-- CONTACT CONTENT -->
        <main class="px-4 sm:px-6 lg:px-8 py-24">
            <div class="mx-auto max-w-7xl">
                
                <!-- Daftar Kontak Anggota -->
                <div class="space-y-6">
                    @foreach($anggota as $index => $member)
                    <!-- Contact Member {{ $index + 1 }} -->
                    <div class="bg-gray-800/60 border border-white/8 rounded-2xl p-6 flex flex-col md:flex-row items-start md:items-center gap-6">
                        
                        <!-- Foto Profil -->
                        <div class="w-20 h-20 flex-shrink-0 rounded-full overflow-hidden border-2
                            @if($index == 0) border-indigo-500
                            @elseif($index == 1) border-purple-500
                            @elseif($index == 2) border-pink-500
                            @else border-blue-500
                            @endif">
                            <img src="{{ str_starts_with($member['foto_profil'], 'http') ? $member['foto_profil'] : asset($member['foto_profil']) }}" 
                                 alt="{{ $member['nama'] }}" 
                                 class="w-full h-full object-cover">
                        </div>

                        <!-- Info Kontak -->
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-white mb-1">{{ $member['nama'] }}</h3>
                            <p class="text-sm text-gray-500 mb-4">NIM: {{ $member['nim'] }}</p>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <!-- Instagram -->
                                <a href="{{ $member['instagram'] }}" target="_blank" 
                                   class="flex items-center gap-3 text-sm text-gray-300 hover:text-pink-400 transition-colors">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                    <span>Instagram</span>
                                </a>

                                <!-- GitHub -->
                                <a href="{{ $member['github'] }}" target="_blank" 
                                   class="flex items-center gap-3 text-sm text-gray-300 hover:text-indigo-400 transition-colors">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                    </svg>
                                    <span>GitHub</span>
                                </a>

                                <!-- Email -->
                                <a href="mailto:{{ $member['email'] }}" 
                                   class="flex items-center gap-3 text-sm text-gray-300 hover:text-blue-400 transition-colors">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                                    </svg>
                                    <span>{{ $member['email'] }}</span>
                                </a>

                                <!-- Alamat -->
                                <div class="flex items-center gap-3 text-sm text-gray-300">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span>{{ $member['alamat'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
