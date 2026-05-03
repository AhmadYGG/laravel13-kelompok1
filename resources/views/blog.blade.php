<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Blog - Kelompok 1</title>
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
                                <a href="{{ url('/blog') }}" aria-current="page"
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
                    <a href="{{ url('/contact') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
                    <a href="{{ url('/blog') }}" aria-current="page"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Blog</a>
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
                <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white">Tulisan Terbaru</h1>
                <p class="mt-2 text-lg text-indigo-100">Artikel dan tutorial seputar teknologi dan programming</p>
            </div>
        </header>
        <!-- BLOG -->
        <section id="blog" class="px-4 sm:px-6 lg:px-8 py-24">
            <div class="mx-auto max-w-7xl">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach ($blogs as $blog)
                        <div class="blog-card card-hover bg-gray-800/60 border border-white/8 overflow-hidden flex flex-col cursor-pointer transition-all hover:border-white/20 hover:-translate-y-1">
                            <div class="h-44 overflow-hidden relative bg-gradient-to-br {{ $blog['gradient'] }} flex items-center justify-center">
                                @if(isset($blog['is_image']) && $blog['is_image'])
                                    <img src="{{ $blog['icon'] }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover">
                                @else
                                    <span class="blog-img text-5xl select-none">{{ $blog['icon'] }}</span>
                                @endif
                                <span class="absolute top-3 left-3 font-mono text-xs uppercase tracking-wider text-{{ $blog['category_color'] }}-400 bg-black/50 backdrop-blur-sm border border-white/10 px-2.5 py-1">
                                    {{ $blog['category'] }}
                                </span>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <p class="font-mono text-xs text-gray-500">{{ $blog['published_at'] }}</p>
                                    <span class="text-gray-600">•</span>
                                    <p class="font-mono text-xs text-indigo-400">{{ $blog['author'] }}</p>
                                </div>
                                <h3 class="font-bold text-white leading-snug mb-3 flex-1">{{ $blog['title'] }}</h3>
                                <p class="text-sm text-gray-400 leading-relaxed mb-5">{{ $blog['excerpt'] }}</p>
                                <a href="{{ url('/blog/' . $blog['slug']) }}"
                                    class="font-mono text-xs uppercase tracking-wider text-indigo-400 hover:text-indigo-300 transition-colors">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('partials.footer')
    </div>
</body>

</html>
