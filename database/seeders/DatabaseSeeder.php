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
            'image' => 'assets/gambar/bogor-botanical.png',
            'user_id' => 1,
        ]);

        Gallery::create([
            'title' => 'Taman Safari Indonesia',
            'slug' => 'taman-safari-indonesia',
            'image' => 'assets/gambar/Taman Wisata Matahari.png',
            'user_id' => 2,
        ]);

        Gallery::create([
            'title' => 'Puncak',
            'slug' => 'puncak',
            'image' => 'assets/gambar/puncakpass.png',
            'user_id' => 3,
        ]);

        Gallery::create([
            'title' => 'Curug Cilember',
            'slug' => 'curug-cilember',
            'image' => 'assets/gambar/curug_cilember.png',
            'user_id' => 4,
        ]);

        Gallery::create([
            'title' => 'Curug Bidadari',
            'slug' => 'curug-bidadari',
            'image' => 'assets/gambar/curug_bidadari.png',
            'user_id' => 5,
        ]);

        Gallery::create([
            'title' => 'De\'Ranch',
            'slug' => 'de-ranch',
            'image' => 'assets/gambar/deranch.png',
            'user_id' => 6,
        ]);

        Gallery::create([
            'title' => 'Kampung Warna-Warni',
            'slug' => 'kampung-warna-warni',
            'image' => 'assets/gambar/kampungwarna.png',
            'user_id' => 7,
        ]);

        Gallery::create([
            'title' => 'Puncak Pass',
            'slug' => 'puncak-pass',
            'image' => 'assets/gambar/puncakpass.png',
            'user_id' => 8,
        ]);

        Gallery::create([
            'title' => 'Gunung Salak',
            'slug' => 'gunung-salak',
            'image' => 'assets/gambar/curug_bidadari.png',
            'user_id' => 9,
        ]);

        Gallery::create([
            'title' => 'Taman Wisata Matahari',
            'slug' => 'taman-wisata-matahari',
            'image' => 'assets/gambar/Taman Wisata Matahari.png',
            'user_id' => 10,
        ]);

        Gallery::create([
            'title' => 'Bogor Botanical Gardens',
            'slug' => 'bogor-botanical-gardens',
            'image' => 'assets/gambar/bogor-botanical.png',
            'user_id' => 1,
        ]);

        Gallery::create([
            'title' => 'Pura Parahyangan Agung Jagatkartta',
            'slug' => 'pura-parahyangan-agung-jagatkartta',
            'image' => 'assets/gambar/pura-parahyangan.png',
            'user_id' => 2,
        ]);

        Gallery::create([
            'title' => 'The Jungle Waterpark',
            'slug' => 'the-jungle-waterpark',
            'image' => 'assets/gambar/the_jungle_waterpark.png',
            'user_id' => 3,
        ]);

        Gallery::create([
            'title' => 'Kampung Budaya Sindangbarang',
            'slug' => 'kampung-budaya-sindangbarang',
            'image' => 'assets/gambar/Kampung Budaya Sindangbarang.png',
            'user_id' => 4,
        ]);

        Gallery::create([
            'title' => 'Taman Nasional Gunung Gede Pangrango',
            'slug' => 'taman-nasional-gunung-gede-pangrango',
            'image' => 'assets/gambar/Taman Wisata Matahari.png',
            'user_id' => 5,
        ]);

        Ticket::create([
            "title" => "Kebun Raya Bogor",
            "slug" => "kebun-raya-bogor",
            "price" => 15000,
            "location" => "Bogor",
            "description" => "Taman botani seluas 87 hektar yang memiliki koleksi tanaman langka dan sejarah yang panjang. Ideal untuk piknik dan jalan-jalan santai.",
            "category_id" => 1,
            "image" => "assets/gambar/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Taman Safari Indonesia",
            "slug" => "taman-safari-indonesia",
            "price" => 300000,
            "location" => "Bogor",
            "description" => "Kebun binatang yang menawarkan pengalaman melihat berbagai satwa liar dari dalam mobil. Ada juga wahana hiburan dan pertunjukan.",
            "category_id" => 3,
            "image" => "assets/gambar/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Puncak",
            "slug" => "puncak",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Area pegunungan yang terkenal dengan pemandangan alamnya, kebun teh, dan udara sejuk. Cocok untuk berkemah atau sekadar bersantai.",
            "category_id" => 1,
            "image" => "assets/gambar/puncakpass.png"
        ]);

        Ticket::create([
            "title" => "Curug Cilember",
            "slug" => "curug_cilember",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Air terjun yang terletak di tengah hutan tropis dengan trek trekking yang menyenangkan dan pemandangan alam yang indah.",
            "category_id" => 1,
            "image" => "assets/gambar/curug_cilember.png"
        ]);

        Ticket::create([
            "title" => "Curug Bidadari",
            "slug" => "curug-bidadari",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Air terjun yang indah dengan kolam di bawahnya, cocok untuk berenang dan menikmati suasana alam.",
            "category_id" => 1,
            "image" => "assets/gambar/curug_bidadari.png"
        ]);

        Ticket::create([
            "title" => "De'Ranch",
            "slug" => "de-ranch",
            "price" => 50000,
            "location" => "Bogor",
            "description" => "Tempat wisata keluarga dengan tema peternakan, menawarkan aktivitas berkuda, bermain di area playground, dan mencoba berbagai wahana.",
            "category_id" => 3,
            "image" => "assets/gambar/deranch.png"
        ]);

        Ticket::create([
            "title" => "Kampung Warna-Warni",
            "slug" => "kampung-warna-warni",
            "price" => 10000,
            "location" => "Bogor",
            "description" => "Kawasan pemukiman yang telah dicat dengan warna-warni cerah, menawarkan suasana yang Instagramable.",
            "category_id" => 2,
            "image" => "assets/gambar/kampungwarna.png"
        ]);

        Ticket::create([
            "title" => "Puncak Pass",
            "slug" => "puncak-pass",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Titik tertinggi di Puncak dengan pemandangan pegunungan yang menakjubkan. Tempat yang bagus untuk makan sambil menikmati lanskap.",
            "category_id" => 1,
            "image" => "assets/gambar/puncakpass.png"
        ]);

        Ticket::create([
            "title" => "Gunung Salak",
            "slug" => "gunung-salak",
            "price" => 10000,
            "location" => "Bogor",
            "description" => "Gunung berapi yang menawarkan jalur pendakian dengan pemandangan indah dan udara segar. Cocok untuk para pendaki.",
            "category_id" => 1,
            "image" => "assets/gambar/kebun-raya.png"
        ]);

        Ticket::create([
            "title" => "Taman Wisata Matahari",
            "slug" => "taman-wisata-matahari",
            "price" => 100000,
            "location" => "Bogor",
            "description" => "Taman bermain dengan berbagai wahana untuk anak-anak dan dewasa, termasuk kolam renang dan area bermain.",
            "category_id" => 3,
            "image" => "assets/gambar/Taman Wisata Matahari.png"
        ]);

        Ticket::create([
            "title" => "Bogor Botanical Gardens",
            "slug" => "bogor-botanical-gardens",
            "price" => 15000,
            "location" => "Bogor",
            "description" => "Sebuah taman botani dengan berbagai koleksi tanaman dan suasana yang menenangkan.",
            "category_id" => 1,
            "image" => "assets/gambar/bogor-botanical.png"
        ]);

        Ticket::create([
            "title" => "Pura Parahyangan Agung Jagatkartta",
            "slug" => "pura-parahyangan-agung-jagatkartta",
            "price" => 20000,
            "location" => "Bogor",
            "description" => "Tempat ibadah Hindu Bali yang terletak di kawasan pegunungan. Menawarkan pemandangan yang indah dan suasana spiritual.",
            "category_id" => 2,
            "image" => "assets/gambar/pura-parahyangan.png"
        ]);

        Ticket::create([
            "title" => "The Jungle Waterpark",
            "slug" => "the-jungle-waterpark",
            "price" => 150000,
            "location" => "Bogor",
            "description" => "Taman air dengan berbagai wahana air, kolam renang, dan area bermain untuk keluarga. Cocok untuk bersantai dan bersenang-senang.",
            "category_id" => 3,
            "image" => "assets/gambar/the_jungle_waterpark.png"
        ]);

        Ticket::create([
            "title" => "Kampung Budaya Sindangbarang",
            "slug" => "kampung-budaya-sindangbarang",
            "price" => 30000,
            "location" => "Bogor",
            "description" => "Desa budaya yang menampilkan kehidupan dan tradisi masyarakat Sunda, termasuk rumah adat, kerajinan tangan, dan pertunjukan budaya.",
            "category_id" => 2,
            "image" => "assets/gambar/Kampung Budaya Sindangbarang.png"
        ]);

        Ticket::create([
            "title" => "Taman Nasional Gunung Gede Pangrango",
            "slug" => "taman-nasional-gunung-gede-pangrango",
            "price" => 25000,
            "location" => "Bogor",
            "description" => "Taman nasional yang meliputi dua gunung berapi, menawarkan trek pendakian, flora dan fauna yang kaya, serta pemandangan alam yang spektakuler.",
            "category_id" => 1,
            "image" => "assets/gambar/kebun-raya.png"
        ]);



        Post::create([
            'title' => 'Menjelajahi Kebun Raya Bogor, Oase Hijau di Tengah Kota',
            'slug' => 'menjelajahi-kebun-raya-bogor-oase-hijau-di-tengah-kota',
            'body' => '<p>Kebun Raya Bogor merupakan destinasi utama bagi para pecinta alam. Didirikan pada tahun 1817, kebun ini memiliki koleksi tumbuhan yang sangat beragam dan merupakan salah satu kebun raya tertua di dunia. Pengunjung dapat menikmati pemandangan yang hijau dan segar sambil berjalan-jalan di jalur-jalur yang telah disediakan. Di sini, Anda juga dapat mengunjungi berbagai spot menarik seperti Taman Anggrek, Taman Cactaceae, dan Danau Gunting. Kebun Raya Bogor juga memiliki pusat informasi yang menyediakan berbagai informasi edukatif tentang flora dan fauna di Indonesia.</p>',
            'category_id' => 1,
            "image" => "assets/post/1.png"
        ]);

        Post::create([
            'title' => 'Puncak, Destinasi Liburan Keluarga yang Tak Pernah Membosankan',
            'slug' => 'puncak-destinasi-liburan-keluarga-yang-tak-pernah-membosankan',
            'body' => '<p>Puncak adalah kawasan wisata yang sangat populer di kalangan keluarga dan pasangan yang ingin melarikan diri dari hiruk-pikuk kota. Terletak hanya beberapa jam dari Bogor, Puncak menawarkan udara yang sejuk, pemandangan pegunungan yang menakjubkan, dan berbagai atraksi. Beberapa tempat yang harus dikunjungi termasuk Taman Safari Indonesia, yang memungkinkan Anda melihat berbagai hewan dari dekat, serta Kebun Teh Gunung Mas yang menawarkan pemandangan hijau yang menenangkan. Puncak juga memiliki berbagai pilihan akomodasi dan restoran yang dapat memenuhi berbagai kebutuhan wisatawan.</p>',
            'category_id' => 1,
            "image" => "assets/post/2.png"
        ]);

        Post::create([
            'title' => 'Istana Bogor, Sejarah dan Keindahan Arsitektur Kolonial',
            'slug' => 'istana-bogor-sejarah-dan-keindahan-arsitektur-kolonial',
            'body' => '<p>Istana Bogor, atau yang dikenal juga sebagai Istana Presiden, merupakan salah satu bangunan bersejarah yang penting di Bogor. Dikenal dengan arsitektur kolonial Belanda yang megah, istana ini dulunya merupakan tempat tinggal gubernur jenderal dan kini digunakan sebagai kediaman resmi presiden Indonesia. Pengunjung dapat menikmati keindahan taman yang luas, yang dikelilingi oleh berbagai koleksi tanaman langka. Meskipun tidak semua area istana dapat diakses, tour yang diadakan secara berkala memberikan wawasan mendalam tentang sejarah dan fungsi istana ini.</p>',
            'category_id' => 2,
            "image" => "assets/post/3.png"
        ]);

        Post::create([
            'title' => 'Kawah Ratu, Eksplorasi Alam di Kawasan Geologi Menarik',
            'slug' => 'kawah-ratu-eksplorasi-alam-di-kawasan-geologi-menarik',
            'body' => '<p>Kawah Ratu, bagian dari Taman Nasional Gunung Halimun Salak, menawarkan pengalaman mendalam dalam eksplorasi geologi. Terletak di area yang memiliki aktivitas vulkanik, Kawah Ratu adalah sebuah kawah besar yang dapat dikunjungi oleh para petualang. Jalur pendakian menuju kawah ini menawarkan pemandangan spektakuler dan kesempatan untuk melihat flora dan fauna yang khas dari daerah pegunungan. Pastikan untuk memeriksa kondisi cuaca sebelum berkunjung dan siapkan perlengkapan yang sesuai untuk trekking.</p>',
            'category_id' => 1,
            "image" => "assets/post/4.png"
        ]);

        Post::create([
            'title' => 'Taman Wisata Matahari, Tempat Rekreasi Seru untuk Semua Usia',
            'slug' => 'taman-wisata-matahari-tempat-rekreasi-seru-untuk-semua-usia',
            'body' => '<p>Taman Wisata Matahari adalah tempat rekreasi yang sangat cocok untuk keluarga, terutama bagi anak-anak. Dengan berbagai fasilitas yang dirancang untuk memberikan hiburan, seperti wahana permainan, kolam renang, dan area piknik, tempat ini menjanjikan kesenangan bagi semua pengunjung. Taman ini juga memiliki area yang didedikasikan untuk edukasi dengan berbagai pameran dan kegiatan yang mendidik tentang lingkungan dan kehidupan hewan. Selain itu, tersedia berbagai pilihan makanan dan minuman untuk memenuhi kebutuhan wisatawan.</p>',
            'category_id' => 1,
            "image" => "assets/post/5.png"
        ]);

        Post::create([
            'title' => 'Curug Cilember, Keindahan Air Terjun di Tengah Hutan',
            'slug' => 'curug-cilember-keindahan-air-terjun-di-tengah-hutan',
            'body' => '<p>Curug Cilember merupakan salah satu air terjun yang terletak di kawasan Bogor. Dengan trek pendakian yang relatif mudah, pengunjung dapat menikmati keindahan hutan tropis sambil menuju air terjun yang menakjubkan. Suasana sekitar Curug Cilember sangat tenang dan cocok untuk relaksasi atau piknik. Air terjun ini juga dikelilingi oleh berbagai jenis flora dan fauna yang dapat dinikmati selama perjalanan. Pastikan untuk membawa kamera untuk mengabadikan momen indah dan jangan lupa menjaga kebersihan area sekitar.</p>',
            'category_id' => 1,
            "image" => "assets/post/6.png"
        ]);

        Post::create([
            'title' => 'Kampung Budaya Sindangbarang, Menyelami Tradisi Lokal',
            'slug' => 'kampung-budaya-sindangbarang-menyelami-tradisi-lokal',
            'body' => '<p>Kampung Budaya Sindangbarang menawarkan kesempatan unik untuk merasakan kehidupan tradisional suku Sunda. Di sini, pengunjung dapat melihat berbagai kegiatan budaya, termasuk tarian tradisional, kerajinan tangan, dan kuliner khas. Kampung ini juga sering mengadakan pertunjukan seni dan festival yang memperkenalkan budaya lokal kepada wisatawan. Selain itu, suasana desa yang asri memberikan pengalaman yang menyegarkan dan kontras dengan kehidupan urban yang sibuk.</p>',
            'category_id' => 2,
            "image" => "assets/post/7.png"
        ]);

        Post::create([
            'title' => 'Pusat Oleh-Oleh Bogor, Cenderamata yang Tak Boleh Terlewatkan',
            'slug' => 'pusat-oleh-oleh-bogor-cenderamata-yang-tak-boleh-terlewatkan',
            'body' => '<p>Bogor terkenal dengan berbagai produk oleh-oleh khas yang dapat dibawa pulang sebagai cenderamata. Di Pusat Oleh-Oleh Bogor, Anda akan menemukan berbagai pilihan mulai dari makanan khas seperti roti kukus, dodol, hingga kerajinan tangan. Tempat ini adalah destinasi ideal untuk membeli oleh-oleh untuk keluarga dan teman. Berbagai produk lokal yang berkualitas tinggi dapat ditemukan di sini dengan harga yang terjangkau, menjadikannya tempat belanja yang menyenangkan dan praktis.</p>',
            'category_id' => 2,
            "image" => "assets/post/8.png"
        ]);

        Post::create([
            'title' => 'Taman Safari Indonesia, Bertemu Satwa di Habitatnya',
            'slug' => 'taman-safari-indonesia-bertemu-satwa-di-habitatnya',
            'body' => '<p>Taman Safari Indonesia di Puncak adalah destinasi populer bagi mereka yang ingin melihat satwa liar dalam lingkungan yang mendekati habitat asli mereka. Dengan berbagai jenis hewan dari seluruh dunia, taman safari ini menawarkan pengalaman yang mendidik dan menghibur. Pengunjung dapat mengikuti tur dengan mobil pribadi atau kendaraan yang disediakan, serta menikmati berbagai atraksi seperti pertunjukan hewan dan wahana permainan. Taman ini juga memiliki area kebun binatang mini, restoran, dan fasilitas lain yang membuat kunjungan menjadi pengalaman yang menyenangkan.</p>',
            'category_id' => 1,
            "image" => "assets/post/9.png"
        ]);

        Post::create([
            'title' => 'Curug Nangka, Air Terjun Tersembunyi di Bogor',
            'slug' => 'curug-nangka-air-terjun-tersembunyi-di-bogor',
            'body' => '<p>Curug Nangka adalah salah satu air terjun tersembunyi di Bogor yang menawarkan keindahan alam yang menawan. Terletak di dalam hutan yang lebat, perjalanan menuju air terjun ini mungkin memerlukan sedikit usaha, tetapi pemandangan yang didapat sangat memuaskan. Air terjun ini memiliki kolam di bawahnya yang cocok untuk berendam dan bersantai. Selama perjalanan, pengunjung akan disuguhi pemandangan hutan tropis yang asri dan beragam flora dan fauna.</p>',
            'category_id' => 1,
            "image" => "assets/post/10.png"
        ]);

        Post::create([
            'title' => 'Taman Bunga Nusantara, Keindahan Flora dari Seluruh Indonesia',
            'slug' => 'taman-bunga-nusantara-keindahan-flora-dari-seluruh-indonesia',
            'body' => '<p>Taman Bunga Nusantara adalah destinasi yang wajib dikunjungi bagi pecinta bunga dan taman. Dengan berbagai jenis bunga dan tanaman dari seluruh Indonesia, taman ini menawarkan pemandangan yang memukau dan kesempatan untuk berfoto di spot-spot yang indah. Pengunjung dapat menjelajahi berbagai zona taman, seperti Taman Eropa, Taman Jepang, dan Taman Bali, yang masing-masing menawarkan keunikan dan keindahan tersendiri. Taman Bunga Nusantara juga memiliki berbagai fasilitas termasuk area bermain anak dan kafe untuk bersantai.</p>',
            'category_id' => 1,
            "image" => "assets/post/11.png"
        ]);

        Post::create([
            'title' => 'Masjid Agung Bogor, Arsitektur dan Sejarah Islam di Kota Bogor',
            'slug' => 'masjid-agung-bogor-arsitektur-dan-sejarah-islam-di-kota-bogor',
            'body' => '<p>Masjid Agung Bogor adalah salah satu masjid bersejarah yang menjadi ikon kota ini. Dengan arsitektur yang menggabungkan elemen tradisional dan modern, masjid ini bukan hanya tempat ibadah tetapi juga situs sejarah yang menarik untuk dikunjungi. Pengunjung dapat mengagumi desain interior yang indah dan belajar tentang sejarah serta perkembangan Islam di Bogor. Selain itu, masjid ini sering mengadakan berbagai kegiatan keagamaan dan sosial yang melibatkan masyarakat setempat.</p>',
            'category_id' => 2,
            "image" => "assets/post/12.png"
        ]);

        Post::create([
            'title' => 'Taman Topi Bogor, Ruang Terbuka untuk Santai dan Bermain',
            'slug' => 'taman-topi-bogor-ruang-terbuka-untuk-santai-dan-bermain',
            'body' => '<p>Taman Topi Bogor adalah ruang terbuka hijau yang ideal untuk bersantai dan bermain. Dengan berbagai fasilitas seperti area bermain anak, jogging track, dan tempat duduk yang nyaman, taman ini merupakan tempat yang sempurna untuk piknik atau sekadar menghabiskan waktu bersama keluarga. Taman ini juga sering menjadi lokasi berbagai acara komunitas dan festival lokal. Keberadaannya di pusat kota memudahkan akses bagi pengunjung yang ingin menikmati suasana alam di tengah hiruk-pikuk kota.</p>',
            'category_id' => 1,
            "image" => "assets/post/13.png"
        ]);

        Post::create([
            'title' => 'Pura Parahyangan Agung Jagatkartta, Sentuhan Bali di Bogor',
            'slug' => 'pura-parahyangan-agung-jagatkartta-sentuhan-bali-di-bogor',
            'body' => '<p>Pura Parahyangan Agung Jagatkartta adalah pura Hindu yang terletak di kawasan Bogor dan menawarkan nuansa Bali yang khas. Dikenal dengan arsitektur yang megah dan suasana yang damai, pura ini merupakan tempat ibadah dan juga destinasi wisata yang menarik. Pengunjung dapat menjelajahi area pura yang indah, melihat upacara keagamaan, dan mempelajari lebih lanjut tentang budaya dan kepercayaan Hindu. Suasana yang tenang dan keindahan desain pura membuatnya menjadi tempat yang cocok untuk refleksi dan meditasi.</p>',
            'category_id' => 2,
            "image" => "assets/post/14.png"
        ]);

        Post::create([
            'title' => 'Jalan-Jalan di Pasar Bogor, Menyelami Kehidupan Lokal',
            'slug' => 'jalan-jalan-di-pasar-bogor-menyelami-kehidupan-lokal',
            'body' => '<p>Plaza Bogor adalah tempat yang tepat untuk merasakan kehidupan sehari-hari masyarakat setempat dan menemukan berbagai produk lokal. Dari makanan tradisional hingga kerajinan tangan, pasar ini menawarkan berbagai barang yang bisa dibeli dengan harga terjangkau. Pengunjung dapat mencicipi kuliner khas Bogor seperti bakso, sate, dan jajanan pasar yang menggugah selera. Selain itu, pasar ini juga memberikan kesempatan untuk berinteraksi dengan penduduk lokal dan merasakan suasana kota yang autentik.</p>',
            'category_id' => 2,
            "image" => "assets/post/15.png"
        ]);

        Post::create([
            'title' => 'Curug Cibeureum, Keindahan Alam di Taman Nasional',
            'slug' => 'curug-cibeureum-keindahan-alam-di-taman-nasional',
            'body' => '<p>Curug Cibeureum, terletak di Taman Nasional Gunung Halimun Salak, menawarkan pemandangan alam yang menakjubkan dengan air terjun yang mengalir deras. Perjalanan menuju air terjun ini melibatkan trekking ringan melalui hutan tropis, yang memberikan kesempatan untuk melihat flora dan fauna lokal. Air terjun ini juga dikelilingi oleh pemandangan pegunungan yang hijau, menciptakan latar belakang yang sempurna untuk berfoto. Pastikan untuk membawa perlengkapan trekking yang sesuai dan mematuhi petunjuk keamanan selama kunjungan.</p>',
            'category_id' => 1,
            "image" => "assets/post/16.png"
        ]);

        Post::create([
            'title' => 'The Jungle Waterpark, Keseruan di Taman Air Terbesar Bogor',
            'slug' => 'the-jungle-waterpark-keseruan-di-taman-air-terbesar-bogor',
            'body' => '<p>The Jungle Waterpark adalah taman air terbesar di Bogor yang menawarkan berbagai wahana air untuk keluarga dan anak-anak. Dengan berbagai seluncuran, kolam arus, dan area bermain, tempat ini menyediakan banyak aktivitas seru untuk semua usia. Taman air ini juga dilengkapi dengan fasilitas modern seperti cabana, restoran, dan area piknik. Baik untuk perayaan ulang tahun, liburan keluarga, atau sekadar bersenang-senang di akhir pekan, The Jungle Waterpark adalah pilihan yang ideal untuk menyegarkan diri.</p>',
            'category_id' => 3,
            "image" => "assets/post/17.png"
        ]);

        Post::create([
            'title' => 'Bubur Ayam Bogor, Kuliner Khas yang Harus Dicoba',
            'slug' => 'bubur-ayam-bogor-kuliner-khas-yang-harus-dicoba',
            'body' => '<p>Bubur Ayam adalah salah satu kuliner khas Bogor yang sangat populer. Hidangan ini terdiri dari bubur nasi yang disajikan dengan potongan ayam, cakue, daun bawang, dan bumbu khas yang menggugah selera. Di Bogor, Anda dapat menemukan berbagai penjual bubur ayam dengan resep dan cara penyajian yang berbeda-beda. Cobalah bubur ayam di tempat-tempat legendaris atau warung lokal untuk merasakan rasa asli dari kuliner ini. Bubur Ayam Bogor adalah pilihan yang sempurna untuk sarapan atau makan siang yang lezat.</p>',
            'category_id' => 2,
            "image" => "assets/post/18.png"
        ]);

        Post::create([
            'title' => 'Kampung Warna-Warni, Kehidupan Berwarna di Bogor',
            'slug' => 'kampung-warna-warni-kehidupan-berwarna-di-bogor',
            'body' => '<p>Kampung Warna-Warni adalah area di Bogor yang dikenal dengan rumah-rumah yang dicat dengan warna-warna cerah dan desain mural yang menarik. Tempat ini menawarkan pengalaman visual yang unik dan sering menjadi latar belakang untuk foto-foto yang Instagramable. Selain menikmati keindahan visual, pengunjung juga dapat berinteraksi dengan penduduk lokal yang ramah dan melihat berbagai aktivitas komunitas yang berlangsung di kampung ini. Kampung Warna-Warni adalah contoh sukses dari revitalisasi kawasan urban melalui seni dan kreativitas.</p>',
            'category_id' => 2,
            "image" => "assets/post/19.png"
        ]);

        Post::create([
            'title' => 'Danau Situ Gede, Rekreasi di Tengah Ketenangan Alam',
            'slug' => 'danau-situ-gede-rekreasi-di-tengah-ketenangan-alam',
            'body' => '<p>Danau Situ Gede adalah danau yang terletak di Bogor dan menawarkan suasana yang tenang untuk bersantai dan beristirahat. Dengan pemandangan danau yang luas dan dikelilingi oleh hutan, tempat ini merupakan pilihan yang baik untuk piknik, berperahu, atau sekadar menikmati keindahan alam. Di sekitar danau terdapat jalur-jalur yang cocok untuk berjalan-jalan dan menikmati udara segar. Situ Gede juga merupakan lokasi yang baik untuk menikmati matahari terbenam yang spektakuler.</p>',
            'category_id' => 1,
            "image" => "assets/post/20.png"
        ]);

        Post::create([
            'title' => 'Taman Sempur, Ruang Terbuka yang Ramah Keluarga',
            'slug' => 'taman-sempur-ruang-terbuka-yang-ramah-keluarga',
            'body' => '<p>Taman Sempur adalah taman kota di Bogor yang menawarkan berbagai fasilitas untuk rekreasi keluarga. Dengan area bermain anak, lapangan olahraga, dan jalur jogging, taman ini merupakan tempat yang ideal untuk aktivitas luar ruangan. Selain itu, taman ini juga sering menjadi lokasi berbagai acara komunitas dan festival lokal. Pengunjung dapat menikmati suasana yang segar dan berbagai fasilitas yang mendukung kegiatan keluarga dan komunitas.</p>',
            'category_id' => 1,
            "image" => "assets/post/21.png"
        ]);

        Post::create([
            'title' => 'Taman Marga Satwa Cisarua, Edukasi dan Hiburan tentang Satwa',
            'slug' => 'taman-marga-satwa-cisarua-edukasi-dan-hiburan-tentang-satwa',
            'body' => '<p>Taman Marga Satwa Cisarua adalah taman satwa yang menawarkan kesempatan untuk melihat berbagai jenis hewan dan belajar tentang konservasi satwa. Dengan berbagai atraksi seperti pertunjukan hewan dan area interaksi, tempat ini memberikan pengalaman yang mendidik dan menghibur. Pengunjung dapat melihat berbagai spesies dari dekat dan memahami pentingnya pelestarian habitat alami mereka. Taman ini juga dilengkapi dengan fasilitas pendukung seperti restoran dan area piknik.</p>',
            'category_id' => 3,
            "image" => "assets/post/22.png"
        ]);

        Post::create([
            'title' => 'Jungleland Adventure Theme Park, Petualangan Seru di Bogor',
            'slug' => 'jungleland-adventure-theme-park',
            'body' => '<p>Jungleland Adventure Theme Park adalah taman hiburan yang menawarkan berbagai wahana dan atraksi untuk seluruh keluarga. Dengan berbagai jenis roller coaster, wahana air, dan area permainan anak-anak, tempat ini menjanjikan pengalaman yang seru dan menyenangkan. Jungleland juga memiliki zona tema yang berbeda, seperti zona fantasi dan zona petualangan, yang memberikan variasi dan kesenangan untuk semua usia. Taman ini adalah pilihan yang baik untuk liburan akhir pekan atau perayaan spesial.</p>',
            'category_id' => 2,
            "image" => "assets/post/23.png"
        ]);

        Post::create([
            'title' => 'Pasar Rakyat Puncak Bogor, Temukan Cita Rasa Lokal',
            'slug' => 'pasar-rakyat-puncak-bogor-temukan-cita-rasa',
            'body' => '<p>Pasar Rakyat Bogor adalah pasar tradisional yang menawarkan berbagai produk lokal dan makanan khas. Di sini, pengunjung dapat menemukan berbagai bahan makanan segar, kerajinan tangan, dan kuliner tradisional seperti keripik dan kue khas. Suasana pasar yang ramai memberikan pengalaman berbelanja yang autentik dan kesempatan untuk berinteraksi dengan pedagang lokal. Pasar ini juga merupakan tempat yang baik untuk mencicipi makanan khas Bogor yang mungkin tidak ditemukan di tempat lain.</p>',
            'category_id' => 3,
            "image" => "assets/post/24.png"
        ]);

        Post::create([
            'title' => 'D’Dieu Resort, Relaksasi dan Kemewahan di Bogor',
            'slug' => 'ddieu-resort-relaksasi-kemewahan-di-bogor',
            'body' => '<p>D’Dieu Resort adalah tempat ideal untuk bersantai dan menikmati liburan dengan fasilitas mewah. Dengan berbagai pilihan akomodasi yang nyaman, kolam renang, spa, dan restoran gourmet, resort ini menawarkan pengalaman relaksasi yang menyenangkan. Suasana yang tenang dan fasilitas yang lengkap menjadikannya tempat yang sempurna untuk pelarian dari rutinitas sehari-hari. Resort ini juga memiliki pemandangan alam yang indah dan berbagai aktivitas rekreasi yang dapat dinikmati oleh para tamu.</p>',
            'category_id' => 1,
            "image" => "assets/post/25.png"
        ]);


        Transaction::factory(5)->create();
    }
}
