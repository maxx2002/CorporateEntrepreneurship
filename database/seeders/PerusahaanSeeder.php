<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'CaravanStudio',
            'logo_path' => 'img/perusahaan/caravanstudio.webp',
            'nama_perusahaan' => 'Caravan Studio',
            'deskripsi_singkat' => '<p>Caravan Studio adalah sebuah studio art outsourcing kelas dunia dengan pengalaman lebih dari 10 tahun membuat desain dan ilustrasi untuk perusahaan di dunia, seperti Marvel Comics, Wizard of the Coast, Hasbro, Mattel, DeNA, Gree, Capcom, Konami, Sony Online Entertainment, Riot Games, dan HBO Asia.</p>
            <p>Caravan Studio fokus pada produksi artwork 2D dalam bentuk komik, ilustrasi, desain mainan, desain konsep visual untuk video game dan film. Berlokasi di Indonesia, Caravan Studio saat ini merupakan salah satu studio konsep desain terbesar di Asia Tenggar</p>',
            'visi_misi' => 'VISI :<br />
            Menjadi studio concept art terbaik di industri entertainment di dunia
            Terbaik dalam aspek kualitas artwork yang mampu bersaing dengan desain kelas internasional dengan tetap menjaga kepuasan klien
            <br /><br />
            MISI:
            <br />
            <p>1. Fokus menghasilkan concept art di bidang film</p>
            <p>2. Tetap mengembangkan servis di bidang ilustrasi, game dan media turunannya</p>
            <p>3. Membantu meningkatkan kualitas hidup karyawan</p>
            <p>4. Memberikan peningkatan fasilitas studio</p>
            <p>5. Bekerja sama dengan pihak-pihak lain untuk investasi ke dalam studio</p>
            
            ',
            'website_resmi' => 'https://caravanstudio.com/',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSfM2kJCf5EIJh9pRRbTYF6AXb1VbxoJC-OYsmWh7lnf752j3w/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'AstraIzuzu',
            'logo_path' => 'img/perusahaan/astraizuzu.gif',
            'nama_perusahaan' => 'PT Astra International',
            'deskripsi_singkat' => 'PT Isuzu Astra Motor Indonesia (IAMI), perusahaan ventura bersama antara PT Astra International Tbk dan Isuzu Motors Limited, dan merupakan agen pemegang merek Isuzu serta produsen kendaraan, komponen, aksesoris, dan suku cadang merek Isuzu di Indonesia. Distribusi kendaraan Isuzu kategori commercial vehicle (CV) ditangani oleh IAMI, sedangkan untuk distribusi kendaraan Isuzu kategori light commercial vehicle (LCV) didukung oleh PT Astra International Tbk - Isuzu Sales Operation (ISO) salah satu divisi operasional Astra.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => '',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'WarnaWarniMedia',
            'logo_path' => 'img/perusahaan/warnawarni.png',
            'nama_perusahaan' => 'PT Warna Warni Media',
            'deskripsi_singkat' => '<p>PT Warna Warni Media (Group) adalah perusahaan yang bergerak di bidang JASA ADVERTISING khusus Media Luar Ruang. Salah Satu Produk kami adalah Jasa Pemasangan Reklame Billboard, Neon Box, LED (Videotron) dan sekaligus&nbsp; Pengurusan Perijinan Reklame.</p>
            <p>PT Warna Warni berdiri sejak tahun 1975 dan menjadi Perusahaan Advertising Nomor satu di Surabaya dan Jawa Timur.</p>
            <p>Saat ini kami telah membuka cabang di beberapa kota di Indonesia diantaranya adalah Jakarta, Bandung, Denpasar, Medan dan Makasar.</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSfr7zt7HtcXtVlcO4zHqhi43vhe6DwkAHtYAsNuFzRSdr2V3Q/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'wismilak',
            'logo_path' => 'img/perusahaan/wismilak.jpeg',
            'nama_perusahaan' => 'PT Wismilak Inti Makmur Tbk',
            'deskripsi_singkat' => '<p>WISMILAK merupakan perusahaan rokok Indonesia yang didirikan pada tahun 1962 di Surabaya. Pada tahun 2012, Wismilak sukses melakukan penawaran umum perdana saham Perseroan kepada masyarakat dan menjadi Perusahaan Publik, PT Wismilak Inti Makmur Tbk.</p>
            <p>PT Wismilak Inti Makmur Tbk merupakan perusahaan induk dari PT Gelora Djaja (produsen) dan PT Gawih Jaya (distributor) yang pada tahun 2022 memiliki 4 Fasilitas Produksi, 4 Sentra Logistik Regional, 22 Area Distribusi, 2 Stock Points dan 26 Agen yang tersebar di seluruh pulau besar di Indonesia</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSfCmIR2AgGpjUbKtYolcjoLnONUXkoEa2ONwBIs2M5Ad3mv_g/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'bca',
            'logo_path' => 'img/perusahaan/bca.png',
            'nama_perusahaan' => 'PT Bank Central Asia, Tbk',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSf6IOyvFNceDsNSkqRzIkMtr6qruSJNS0lfvIyR7bsDWUz90Q/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'HotelCiputraWorld',
            'logo_path' => 'img/perusahaan/hotelcw.png',
            'nama_perusahaan' => 'Hotel Ciputra World',
            'deskripsi_singkat' => 'Hotel Ciputra World Surabaya adalah sebuah hotel mewah berbintang lima yang dikelola oleh perusahaan manajemen ternama, Swiss-Belhotel International. Dengan menyediakan layanan berkualitas tinggi dengan fasilitas yang mewah serta lokasi yang strategis di jantung kawasan pusat bisnis Surabaya menjadikan Hotel Ciputra World Surabaya sebagai pilihan utama bagi wisatawan yang datang ke Surabaya, baik untuk bisnis maupun wisata. Terdiri dari 220 kamar dan suite, para wisatawan dapat memilih di antara empat jenis kamar yang paling sesuai dengan kebutuhan masing-masing. Tiga restoran dan lounge serta fasilitas lainnya tersedia untuk memanjakan para wisatawan agar mendapatkan pengalaman menginap terbaik.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdz3mzxhhOjlSiFYkfKamT5ivBoSOovK7mdQebegcjleOyYcA/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'platinum',
            'logo_path' => 'img/perusahaan/platinum.jpg',
            'nama_perusahaan' => 'PT Platinum Ceramics Industry',
            'deskripsi_singkat' => 'PT Platinum Ceramics Industry (PT PCI) adalah produsen ubin keramik terkemuka yang mengutamakan kualitas dan inovasi produknya. Didirikan pada 19 Oktober 1971, kami pertama kali dikenal sebagai PT Asia Industri Keramik. Kami telah memproduksi berbagai jenis ubin keramik untuk lantai, dinding, dan dekorasi dengan kualitas terbaik dan telah didistribusikan ke jutaan pelanggan kami di seluruh dunia.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdHqc91H8h4exC0FBBpxsVhByKSWLkzb_rfjJZnDXU5Bx5woQ/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'ucmakassar',
            'logo_path' => 'img/perusahaan/ucmakassar.png',
            'nama_perusahaan' => 'UC Makassar',
            'deskripsi_singkat' => 'UC Makassar adalah kampus kedua dari salah satu universitas swasta terbaik di Indonesia, Universitas Ciputra Surabaya. UC Makassar terletak di Center Point Indonesia, Citraland City Losari, Makassar. UC Makassar berkomitmen untuk memberikan pendidikan dan praktik kewirausahaan kepada seluruh mahasiswa, baik dalam mengembangkan bisnis yang sudah ada, menjadi profesional, maupun memulai bisnis baru.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSeZE02hcsvrl-KeXtq5jLm0XMtdpPWaRd3qDLI1k1pdcnNB5w/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'wings',
            'logo_path' => 'img/perusahaan/wings.png',
            'nama_perusahaan' => 'PT Wings Surya',
            'deskripsi_singkat' => 'Wings menjadi salah satu nama yang terpercaya di Indonesia. Keluarga Indonesia beralih ke berbagai produk rumah tangga, perawatan pribadi, makanan & minuman, dan berharap Wings menyediakan produk berkualitas tanpa kompromi. Merek kami telah diturunkan dari generasi ke generasi. Dengan teknologi manufaktur yang canggih, fasilitas kelas dunia dan jaminan kualitas yang ketat, produk Wings memenuhi standar industri tertinggi. Dengan tetap inovatif dan menghadirkan produk-produk berkualitas tinggi selama lebih dari 70 tahun, Wings menghormati komitmennya untuk meningkatkan kehidupan sehari-hari konsumen Indonesia dan menunjukkan sejauh mana perusahaan menghargai pelanggannya. Inovasi dan mengikuti perubahan selera konsumen telah memungkinkan Wings untuk tetap berada di garis depan pasar barang konsumen. Perusahaan telah memperluas jangkauan portofolio produknya melalui joint venture dengan Lion Japan, Glico Japan dan Calbee Japan. Lion Wings memproduksi berbagai produk dengan berbagai merek seperti Ciptadent, Kodomo, Systema, Emeron, Serasoft, Zinc, Mama Lemon dan Posh. Glico Wings memproduksi berbagai es krim dengan merek Haku, Waku Waku, Frost Bite dan J-Cone, sedangkan Calbee Wings memproduksi berbagai makanan ringan dengan merek Potabee, Krisbee dan Japota.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdHqc91H8h4exC0FBBpxsVhByKSWLkzb_rfjJZnDXU5Bx5woQ/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'marketingofficeciputra',
            'logo_path' => 'img/perusahaan/marketingciputra.png',
            'nama_perusahaan' => 'Marketing Office Ciputra',
            'deskripsi_singkat' => '',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdeRUtBZWbRU2y1Jc0xayux2N5qlwFN4XmDETBHDhGMNeThrg/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'tancorp',
            'logo_path' => 'img/perusahaan/tancorp.png',
            'nama_perusahaan' => 'PT Tancorp Abadi Nusantara (Cleo dan Avian)',
            'deskripsi_singkat' => 'Tancorp merupakan perusahaan induk Indonesia yang bertumbuh secara eksponensial. Group ini dibagi menjadi 8 Sub Holding dan mengelola lebih dari 300 brand di Indonesia. Hadir dengan tagline “For a Better Human Life”, Kami fokus untuk menjadi group terkemuka dan berkontribusi dalam kesejahteraan bangsa Indonesia.
            Perjalanan kami dimulai sejak 43 tahun lalu, tepatnya pada 1979. Hermanto Tanoko merupakan founder Tancorp Group yang memiliki visi yang luar biasa. Berkat pemikiran inovatifnya, group kami melahirkan beberapa perusahaan yang bergerak di berbagai bidang industri. Mulai Industri, Consumer goods, healthy, lifestyle, FnB, property, kosmetik, fashion, hingga hospitality. Hal ini kami lakukan untuk mengakomodasi kebutuhan masyarakat Indonesia dari hulu hingga ke hilir.
            ',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSfXGxR3fnp2aNeN-a2lPvhgU8sVo1VPYdE_X1q5JiDvG1czSg/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'mceasy',
            'logo_path' => 'img/perusahaan/mceasy.png',
            'nama_perusahaan' => 'Mc Easy',
            'deskripsi_singkat' => 'McEasy menyediakan solusi digital berbasis Internet dan GPS Tracker untuk menjawab kebutuhan operasional logistik dan pelacakan lokasi kendaraan.
            Perusahaan kami berdiri sejak tahun 2017 dan terus bertransformasi menjadi terdepan dalam memberikan solusi terintegrasi di bidang transportasi logistik.
            ',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => '',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'siantartop',
            'logo_path' => 'img/perusahaan/siantartop.jpeg',
            'nama_perusahaan' => 'PT Siantar Top, Tbk',
            'deskripsi_singkat' => 'PT Siantar Top Tbk, pertama kali didirikan pada tahun 1972. Sebagai pelopor industri makanan ringan di Jawa Timur, pada tahun 1996 Siantar Top tercatat sebagai perusahaan publik di Bursa Efek Indonesia. Saat ini PT Siantar Top terus berkembang dan memperkuat posisinya sebagai perusahaan garda terdepan yang bergerak di bidang manufacturing makanan ringan. PT Siantar Top mulai melebarkan sayapnya, melakukan ekspansi di beberapa kawasan Asia, salah satunya Cina. Seiring dengan berjalannya waktu, PT Siantar Top terus melakukan pembenahan dalam segi kualitas produk sehingga bisa diterima di berbagai kalangan. Dan karena kualitas produknya, kini berbagai macam produk PT Siantar Top dapat dinikmati oleh konsumen yang tersebar di mancanegara.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdpcLoZHloxKtieQKKgvOrFr3ErmPi0lcJAFUkbwkVT29WfjA/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'vitapharm',
            'logo_path' => 'img/perusahaan/vitapharm.png',
            'nama_perusahaan' => 'PT Vitapharm',
            'deskripsi_singkat' => 'PT. Vitapharm merupakan perusahaan cosmetic besar dan terkemuka di Indonesia sejak tahun 1962 yang memproduksi produk kecantikan',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => '',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'ucsurabaya',
            'logo_path' => 'img/perusahaan/ucsurabaya.png',
            'nama_perusahaan' => 'UC Surabaya',
            'deskripsi_singkat' => '<p>Universitas Ciputra memiliki komitmen bahwa setiap alur studi/konsentrasi yang ada memiliki tujuan sama yaitu membekali setiap mahasiswa agar mampu menjadi Entrepreneur sesuai keahlian masing-masing. Pendidikan dan Praktek Entrepreneurship diberikan secara merata di semua alur studi/konsentrasi mulai dari awal perkuliahan dimulai sampai akhir perkuliahan.</p>
            <p>Entrepreneurship memiliki arti yang lebih luas dari sekedar berjualan, membuka dan menjalankan bisnis karena didalamnya terdapat unsur kreativitas &amp; inovasi, kemampuan membaca kebutuhan pasar (market sensitivity) dan pengambilan resiko yang terhitung (calculated risk taking). Pada era masa kini, tantangan zaman semakin berat, kompetisi global terjadi, oleh karena itu Entrepreneur yang dihasilkan oleh institusi pendidikan tinggi haruslah Entrepreneur intelektual dengan keahlian sesuai bidang yang dipelajarinya.</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSd5fRlWQf_agbmFYiQIsxZC9S6-YniZSxdJ5e8M6kHdhsmGjQ/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'c+c&co',
            'logo_path' => 'img/perusahaan/c+c&co.png',
            'nama_perusahaan' => 'C+C&CO',
            'deskripsi_singkat' => 'C+C&Co adalah agensi kreatif yang berbasis di Singapura dalam komunikasi dan pemasaran multi-disiplin, pengarahan seni, pengembangan merek & Intelijen desain. Toko komunikasi kreatif satu atap yang mengkhususkan diri dalam kebutuhan komunikasi. Mulai dari art direction, identitas, iklan, kolateral, desain kemasan hingga branding lingkungan. Kami menyesuaikan setiap proyek dengan kebutuhan klien dengan tetap unik dalam metodologi mereka sendiri. Proses desain yang menyeluruh didukung dengan pemahaman, pengamatan, konseptualisasi, penciptaan dan integrasi akhirnya secara efisien. Nilai-nilai kami berpikiran terbuka, efisien, beragam, kolaboratif, progresif. Kami telah berdiri sejak 2012 dan kami percaya dalam menciptakan karya yang menyisipkan disiplin dan bergerak melampaui indera. Sudah menjadi budaya kita untuk mengkolaborasikan berbagai disiplin ilmu untuk mendefinisikan kembali situasi di luar batas normal',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSccqvmx5jV-tj_h_854Np19K7e7urGlnBWBRq4nqMQygtrhgQ/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'komunal',
            'logo_path' => 'img/perusahaan/komunal.png',
            'nama_perusahaan' => 'Komunal',
            'deskripsi_singkat' => 'Komunal merupakan perusahaan berbasis teknologi finansial yang memberikan layanan peer-to-peer di Indonesia yang membantu menciptakan hubungan antara UMKM berpotensi dan para pemberi dana untuk mendukung pertumbuhan perekonomian di Indonesia.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSclIyJ3xdms6m2WChzZkI5MSbO0CBrrlmPO0rE5rAJ_-eKGDg/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'prudential',
            'logo_path' => 'img/perusahaan/prudential.png',
            'nama_perusahaan' => 'Prudential Life Assurance',
            'deskripsi_singkat' => '<p>PT Prudential Life Assurance (Prudential Indonesia) didirikan pada 1995 dan merupakan bagian dari Prudential PLC, yang menyediakan asuransi jiwa dan kesehatan serta manajemen aset, dengan berfokus di Asia dan Afrika. Dengan menggabungkan pengalaman internasional Prudential di bidang asuransi jiwa dengan pengetahuan tata cara bisnis lokal, Prudential Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.</p>
            <p>Sejak meluncurkan produk asuransi yang dikaitkan dengan investasi (unit link) pertamanya pada 1999, Prudential Indonesia merupakan pemimpin pasar untuk produk tersebut di Indonesia. Prudential Indonesia telah mendirikan Unit Usaha Syariah sejak 2007 dan dipercaya sebagai pemimpin pasar asuransi jiwa syariah di Indonesia sejak pendiriannya.</p>
            <p>Hingga 31 Desember 2021, Prudential Indonesia memiliki kantor pusat di Jakarta dengan 6 kantor pemasaran di Bandung, Semarang, Surabaya, Denpasar, Medan, dan Batam serta 361 Kantor Pemasaran Mandiri (KPM) di seluruh Indonesia. Sampai akhir 2021, Prudential Indonesia melayani 2,5 juta tertanggung yang didukung oleh lebih dari 172.000 Tenaga Pemasar berlisensi.</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSfD2MpwqHPEqt228GuImYs0STV756az2g2S4nItO1Oy-c8qjg/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'orangtua',
            'logo_path' => 'img/perusahaan/orangtua.png',
            'nama_perusahaan' => 'PT CS2 POLA SEHAT (OT GROUP)',
            'deskripsi_singkat' => 'OT adalah perusahaan consumer goods yang memproduksi berbagai macam produk kebutuhan sehari-hari. Berawal dari minuman kesehatan tradisional dengan bahan dan proses terstandar berkualitas tinggi, OT telah berkembang semakin modern tanpa meninggalkan nilai-nilai positif dan luhur yang dicetuskan oleh pendiri perusahaan.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSe3o74w8TN4qH_kwfVXbg0JYiIlEEjrEiWA2q6BYxYWa65HFA/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'magnetsolusiintegra',
            'logo_path' => 'img/perusahaan/magnetsolusiintegra.jpg',
            'nama_perusahaan' => 'PT Magnet Solusi Integra',
            'deskripsi_singkat' => '<p>Sumber daya manusia adalah salah satu asset terpenting bagi perusahaan. Kemajuan sebuah perusahaan akan sangat bergantung pada bagaimana pengelolaan SDM di dalamnya. Untuk memastikan kesesuaian pengelolaan SDM dan mendorong kemajuan bisnis, Magnet Solusi Integra hadir dengan menawarkan berbagai jasa yang dapat disesuaikan dengan kebutuhan klien.</p>
            <p>Dengan visi menjadi &ldquo;Partner terpercaya dalam meningkatkan nilai tambah SDM dan bisnis perusahaan&rdquo;, MSI berperan dalam peningkatan kompetensi SDM dan kapabilitas organisasi dengan memberikan jasa layanan yang berkualitas, penyelesaian tepat waktu dan output yang memberikan nilai tambah. Magnet Solusi Integra berpegang teguh pada prinsip profesionalisme dan menjunjung tinggi kontribusi positif bagi klien dengan mengandalkan pengalaman praktis yang dimiliki oleh para Konsultan. Kami percaya bahwa bantuan profesional yang kami berikan akan mendorong perkembangan klien mencapai tujuan organisasi.</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSd4RDJ84zLIYgDIHfKmzNwuyaJOk40tEdTSk2o3C7YzIVu6_w/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'xaviermarks',
            'logo_path' => 'img/perusahaan/xaviermarks.jpg',
            'nama_perusahaan' => 'Xavier Marks',
            'deskripsi_singkat' => 'Menjadi penolong terbaik bagi para klien/customer (pelanggan) dalam memenuhi kebutuhan properti mereka untuk untuk dapat menemukan "rumah yang baru" sesuai dengan impian mereka.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSc_JzdSMRvsaBItN7p5PCcRsAfTkB0CYPKwbMrZ3fL8tuFPwA/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'ciptaoggifurindo',
            'logo_path' => 'img/perusahaan/ciptaoggifurindo.png',
            'nama_perusahaan' => 'PT Cipta Oggi Furindo',
            'deskripsi_singkat' => 'PT Cipta Oggi Furindo, yang berbasis di Surabaya, Indonesia, adalah perusahaan berkembang yang mengkhususkan diri dalam produk furnitur. Kami mengembangkan dan memproduksi furnitur berkualitas dengan harga terjangkau untuk pasar lokal Indonesia dan internasional. Kami menawarkan berbagai portofolio furnitur knock-down, dari perabot rumah hingga perabot kantor. Dengan fokus strategis kami di pasar, kami terus meningkatkan sumber daya manusia serta teknologi kami untuk melayani kebutuhan spesifik Anda dengan lebih baik. PT Cipta Oggi Furindo sangat mapan saat ini. Pengalaman kami yang luas dan keakraban kami dengan persyaratan distributor dan konsumen akhir, berarti bahwa kami dapat mendukung pelanggan kami dengan sukses di semua fase pengembangan produk, dari ide awal hingga produk jadi.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSerdkWRxkGDkbg1-K0UFV1eNpPLJtwRFwXVnJR86jQ6SEQ5cg/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'grahamultibintang',
            'logo_path' => 'img/perusahaan/grahamultibintang.png',
            'nama_perusahaan' => 'PT Graha Multi Bintang',
            'deskripsi_singkat' => 'PT. GRAHA MULTI BINTANG ( Olympic Group ) perusahaan skala nasional, pencipta knocked-down furniture pertama di Indonesia dan berpengalaman lebih dari 30 tahun bergerak dibidang manufacturing & trading untuk produk Panel Furniture, Plastic Furniture, Metal Furniture, Office Furniture dan Gallery, yang berkantor pusat di Surabaya dan memiliki lebih dari 20 unit manufaktur serta cabang pemasaran yang tersebar diseluruh wilayah Indonesia.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSe0JLd5Bg-mEd-MOFHkr_RWYSUaNlsyitNR-QaK_0dGIK53dw/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'tongtji',
            'logo_path' => 'img/perusahaan/tongtji.png',
            'nama_perusahaan' => 'Tong Tji',
            'deskripsi_singkat' => 'Perusahaan Tong Tji didirikan pada 1938 pada tahun 1938 oleh Alm. Bapak Tan See Giam. Beliau menciptakan resep tradisional campuran teh dengan menggunakan peralatan tradisional seperti kompor arang dan panci. Mulai dari industri rumah tangga sederhana, perusahaan ini telah menjadi salah satu produsen teh terbesar di Indonesia.',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLSdfaZ5P6JxWRs0lySY-2TSGFPxuYFiL8-La_s0kYIVpdYp-bQ/viewform',
        ]);
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 'bcamultifinance',
            'logo_path' => 'img/perusahaan/bcamultifinance.jpg',
            'nama_perusahaan' => 'BCA Multi Finance',
            'deskripsi_singkat' => '<p>BCA Multi Finance merupakan anak perusahaan BCA yang bergerak di bidang pembiayaan roda dua, roda empat dan multiguna. Didirikan berdasarkan akta No.95 tanggal 29 April 2010 dari Kementerian Hukum dan HAM Republik Indonesia</p>
            <p>No. AHU-23631.AH.01.01 Tahun 2010 tanggal 10 Mei 2010</p>
            <p>Resmi beroperasi pada tanggal 17 September 2010 dengan izin dari Departemen Keuangan</p>
            <p>No. KEP-523/KM.10/2010 pada tanggal 3 September 2010</p>',
            'visi_misi' => '',
            'website_resmi' => '',
            'link_gdocs' => 'https://docs.google.com/forms/d/e/1FAIpQLScS4CTroM_sDCBM25r6od1OSGXeQ0t7tADLjOCxJBqujiguXA/viewform',
        ]);
    }
}
