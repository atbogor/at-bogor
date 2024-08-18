<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'Testuser',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create(
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]
        );

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature',
        ]);

        Category::create([
            'name' => 'History',
            'slug' => 'history',
        ]);

        Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        Post::factory(70)->create();

        TicketCategory::create([
            'name' => "Nature",
            "slug" => "nature",
        ]);

        TicketCategory::create([
            'name' => "Entertainment",
            "slug" => "entertainment",
        ]);

        TicketCategory::create([
            'name' => "History",
            "slug" => "history",
        ]);

        // Ticket::factory(10)->create();

        Testimonial::create([
            "testimonial_content" => "Aplikasi @Bogor sangat membantu saya dalam merencanakan liburan ke Bogor. Semua informasi wisata tersedia lengkap!",
            "slug" => "aplikasi-bogor-sangat-membantu",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Pembelian tiket jadi lebih mudah dan cepat. Tidak perlu antre lagi di lokasi wisata. Sangat direkomendasikan!",
            "slug" => "pembelian-tiket-mudah",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Galeri foto di @Bogor sangat memukau. Banyak inspirasi tempat wisata baru yang belum pernah saya kunjungi.",
            "slug" => "galeri-foto-memukau",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Blog @Bogor informatif banget! Banyak tips perjalanan yang sangat bermanfaat.",
            "slug" => "blog-informatif",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Harga tiket yang ditawarkan sangat bersaing, bahkan ada beberapa promo menarik. Hemat banget!",
            "slug" => "harga-tiket-bersaing",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Aplikasi ini membuat saya lebih mudah menemukan tempat wisata yang sesuai dengan keinginan. Fitur pencariannya keren!",
            "slug" => "fitur-pencarian-keren",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Saya suka dengan tampilan antarmuka @Bogor yang user-friendly. Sangat nyaman digunakan.",
            "slug" => "tampilan-user-friendly",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Sudah beberapa kali pakai @Bogor untuk beli tiket, semuanya berjalan lancar. Tidak ada kendala berarti.",
            "slug" => "pengalaman-tiket-lancar",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Rekomendasi tempat wisata dari @Bogor sangat akurat. Tempat-tempat yang direkomendasikan memang bagus dan layak dikunjungi.",
            "slug" => "rekomendasi-akurat",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Saya menemukan banyak hidden gems di Bogor berkat @Bogor. Aplikasinya sangat membantu dalam mengeksplorasi tempat baru.",
            "slug" => "temukan-hidden-gems",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Blog dan artikel di @Bogor sangat menarik untuk dibaca sebelum melakukan perjalanan. Informasinya sangat detail.",
            "slug" => "blog-dan-artikel-menarik",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Aplikasi ini benar-benar all-in-one. Saya bisa pesan tiket, lihat galeri foto, dan baca tips perjalanan dalam satu aplikasi.",
            "slug" => "aplikasi-all-in-one",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Senang sekali dengan fitur peta wisata di @Bogor. Sangat memudahkan saat mencari lokasi wisata di Bogor.",
            "slug" => "fitur-peta-wisata",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Aplikasi ini memudahkan saya dalam mengatur jadwal perjalanan di Bogor. Semua informasi sudah tersedia di satu tempat.",
            "slug" => "atur-jadwal-perjalanan",
            "user_id" => mt_rand(1, 10)
        ]);

        Testimonial::create([
            "testimonial_content" => "Saya sangat puas dengan layanan @Bogor. Semoga terus berkembang dan menambah lebih banyak fitur menarik.",
            "slug" => "layanan-puas",
            "user_id" => mt_rand(1, 10)
        ]);


        Gallery::create([
            'title' => 'Kebun Raya Bogor',
            'slug' => 'kebun-raya-bogor',
            'image' => 'ticket-images/kebun-raya.png',
            'user_id' => 1,
        ]);

        Gallery::create([
            'title' => 'Taman Safari Indonesia',
            'slug' => 'taman-safari-indonesia',
            'image' => 'ticket-images/Taman Wisata Matahari.png',
            'user_id' => 2,
        ]);

        Gallery::create([
            'title' => 'Puncak',
            'slug' => 'puncak',
            'image' => 'ticket-images/puncakpass.png',
            'user_id' => 3,
        ]);

        Gallery::create([
            'title' => 'Curug Cilember',
            'slug' => 'curug-cilember',
            'image' => 'ticket-images/curug_cilember.png',
            'user_id' => 4,
        ]);

        Gallery::create([
            'title' => 'Curug Bidadari',
            'slug' => 'curug-bidadari',
            'image' => 'ticket-images/curug_bidadari.png',
            'user_id' => 5,
        ]);

        Gallery::create([
            'title' => 'De\'Ranch',
            'slug' => 'de-ranch',
            'image' => 'ticket-images/deranch.png',
            'user_id' => 6,
        ]);

        Gallery::create([
            'title' => 'Kampung Warna-Warni',
            'slug' => 'kampung-warna-warni',
            'image' => 'ticket-images/kampungwarna.png',
            'user_id' => 7,
        ]);

        Gallery::create([
            'title' => 'Puncak Pass',
            'slug' => 'puncak-pass',
            'image' => 'ticket-images/puncakpass.png',
            'user_id' => 8,
        ]);

        Gallery::create([
            'title' => 'Gunung Salak',
            'slug' => 'gunung-salak',
            'image' => 'ticket-images/curug_bidadari.png',
            'user_id' => 9,
        ]);

        Gallery::create([
            'title' => 'Taman Wisata Matahari',
            'slug' => 'taman-wisata-matahari',
            'image' => 'ticket-images/Taman Wisata Matahari.png',
            'user_id' => 10,
        ]);

        Gallery::create([
            'title' => 'Bogor Botanical Gardens',
            'slug' => 'bogor-botanical-gardens',
            'image' => 'ticket-images/bogor-botanical.png',
            'user_id' => 1,
        ]);

        Gallery::create([
            'title' => 'Pura Parahyangan Agung Jagatkartta',
            'slug' => 'pura-parahyangan-agung-jagatkartta',
            'image' => 'ticket-images/pura-parahyangan.png',
            'user_id' => 2,
        ]);

        Gallery::create([
            'title' => 'The Jungle Waterpark',
            'slug' => 'the-jungle-waterpark',
            'image' => 'ticket-images/the_jungle_waterpark.png',
            'user_id' => 3,
        ]);

        Gallery::create([
            'title' => 'Kampung Budaya Sindangbarang',
            'slug' => 'kampung-budaya-sindangbarang',
            'image' => 'ticket-images/Kampung Budaya Sindangbarang.png',
            'user_id' => 4,
        ]);

        Gallery::create([
            'title' => 'Taman Nasional Gunung Gede Pangrango',
            'slug' => 'taman-nasional-gunung-gede-pangrango',
            'image' => 'ticket-images/Taman Wisata Matahari.png',
            'user_id' => 5,
        ]);





        Ticket::create([
            "title" => "Kebun Raya Bogor",
            "slug" => "kebun-raya-bogor",
            "price" => 15000,
            "location" => "Bogor",
            "description" => "Taman botani seluas 87 hektar yang memiliki koleksi tanaman langka dan sejarah yang panjang. Ideal untuk piknik dan jalan-jalan santai.",
            "category_id" => 1,
            "image" => "ticket-images/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Taman Safari Indonesia",
            "slug" => "taman-safari-indonesia",
            "price" => 300000,
            "location" => "Bogor",
            "description" => "Kebun binatang yang menawarkan pengalaman melihat berbagai satwa liar dari dalam mobil. Ada juga wahana hiburan dan pertunjukan.",
            "category_id" => 3,
            "image" => "ticket-images/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Puncak",
            "slug" => "puncak",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Area pegunungan yang terkenal dengan pemandangan alamnya, kebun teh, dan udara sejuk. Cocok untuk berkemah atau sekadar bersantai.",
            "category_id" => 1,
            "image" => "ticket-images/puncakpass.png"
        ]);

        Ticket::create([
            "title" => "Curug Cilember",
            "slug" => "curug_cilember",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Air terjun yang terletak di tengah hutan tropis dengan trek trekking yang menyenangkan dan pemandangan alam yang indah.",
            "category_id" => 1,
            "image" => "ticket-images/curug_cilember.png"
        ]);

        Ticket::create([
            "title" => "Curug Bidadari",
            "slug" => "curug-bidadari",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Air terjun yang indah dengan kolam di bawahnya, cocok untuk berenang dan menikmati suasana alam.",
            "category_id" => 1,
            "image" => "ticket-images/curug_bidadari.png"
        ]);

        Ticket::create([
            "title" => "De'Ranch",
            "slug" => "de-ranch",
            "price" => 50000,
            "location" => "Bogor",
            "description" => "Tempat wisata keluarga dengan tema peternakan, menawarkan aktivitas berkuda, bermain di area playground, dan mencoba berbagai wahana.",
            "category_id" => 3,
            "image" => "ticket-images/deranch.png"
        ]);

        Ticket::create([
            "title" => "Kampung Warna-Warni",
            "slug" => "kampung-warna-warni",
            "price" => 10000,
            "location" => "Bogor",
            "description" => "Kawasan pemukiman yang telah dicat dengan warna-warni cerah, menawarkan suasana yang Instagramable.",
            "category_id" => 2,
            "image" => "ticket-images/kampungwarna.png"
        ]);

        Ticket::create([
            "title" => "Puncak Pass",
            "slug" => "puncak-pass",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Titik tertinggi di Puncak dengan pemandangan pegunungan yang menakjubkan. Tempat yang bagus untuk makan sambil menikmati lanskap.",
            "category_id" => 1,
            "image" => "ticket-images/puncakpass.png"
        ]);

        Ticket::create([
            "title" => "Gunung Salak",
            "slug" => "gunung-salak",
            "price" => 10000,
            "location" => "Bogor",
            "description" => "Gunung berapi yang menawarkan jalur pendakian dengan pemandangan indah dan udara segar. Cocok untuk para pendaki.",
            "category_id" => 1,
            "image" => "ticket-images/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Taman Wisata Matahari",
            "slug" => "taman-wisata-matahari",
            "price" => 100000,
            "location" => "Bogor",
            "description" => "Taman bermain dengan berbagai wahana untuk anak-anak dan dewasa, termasuk kolam renang dan area bermain.",
            "category_id" => 3,
            "image" => "ticket-images/Taman Wisata Matahari.png"
        ]);

        Ticket::create([
            "title" => "Bogor Botanical Gardens",
            "slug" => "bogor-botanical-gardens",
            "price" => 15000,
            "location" => "Bogor",
            "description" => "Sebuah taman botani dengan berbagai koleksi tanaman dan suasana yang menenangkan.",
            "category_id" => 1,
            "image" => "ticket-images/bogor-botanical.png"
        ]);

        Ticket::create([
            "title" => "Pura Parahyangan Agung Jagatkartta",
            "slug" => "pura-parahyangan-agung-jagatkartta",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Tempat ibadah Hindu Bali yang terletak di kawasan pegunungan. Menawarkan pemandangan yang indah dan suasana spiritual.",
            "category_id" => 2,
            "image" => "ticket-images/pura-parahyangan.png"
        ]);

        Ticket::create([
            "title" => "The Jungle Waterpark",
            "slug" => "the-jungle-waterpark",
            "price" => 150000,
            "location" => "Bogor",
            "description" => "Taman air dengan berbagai wahana air, kolam renang, dan area bermain untuk keluarga. Cocok untuk bersantai dan bersenang-senang.",
            "category_id" => 3,
            "image" => "ticket-images/the_jungle_waterpark.png"
        ]);

        Ticket::create([
            "title" => "Kampung Budaya Sindangbarang",
            "slug" => "kampung-budaya-sindangbarang",
            "price" => 30000,
            "location" => "Bogor",
            "description" => "Desa budaya yang menampilkan kehidupan dan tradisi masyarakat Sunda, termasuk rumah adat, kerajinan tangan, dan pertunjukan budaya.",
            "category_id" => 2,
            "image" => "ticket-images/Kampung Budaya Sindangbarang.png"
        ]);

        Ticket::create([
            "title" => "Taman Nasional Gunung Gede Pangrango",
            "slug" => "taman-nasional-gunung-gede-pangrango",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Taman nasional yang meliputi dua gunung berapi, menawarkan trek pendakian, flora dan fauna yang kaya, serta pemandangan alam yang spektakuler.",
            "category_id" => 1,
            "image" => "ticket-images/kebun-raya.png"
        ]);



        Post::create([
            'title' => 'Menjelajahi Kebun Raya Bogor, Oase Hijau di Tengah Kota',
            'slug' => 'menjelajahi-kebun-raya-bogor-oase-hijau-di-tengah-kota',
            'body' => '<p>Kebun Raya Bogor merupakan destinasi utama bagi para pecinta alam...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Puncak, Destinasi Liburan Keluarga yang Tak Pernah Membosankan',
            'slug' => 'puncak-destinasi-liburan-keluarga-yang-tak-pernah-membosankan',
            'body' => '<p>Puncak adalah kawasan wisata yang sangat populer di kalangan keluarga...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Istana Bogor, Sejarah dan Keindahan Arsitektur Kolonial',
            'slug' => 'istana-bogor-sejarah-dan-keindahan-arsitektur-kolonial',
            'body' => '<p>Istana Bogor, atau yang dikenal juga sebagai Istana Presiden...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Kawah Ratu, Eksplorasi Alam di Kawasan Geologi Menarik',
            'slug' => 'kawah-ratu-eksplorasi-alam-di-kawasan-geologi-menarik',
            'body' => '<p>Kawah Ratu, bagian dari Taman Nasional Gunung Halimun Salak...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Taman Wisata Matahari, Tempat Rekreasi Seru untuk Semua Usia',
            'slug' => 'taman-wisata-matahari-tempat-rekreasi-seru-untuk-semua-usia',
            'body' => '<p>Taman Wisata Matahari adalah tempat rekreasi yang sangat cocok untuk keluarga...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Curug Cilember, Keindahan Air Terjun di Tengah Hutan',
            'slug' => 'curug-cilember-keindahan-air-terjun-di-tengah-hutan',
            'body' => '<p>Curug Cilember merupakan salah satu air terjun yang terletak di kawasan Bogor...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Kampung Budaya Sindangbarang, Menyelami Tradisi Lokal',
            'slug' => 'kampung-budaya-sindangbarang-menyelami-tradisi-lokal',
            'body' => '<p>Kampung Budaya Sindangbarang menawarkan kesempatan unik untuk merasakan kehidupan tradisional...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Pusat Oleh-Oleh Bogor, Cenderamata yang Tak Boleh Terlewatkan',
            'slug' => 'pusat-oleh-oleh-bogor-cenderamata-yang-tak-boleh-terlewatkan',
            'body' => '<p>Bogor terkenal dengan berbagai produk oleh-oleh khas yang dapat dibawa pulang...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Taman Safari Indonesia, Bertemu Satwa di Habitatnya',
            'slug' => 'taman-safari-indonesia-bertemu-satwa-di-habitatnya',
            'body' => '<p>Taman Safari Indonesia di Puncak adalah destinasi populer bagi mereka yang ingin melihat satwa liar...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Curug Nangka, Air Terjun Tersembunyi di Bogor',
            'slug' => 'curug-nangka-air-terjun-tersembunyi-di-bogor',
            'body' => '<p>Curug Nangka adalah salah satu air terjun tersembunyi di Bogor yang menawarkan keindahan alam...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Taman Bunga Nusantara, Keindahan Flora dari Seluruh Indonesia',
            'slug' => 'taman-bunga-nusantara-keindahan-flora-dari-seluruh-indonesia',
            'body' => '<p>Taman Bunga Nusantara adalah destinasi yang wajib dikunjungi bagi pecinta bunga dan taman...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Masjid Agung Bogor, Arsitektur dan Sejarah Islam di Kota Bogor',
            'slug' => 'masjid-agung-bogor-arsitektur-dan-sejarah-islam-di-kota-bogor',
            'body' => '<p>Masjid Agung Bogor adalah salah satu masjid bersejarah yang menjadi ikon kota ini...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Taman Topi Bogor, Ruang Terbuka untuk Santai dan Bermain',
            'slug' => 'taman-topi-bogor-ruang-terbuka-untuk-santai-dan-bermain',
            'body' => '<p>Taman Topi Bogor adalah ruang terbuka hijau yang ideal untuk bersantai dan bermain...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Pura Parahyangan Agung Jagatkartta, Sentuhan Bali di Bogor',
            'slug' => 'pura-parahyangan-agung-jagatkartta-sentuhan-bali-di-bogor',
            'body' => '<p>Pura Parahyangan Agung Jagatkartta adalah pura Hindu yang terletak di kawasan Bogor...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Jalan-Jalan di Pasar Bogor, Menyelami Kehidupan Lokal',
            'slug' => 'jalan-jalan-di-pasar-bogor-menyelami-kehidupan-lokal',
            'body' => '<p>Pasar Bogor adalah tempat yang tepat untuk merasakan kehidupan sehari-hari masyarakat setempat...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Curug Cibeureum, Keindahan Alam di Taman Nasional',
            'slug' => 'curug-cibeureum-keindahan-alam-di-taman-nasional',
            'body' => '<p>Curug Cibeureum, terletak di Taman Nasional Gunung Halimun Salak...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'The Jungle Waterpark, Keseruan di Taman Air Terbesar Bogor',
            'slug' => 'the-jungle-waterpark-keseruan-di-taman-air-terbesar-bogor',
            'body' => '<p>The Jungle Waterpark adalah taman air terbesar di Bogor yang menawarkan berbagai wahana air...</p>',
            'category_id' => 3,
        ]);

        Post::create([
            'title' => 'Bubur Ayam Bogor, Kuliner Khas yang Harus Dicoba',
            'slug' => 'bubur-ayam-bogor-kuliner-khas-yang-harus-dicoba',
            'body' => '<p>Bubur Ayam adalah salah satu kuliner khas Bogor yang sangat populer...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Kampung Warna-Warni, Kehidupan Berwarna di Bogor',
            'slug' => 'kampung-warna-warni-kehidupan-berwarna-di-bogor',
            'body' => '<p>Kampung Warna-Warni adalah area di Bogor yang dikenal dengan rumah-rumah yang dicat...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Danau Situ Gede, Rekreasi di Tengah Ketenangan Alam',
            'slug' => 'danau-situ-gede-rekreasi-di-tengah-ketenangan-alam',
            'body' => '<p>Danau Situ Gede adalah danau yang terletak di Bogor dan menawarkan suasana yang tenang...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Taman Sempur, Ruang Terbuka yang Ramah Keluarga',
            'slug' => 'taman-sempur-ruang-terbuka-yang-ramah-keluarga',
            'body' => '<p>Taman Sempur adalah taman kota di Bogor yang menawarkan berbagai fasilitas untuk rekreasi keluarga...</p>',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Taman Marga Satwa Cisarua, Edukasi dan Hiburan tentang Satwa',
            'slug' => 'taman-marga-satwa-cisarua-edukasi-dan-hiburan-tentang-satwa',
            'body' => '<p>Taman Marga Satwa Cisarua adalah taman satwa yang menawarkan kesempatan untuk melihat berbagai jenis hewan...</p>',
            'category_id' => 3,
        ]);

        Post::create([
            'title' => 'Museum Zoologi, Mengintip Keanekaragaman Hayati di Bogor',
            'slug' => 'museum-zoologi-mengintip-keanekaragaman-hayati-di-bogor',
            'body' => '<p>Museum Zoologi adalah tempat yang tepat untuk belajar tentang keanekaragaman hayati di Indonesia...</p>',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Paralayang di Puncak, Sensasi Terbang di Atas Lembah',
            'slug' => 'paralayang-di-puncak-sensasi-terbang-di-atas-lembah',
            'body' => '<p>Paralayang di Puncak menawarkan pengalaman yang tak terlupakan dengan terbang di atas lembah yang indah...</p>',
            'category_id' => 3,
        ]);

        Post::create([
            'title' => 'Jalan-Jalan di Taman Heulang, Spot Asyik untuk Bersantai',
            'slug' => 'jalan-jalan-di-taman-heulang-spot-asyik-untuk-bersantai',
            'body' => '<p>Taman Heulang adalah salah satu taman kota di Bogor yang menjadi tempat favorit untuk bersantai...</p>',
            'category_id' => 1,
        ]);


        Transaction::factory(5)->create();
    }
}
