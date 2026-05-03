<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>{{ $blog['title'] }} - Blog Kelompok 1</title>
    <style>
        .blog-content h2 {
            font-size: 1.875rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: white;
        }

        .blog-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            color: #e5e7eb;
        }

        .blog-content p {
            margin-bottom: 1rem;
            line-height: 1.75;
            color: #d1d5db;
        }

        .blog-content ul,
        .blog-content ol {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            color: #d1d5db;
        }

        .blog-content ul {
            list-style-type: disc;
        }

        .blog-content ol {
            list-style-type: decimal;
        }

        .blog-content li {
            margin-bottom: 0.5rem;
            line-height: 1.75;
        }

        .blog-content pre {
            background-color: #1f2937;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
            overflow-x: auto;
        }

        .blog-content code {
            color: #a78bfa;
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
        }

        .blog-content strong {
            color: white;
            font-weight: 600;
        }
    </style>
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

        <!-- BLOG DETAIL -->
        <article class="border-t border-white/6 px-4 sm:px-6 lg:px-8 py-24">
            <div class="mx-auto max-w-4xl">
                <!-- Back Button -->
                <a href="{{ url('/blog') }}"
                    class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-wider text-gray-400 hover:text-white transition-colors mb-8">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali ke Blog
                </a>

                <!-- Header -->
                <div class="mb-12">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="font-mono text-xs uppercase tracking-wider text-{{ $blog['category_color'] }}-400 bg-{{ $blog['category_color'] }}-400/10 border border-{{ $blog['category_color'] }}-400/20 px-3 py-1 rounded">
                            {{ $blog['category'] }}
                        </span>
                        <span class="font-mono text-xs text-gray-500">{{ $blog['published_at'] }}</span>
                        <span class="text-gray-600">•</span>
                        <span class="font-mono text-xs text-indigo-400">{{ $blog['author'] }}</span>
                    </div>

                    <h1 class="font-bold text-4xl sm:text-5xl lg:text-6xl tracking-tight mb-6 leading-tight">
                        {{ $blog['title'] }}
                    </h1>

                    <p class="text-xl text-gray-400 leading-relaxed">
                        {{ $blog['excerpt'] }}
                    </p>
                </div>

                <!-- Featured Image/Icon -->
                <div class="mb-12 h-64 sm:h-80 rounded-2xl bg-gradient-to-br {{ $blog['gradient'] }} flex items-center justify-center border border-white/10 overflow-hidden">
                    @if(isset($blog['is_image']) && $blog['is_image'])
                        <img src="{{ $blog['icon'] }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-8xl sm:text-9xl">{{ $blog['icon'] }}</span>
                    @endif
                </div>

                <!-- Content -->
                <div class="blog-content prose prose-invert max-w-none">
                    {!! $blog['content'] !!}
                </div>

                <!-- Footer -->
                <div class="mt-16 pt-8 border-t border-white/10">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div>
                            <p class="font-mono text-xs uppercase tracking-wider text-gray-500 mb-2">Bagikan Artikel</p>
                            <div class="flex gap-3">
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <a href="{{ url('/blog') }}"
                            class="font-mono text-xs uppercase tracking-wider border border-white/10 text-gray-400 hover:text-white hover:border-white/20 px-5 py-2.5 transition-all">
                            Artikel Lainnya →
                        </a>
                    </div>
                </div>
            </div>
        </article>

        @include('partials.footer')
    </div>
</body>

</html>
