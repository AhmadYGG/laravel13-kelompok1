<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>About - Kelompok 1</title>
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
                                <a href="{{ url('/contact') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                                <a href="{{ url('/blog') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                                <a href="{{ url('/about') }}" aria-current="page"
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
                    <a href="{{ url('/contact') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                    <a href="{{ url('/blog') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
                    <a href="{{ url('/about') }}" aria-current="page"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">About</a>
                </div>
                <div class="border-t border-white/10 pt-4 pb-3">
                    <div class="mt-3 space-y-1 px-2">
                    </div>
                </div>
            </el-disclosure>
        </nav>

        <header class="relative bg-gradient-to-r from-indigo-600 to-purple-600">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
                <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white">Tentang Kami</h1>
                <p class="mt-2 text-lg text-indigo-100">Kenali lebih dekat tim di balik proyek ini</p>
            </div>
        </header>

        <!-- ABOUT CONTENT -->
        <main class="px-4 sm:px-6 lg:px-8 py-24">
            <div class="mx-auto max-w-7xl">
                
                <!-- Daftar Anggota Tim -->
                <div class="space-y-6">
                    @foreach($anggota as $index => $member)
                    <!-- Member {{ $index + 1 }} -->
                    <div class="bg-gray-800/60 border border-white/8 rounded-2xl p-6 flex flex-col md:flex-row items-start md:items-center gap-6
                        @if($index % 2 == 1) md:flex-row-reverse @endif">
                        
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

                        <!-- Info Anggota -->
                        <div class="flex-1 @if($index % 2 == 1) md:text-right @endif">
                            <h3 class="text-xl font-semibold text-white mb-1">{{ $member['nama'] }}</h3>
                            <p class="text-sm text-gray-500 mb-2">NIM: {{ $member['nim'] }}</p>
                            <p class="text-sm font-semibold mb-2
                                @if($index == 0) text-indigo-400
                                @elseif($index == 1) text-purple-400
                                @elseif($index == 2) text-pink-400
                                @else text-blue-400
                                @endif">
                                {{ $member['peran'] }}
                            </p>
                            <p class="text-sm text-gray-400">{{ $member['deskripsi'] }}</p>
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
