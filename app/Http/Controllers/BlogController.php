<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getBlogData()
    {
        return [
            [
                'id' => 1,
                'slug' => 'autentikasi-jwt-laravel',
                'title' => 'Autentikasi JWT di Laravel: Panduan Lengkap dari Nol',
                'author' => 'Muhammad Aziz',
                'category' => 'Backend',
                'category_color' => 'cyan',
                'icon' => 'https://beecrowd.com/wp-content/uploads/2024/04/2022-08-23-JWT.jpg',
                'is_image' => true,
                'gradient' => 'from-[#1a1a2e] to-[#16213e]',
                'excerpt' => 'Memahami cara kerja JSON Web Token dan implementasinya di Laravel 11 untuk API yang aman dan scalable.',
                'published_at' => '24 Oktober 2024',
                'content' => '<h2>Pengenalan JWT</h2>
                <p>JSON Web Token (JWT) adalah standar terbuka (RFC 7519) yang mendefinisikan cara kompak dan mandiri untuk transmisi informasi secara aman antara pihak-pihak sebagai objek JSON.</p>
                
                <h3>Mengapa Menggunakan JWT?</h3>
                <ul>
                    <li>Stateless - Server tidak perlu menyimpan session</li>
                    <li>Scalable - Mudah untuk di-scale horizontal</li>
                    <li>Secure - Data ter-enkripsi dan ter-sign</li>
                    <li>Cross-domain - Dapat digunakan di berbagai domain</li>
                </ul>
                
                <h3>Struktur JWT</h3>
                <p>JWT terdiri dari tiga bagian yang dipisahkan oleh titik (.):</p>
                <ol>
                    <li><strong>Header</strong> - Berisi tipe token dan algoritma hashing</li>
                    <li><strong>Payload</strong> - Berisi claims (data user)</li>
                    <li><strong>Signature</strong> - Untuk verifikasi token</li>
                </ol>
                
                <h3>Implementasi di Laravel</h3>
                <p>Untuk mengimplementasikan JWT di Laravel, kita akan menggunakan package tymon/jwt-auth. Berikut langkah-langkahnya:</p>
                
                <pre><code>composer require tymon/jwt-auth</code></pre>
                
                <p>Setelah itu, publish konfigurasi dan generate secret key:</p>
                
                <pre><code>php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret</code></pre>
                
                <h3>Membuat Authentication Controller</h3>
                <p>Buat controller untuk handle login, register, dan logout dengan JWT token.</p>
                
                <h3>Kesimpulan</h3>
                <p>JWT adalah solusi yang powerful untuk autentikasi API modern. Dengan Laravel, implementasinya menjadi sangat mudah dan straightforward.</p>'
            ],
            [
                'id' => 2,
                'slug' => 'go-goroutines-concurrency',
                'title' => 'Kenapa Go Lebih Cepat? Goroutines dan Concurrency Explained',
                'author' => 'Agus Alvianto',
                'category' => 'Go Lang',
                'category_color' => 'green',
                'icon' => 'https://cdn.prod.website-files.com/6100d0111a4ed76bc1b9fd54/62217e885f52b860da9f00cc_Apa%20Itu%20Golang%3F%20Apa%20Saja%20Fungsi%20Dan%20Keunggulannya%20-%20Binar%20Academy.jpeg',
                'is_image' => true,
                'gradient' => 'from-[#1a2e1a] to-[#162116]',
                'excerpt' => 'Eksplorasi mendalam tentang model concurrency Go dan perbandingannya dengan threading tradisional di bahasa lain.',
                'published_at' => '10 November 2024',
                'content' => '<h2>Apa itu Goroutines?</h2>
                <p>Goroutines adalah fungsi atau method yang berjalan secara concurrent dengan fungsi atau method lainnya. Goroutines sangat ringan, hanya membutuhkan sekitar 2KB memory untuk memulai.</p>
                
                <h3>Perbedaan dengan Thread Tradisional</h3>
                <ul>
                    <li><strong>Memory Footprint</strong> - Goroutine: ~2KB, Thread: ~1-2MB</li>
                    <li><strong>Startup Time</strong> - Goroutine jauh lebih cepat</li>
                    <li><strong>Context Switching</strong> - Goroutine lebih efisien</li>
                    <li><strong>Scheduling</strong> - Go runtime scheduler vs OS scheduler</li>
                </ul>
                
                <h3>Cara Kerja Goroutines</h3>
                <p>Go menggunakan model M:N scheduling, dimana M goroutines di-map ke N OS threads. Go runtime scheduler mengelola goroutines secara efisien.</p>
                
                <h3>Contoh Penggunaan</h3>
                <pre><code>func main() {
    go sayHello() // Jalankan sebagai goroutine
    time.Sleep(1 * time.Second)
}

func sayHello() {
    fmt.Println("Hello from goroutine!")
}</code></pre>
                
                <h3>Channels untuk Komunikasi</h3>
                <p>Channels adalah cara goroutines berkomunikasi satu sama lain. Ini mengikuti prinsip "Don\'t communicate by sharing memory; share memory by communicating".</p>
                
                <pre><code>ch := make(chan string)

go func() {
    ch <- "Hello"
}()

msg := <-ch
fmt.Println(msg)</code></pre>
                
                <h3>Best Practices</h3>
                <ul>
                    <li>Selalu handle goroutine leaks</li>
                    <li>Gunakan context untuk cancellation</li>
                    <li>Jangan share memory tanpa synchronization</li>
                    <li>Gunakan channels untuk komunikasi</li>
                </ul>
                
                <h3>Kesimpulan</h3>
                <p>Goroutines membuat Go sangat efisien untuk concurrent programming. Dengan overhead yang minimal dan API yang simple, Go menjadi pilihan tepat untuk aplikasi yang membutuhkan high concurrency.</p>'
            ],
            [
                'id' => 3,
                'slug' => 'css-modern-2024',
                'title' => 'CSS Modern 2024: Container Queries, :has(), dan Has-Selector',
                'author' => 'Andika Bayu Pratama',
                'category' => 'Frontend',
                'category_color' => 'rose',
                'icon' => 'https://budiharyono.id/wp-content/uploads/2023/12/css.webp',
                'is_image' => true,
                'gradient' => 'from-[#2e1a1a] to-[#211616]',
                'excerpt' => 'Fitur-fitur CSS terbaru yang mengubah cara kita berpikir tentang layout dan styling komponen yang responsif.',
                'published_at' => '18 November 2024',
                'content' => '<h2>CSS Modern di 2024</h2>
                <p>CSS terus berkembang dengan fitur-fitur baru yang powerful. Mari kita eksplorasi tiga fitur game-changer di 2024.</p>
                
                <h3>1. Container Queries</h3>
                <p>Container queries memungkinkan kita membuat komponen yang responsive berdasarkan ukuran container-nya, bukan viewport.</p>
                
                <pre><code>.card-container {
    container-type: inline-size;
    container-name: card;
}

@container card (min-width: 400px) {
    .card {
        display: grid;
        grid-template-columns: 1fr 2fr;
    }
}</code></pre>
                
                <h3>Keuntungan Container Queries</h3>
                <ul>
                    <li>Komponen lebih reusable</li>
                    <li>Tidak bergantung pada viewport size</li>
                    <li>Perfect untuk component-based architecture</li>
                    <li>Lebih maintainable</li>
                </ul>
                
                <h3>2. :has() Selector</h3>
                <p>Selector :has() adalah "parent selector" yang sudah lama ditunggu-tunggu. Dengan :has(), kita bisa style parent berdasarkan child-nya.</p>
                
                <pre><code>/* Style form yang memiliki error */
.form:has(.error) {
    border-color: red;
}

/* Style card yang memiliki image */
.card:has(img) {
    padding: 0;
}</code></pre>
                
                <h3>Use Cases :has()</h3>
                <ul>
                    <li>Form validation styling</li>
                    <li>Conditional layouts</li>
                    <li>Dynamic component states</li>
                    <li>Accessibility improvements</li>
                </ul>
                
                <h3>3. Logical Properties</h3>
                <p>Logical properties membuat CSS lebih adaptif untuk berbagai writing modes (LTR, RTL, vertical).</p>
                
                <pre><code>/* Old way */
margin-left: 1rem;
margin-right: 2rem;

/* New way */
margin-inline-start: 1rem;
margin-inline-end: 2rem;</code></pre>
                
                <h3>Fitur Modern Lainnya</h3>
                <ul>
                    <li><strong>Cascade Layers</strong> - Kontrol specificity lebih baik</li>
                    <li><strong>Subgrid</strong> - Grid yang lebih flexible</li>
                    <li><strong>Color Functions</strong> - color-mix(), oklch()</li>
                    <li><strong>Scroll-driven Animations</strong> - Animasi based on scroll</li>
                </ul>
                
                <h3>Browser Support</h3>
                <p>Sebagian besar fitur modern CSS sudah didukung oleh browser modern. Selalu cek caniuse.com untuk compatibility.</p>
                
                <h3>Kesimpulan</h3>
                <p>CSS modern memberikan kita tools yang powerful untuk membuat web yang lebih responsive, maintainable, dan accessible. Saatnya upgrade skill CSS Anda!</p>'
            ]
        ];
    }

    public function index()
    {
        $blogs = $this->getBlogData();
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blogs = $this->getBlogData();
        $blog = collect($blogs)->firstWhere('slug', $slug);

        if (!$blog) {
            abort(404);
        }

        return view('blog-detail', compact('blog'));
    }
}
